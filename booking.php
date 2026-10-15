<?php
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ==========================================
// AVAILABLE SERVICES
// ==========================================

$services = [
    'Airport Transfers',
    'City to City Rides',
    'Executive Taxi',
    'Meet & Greet',
    'Flight Monitoring',
    'Baby Seats'
];


// ==========================================
// AVAILABLE RIDES
// ==========================================

$rides = [
    'Business Van/SUV' => [
        'description' => 'Mercedes-Benz V-Class, Chevrolet Suburban, Cadillac',
        'image' => 'fleet-suv.png'
    ],

    'Executive MPV' => [
        'description' => 'Mercedes-Benz V-Class or similar 8-seat minibus',
        'image' => 'fleet-v-class.png'
    ],

    'Mini Trailer' => [
        'description' => 'Mini trailer with a payload capacity of 600kg',
        'image' => 'fleet-mini-trailer.png'
    ]
];


// ==========================================
// GET JOURNEY INFORMATION
// ==========================================

$service = trim($_GET['service'] ?? $_POST['service'] ?? '');

$pickup = trim(
    $_GET['pickuplocation']
    ?? $_POST['pickuplocation']
    ?? ''
);

$dropoff = trim(
    $_GET['droplocation']
    ?? $_POST['droplocation']
    ?? ''
);

$date = trim(
    $_GET['pickupdate']
    ?? $_POST['pickupdate']
    ?? ''
);

$time = trim(
    $_GET['pickuptime']
    ?? $_POST['pickuptime']
    ?? ''
);


// ==========================================
// MESSAGES
// ==========================================

$message = '';
$error = '';


// ==========================================
// BOOKING SUBMISSION
// ==========================================

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // --------------------------------------
    // Customer information
    // --------------------------------------

    $name = trim($_POST['customer_name'] ?? '');

    $email = trim($_POST['customer_email'] ?? '');

    $phone = trim($_POST['customer_phone'] ?? '');

    $passengers = trim($_POST['passengers'] ?? '');

    $luggage = trim($_POST['luggage'] ?? '');

    $ride = trim($_POST['ride'] ?? '');

    $notes = trim($_POST['notes'] ?? '');


    // --------------------------------------
    // Validation
    // --------------------------------------

    if (!in_array($service, $services, true)) {

        $error = 'Please select a valid service.';

    } elseif (
        $pickup === '' ||
        $dropoff === '' ||
        $date === '' ||
        $time === ''
    ) {

        $error = 'Please complete the journey details.';

    } elseif (!array_key_exists($ride, $rides)) {

        $error = 'Please select an available ride.';

    } elseif (
        $name === '' ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        $phone === ''
    ) {

        $error = 'Please enter your name, a valid email address and phone number.';

    } else {

        // ----------------------------------
        // Generate booking reference
        // ----------------------------------

        $reference =
            'TBS-' .
            date('Ymd') .
            '-' .
            strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));


        // ----------------------------------
        // Clean text helper
        // ----------------------------------

        $clean = static function ($value) {

            return trim(
                preg_replace(
                    '/\s+/',
                    ' ',
                    (string) $value
                )
            );

        };


        $name = $clean($name);
        $pickup = $clean($pickup);
        $dropoff = $clean($dropoff);
        $ride = $clean($ride);
        $passengers = $clean($passengers);
        $luggage = $clean($luggage);
        $notes = $clean($notes);
        $phone = $clean($phone);


        // ==================================
        // ADMIN / TBS EMAIL
        // ==================================

        try {

            $adminMail = new PHPMailer(true);

            // SMTP
            $adminMail->isSMTP();

            $adminMail->Host = SMTP_HOST;

            $adminMail->SMTPAuth = true;

            $adminMail->Username = SMTP_USERNAME;

            $adminMail->Password = SMTP_PASSWORD;

            $adminMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            $adminMail->Port = SMTP_PORT;


            // Sender
            $adminMail->setFrom(
                BOOKING_FROM_EMAIL,
                BOOKING_FROM_NAME
            );


            // TBS recipient
            $adminMail->addAddress(
                BOOKING_RECIPIENT_EMAIL
            );


            // Customer email as reply-to
            $adminMail->addReplyTo(
                $email,
                $name
            );


            $adminMail->isHTML(true);


            $adminMail->Subject =
                'New SERBY (TBS) TAXI BURY Booking - ' . $reference;


            $adminMail->Body = '

                <div style="font-family:Arial,sans-serif;line-height:1.6;color:#222;">

                        <h2>New SERBY (TBS) TAXI BURY Booking</h2>

                    <p>
                        <strong>Booking Reference:</strong>
                        ' . htmlspecialchars($reference) . '
                    </p>

                    <hr>

                    <h3>Journey Details</h3>

                    <p>
                        <strong>Service:</strong>
                        ' . htmlspecialchars($service) . '
                    </p>

                    <p>
                        <strong>Pickup:</strong>
                        ' . htmlspecialchars($pickup) . '
                    </p>

                    <p>
                        <strong>Drop-off:</strong>
                        ' . htmlspecialchars($dropoff) . '
                    </p>

                    <p>
                        <strong>Date:</strong>
                        ' . htmlspecialchars($date) . '
                    </p>

                    <p>
                        <strong>Time:</strong>
                        ' . htmlspecialchars($time) . '
                    </p>

                    <p>
                        <strong>Ride:</strong>
                        ' . htmlspecialchars($ride) . '
                    </p>

                    <p>
                        <strong>Passengers:</strong>
                        ' . htmlspecialchars($passengers) . '
                    </p>

                    <p>
                        <strong>Luggage:</strong>
                        ' . htmlspecialchars($luggage) . '
                    </p>

                    <hr>

                    <h3>Customer Details</h3>

                    <p>
                        <strong>Name:</strong>
                        ' . htmlspecialchars($name) . '
                    </p>

                    <p>
                        <strong>Email:</strong>
                        ' . htmlspecialchars($email) . '
                    </p>

                    <p>
                        <strong>Phone:</strong>
                        ' . htmlspecialchars($phone) . '
                    </p>

                    <p>
                        <strong>Additional Requirements:</strong><br>
                        ' . nl2br(htmlspecialchars($notes)) . '
                    </p>

                </div>

            ';


            $adminMail->AltBody =
                "New SERBY (TBS) TAXI BURY Booking\n\n" .

                "Booking Reference: {$reference}\n" .

                "Service: {$service}\n" .

                "Pickup: {$pickup}\n" .

                "Drop-off: {$dropoff}\n" .

                "Date: {$date}\n" .

                "Time: {$time}\n" .

                "Ride: {$ride}\n" .

                "Passengers: {$passengers}\n" .

                "Luggage: {$luggage}\n\n" .

                "Customer Details\n" .

                "Name: {$name}\n" .

                "Email: {$email}\n" .

                "Phone: {$phone}\n" .

                "Notes: {$notes}";


            $adminMail->send();


            // ==================================
            // CUSTOMER EMAIL
            // ==================================

            $customerMail = new PHPMailer(true);


            // SMTP
            $customerMail->isSMTP();

            $customerMail->Host = SMTP_HOST;

            $customerMail->SMTPAuth = true;

            $customerMail->Username = SMTP_USERNAME;

            $customerMail->Password = SMTP_PASSWORD;

            $customerMail->SMTPSecure =
                PHPMailer::ENCRYPTION_STARTTLS;

            $customerMail->Port = SMTP_PORT;


            // Sender
            $customerMail->setFrom(
                BOOKING_FROM_EMAIL,
                BOOKING_FROM_NAME
            );


            // Customer's own email
            $customerMail->addAddress(
                $email,
                $name
            );


            $customerMail->isHTML(true);


            $customerMail->Subject =
                'SERBY (TBS) TAXI BURY Booking Confirmation - ' .
                $reference;


            $customerMail->Body = '

                <div style="font-family:Arial,sans-serif;line-height:1.6;color:#222;">

                    <h2>Booking Confirmation</h2>

                    <p>
                        Dear ' .
                        htmlspecialchars($name) .
                        ',
                    </p>

                    <p>
                        Thank you for booking with SERBY (TBS) TAXI BURY.
                        We have received your booking request.
                    </p>

                    <p>
                        <strong>Booking Reference:</strong>
                        ' .
                        htmlspecialchars($reference) .
                    '
                    </p>

                    <hr>

                    <h3>Your Journey</h3>

                    <p>
                        <strong>Service:</strong>
                        ' .
                        htmlspecialchars($service) .
                    '
                    </p>

                    <p>
                        <strong>Pickup:</strong>
                        ' .
                        htmlspecialchars($pickup) .
                    '
                    </p>

                    <p>
                        <strong>Drop-off:</strong>
                        ' .
                        htmlspecialchars($dropoff) .
                    '
                    </p>

                    <p>
                        <strong>Date:</strong>
                        ' .
                        htmlspecialchars($date) .
                    '
                    </p>

                    <p>
                        <strong>Time:</strong>
                        ' .
                        htmlspecialchars($time) .
                    '
                    </p>

                    <p>
                        <strong>Ride:</strong>
                        ' .
                        htmlspecialchars($ride) .
                    '
                    </p>

                    <p>
                        <strong>Passengers:</strong>
                        ' .
                        htmlspecialchars($passengers) .
                    '
                    </p>

                    <p>
                        <strong>Luggage:</strong>
                        ' .
                        htmlspecialchars($luggage) .
                    '
                    </p>

                    <hr>

                    <p>
                        We will be in touch regarding your booking.
                    </p>

                    <p>
                        <strong>SERBY (TBS) TAXI BURY</strong>
                    </p>

                </div>

            ';


            $customerMail->AltBody =
                "Dear {$name},\n\n" .

                "Thank you for booking with SERBY (TBS) TAXI BURY.\n\n" .

                "Booking Reference: {$reference}\n\n" .

                "Service: {$service}\n" .

                "Pickup: {$pickup}\n" .

                "Drop-off: {$dropoff}\n" .

                "Date: {$date}\n" .

                "Time: {$time}\n" .

                "Ride: {$ride}\n" .

                "Passengers: {$passengers}\n" .

                "Luggage: {$luggage}\n\n" .

                "We will be in touch regarding your booking.\n\n" .

                "SERBY (TBS) TAXI BURY";


            $customerMail->send();


            // ==================================
            // SUCCESS
            // ==================================

            $message =
                'Your booking has been submitted successfully. ' .
                'Your booking reference is ' .
                $reference .
                '. A confirmation email has been sent to ' .
                $email .
                '.';


        } catch (Exception $e) {

            $error =
                'Your booking could not be sent. ' .
                'Please check the SMTP configuration.';

            // For localhost debugging only:
            // error_log($e->getMessage());
        }
    }
}

?>

<?php require __DIR__ . '/includes/head.php'; ?>

<body>

<?php require __DIR__ . '/includes/header.php'; ?>


<!-- ==========================================
     PAGE HEADER
========================================== -->

<div class="page-header bg-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="page-header-box">

                    <h1
                        class="text-anime-style-3"
                        data-cursor="-opaque"
                    >
                        Complete Your Booking
                    </h1>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">

                                <a href="./">
                                    Home
                                </a>

                            </li>

                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Booking
                            </li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- ==========================================
     BOOKING SECTION
========================================== -->

<section class="booking-page-section bg-section">

    <div class="container">


        <div class="row section-row">

            <div class="col-xl-12">

                <div class="section-title section-title-center">

                    <span class="section-sub-title">
                        Your Journey
                    </span>

                    <h2
                        class="text-anime-style-3"
                        data-cursor="-opaque"
                    >
                        Confirm your transfer details
                    </h2>

                </div>

            </div>

        </div>


        <?php if ($message): ?>

            <div class="booking-success">

                <?php
                echo htmlspecialchars(
                    $message,
                    ENT_QUOTES,
                    'UTF-8'
                );
                ?>

            </div>

        <?php endif; ?>


        <?php if ($error): ?>

            <div class="booking-error">

                <?php
                echo htmlspecialchars(
                    $error,
                    ENT_QUOTES,
                    'UTF-8'
                );
                ?>

            </div>

        <?php endif; ?>


        <?php if (!$message): ?>


            <!-- JOURNEY SUMMARY -->

            <div class="booking-summary">

                <div class="booking-summary-grid">


                    <div class="booking-summary-item">

                        <span>
                            Service
                        </span>

                        <strong>

                            <?php
                            echo htmlspecialchars(
                                $service ?: 'Not selected',
                                ENT_QUOTES,
                                'UTF-8'
                            );
                            ?>

                        </strong>

                    </div>


                    <div class="booking-summary-item">

                        <span>
                            Pickup
                        </span>

                        <strong>

                            <?php
                            echo htmlspecialchars(
                                $pickup ?: 'Not selected',
                                ENT_QUOTES,
                                'UTF-8'
                            );
                            ?>

                        </strong>

                    </div>


                    <div class="booking-summary-item">

                        <span>
                            Drop-off
                        </span>

                        <strong>

                            <?php
                            echo htmlspecialchars(
                                $dropoff ?: 'Not selected',
                                ENT_QUOTES,
                                'UTF-8'
                            );
                            ?>

                        </strong>

                    </div>


                    <div class="booking-summary-item">

                        <span>
                            Date &amp; Time
                        </span>

                        <strong>

                            <?php

                            $dateTimeDisplay =
                                ($date ?: 'Not selected');

                            if ($time) {

                                $dateTimeDisplay .=
                                    ' • ' . $time;

                            }

                            echo htmlspecialchars(
                                $dateTimeDisplay,
                                ENT_QUOTES,
                                'UTF-8'
                            );

                            ?>

                        </strong>

                    </div>


                </div>

            </div>


            <!-- BOOKING FORM -->

            <div class="booking-form-card">

                <form
                    method="POST"
                    action="booking"
                >


                    <!-- JOURNEY DATA -->

                    <input
                        type="hidden"
                        name="service"
                        value="<?php
                        echo htmlspecialchars(
                            $service,
                            ENT_QUOTES,
                            'UTF-8'
                        );
                        ?>"
                    >

                    <input
                        type="hidden"
                        name="pickuplocation"
                        value="<?php
                        echo htmlspecialchars(
                            $pickup,
                            ENT_QUOTES,
                            'UTF-8'
                        );
                        ?>"
                    >

                    <input
                        type="hidden"
                        name="droplocation"
                        value="<?php
                        echo htmlspecialchars(
                            $dropoff,
                            ENT_QUOTES,
                            'UTF-8'
                        );
                        ?>"
                    >

                    <input
                        type="hidden"
                        name="pickupdate"
                        value="<?php
                        echo htmlspecialchars(
                            $date,
                            ENT_QUOTES,
                            'UTF-8'
                        );
                        ?>"
                    >

                    <input
                        type="hidden"
                        name="pickuptime"
                        value="<?php
                        echo htmlspecialchars(
                            $time,
                            ENT_QUOTES,
                            'UTF-8'
                        );
                        ?>"
                    >


                    <!-- RIDE -->

                    <div class="section-title">

                        <h3>
                            Select Your Ride
                        </h3>

                    </div>


                    <div class="ride-options form-group">


                        <?php foreach (
                            $rides as $rideName => $rideData
                        ): ?>


                            <div class="ride-option">

                                <input
                                    type="radio"
                                    id="ride_<?php
                                    echo md5($rideName);
                                    ?>"
                                    name="ride"
                                    value="<?php
                                    echo htmlspecialchars(
                                        $rideName,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    );
                                    ?>"
                                    required
                                >


                                <label
                                    for="ride_<?php
                                    echo md5($rideName);
                                    ?>"
                                >

                                    <div class="ride-image">
                                        <img src="images/<?php echo htmlspecialchars($rideData['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($rideName, ENT_QUOTES, 'UTF-8'); ?>">
                                    </div>

                                    <div class="ride-details">

                                    <strong>

                                        <?php
                                        echo htmlspecialchars(
                                            $rideName,
                                            ENT_QUOTES,
                                            'UTF-8'
                                        );
                                        ?>

                                    </strong>


                                    <small>

                                        <?php
                                        echo htmlspecialchars(
                                            $rideData['description'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        );
                                        ?>

                                    </small>

                                    </div>

                                </label>


                            </div>


                        <?php endforeach; ?>


                    </div>


                    <!-- CUSTOMER -->

                    <div
                        class="section-title"
                        style="margin-top:35px;"
                    >

                        <h3>
                            Your Details
                        </h3>

                    </div>


                    <div class="row">


                        <div class="col-md-6">

                            <div class="form-group">

                                <label
                                    for="customer_name"
                                >
                                    Full Name *
                                </label>

                                <input
                                    type="text"
                                    id="customer_name"
                                    name="customer_name"
                                    required
                                >

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="form-group">

                                <label
                                    for="customer_email"
                                >
                                    Email Address *
                                </label>

                                <input
                                    type="email"
                                    id="customer_email"
                                    name="customer_email"
                                    required
                                >

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="form-group">

                                <label
                                    for="customer_phone"
                                >
                                    Phone Number *
                                </label>

                                <input
                                    type="tel"
                                    id="customer_phone"
                                    name="customer_phone"
                                    required
                                >

                            </div>

                        </div>


                        <div class="col-md-3">

                            <div class="form-group">

                                <label
                                    for="passengers"
                                >
                                    Passengers
                                </label>

                                <input
                                    type="number"
                                    id="passengers"
                                    name="passengers"
                                    min="1"
                                    value="1"
                                >

                            </div>

                        </div>


                        <div class="col-md-3">

                            <div class="form-group">

                                <label
                                    for="luggage"
                                >
                                    Luggage
                                </label>

                                <input
                                    type="number"
                                    id="luggage"
                                    name="luggage"
                                    min="0"
                                    value="0"
                                >

                            </div>

                        </div>


                        <div class="col-12">

                            <div class="form-group">

                                <label
                                    for="notes"
                                >
                                    Additional Requirements
                                </label>

                                <textarea
                                    id="notes"
                                    name="notes"
                                    placeholder="Any additional information for your booking..."
                                ></textarea>

                            </div>

                        </div>


                    </div>


                    <button
                        type="submit"
                        class="btn-default btn-highlighted"
                    >
                        Submit Booking
                    </button>


                </form>

            </div>


        <?php endif; ?>


    </div>

</section>


    <script defer src="js/jquery-3.7.1.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/jquery.slicknav.js"></script>
    <script defer src="js/function.js?v=20260923perf2"></script>
    <script defer src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script defer src="js/particles.js"></script>

<?php require __DIR__ . '/includes/footer.php'; ?>
