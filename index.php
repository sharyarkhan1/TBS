<?php
require_once __DIR__ . '/includes/config.php';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
<?php require __DIR__ . '/includes/header.php'; ?>

<!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
    
	<!-- Header End -->

    <!-- Hero Section Start -->
    <div class="hero hero-slider dark-section">
        <!-- Hero Image Slider Start -->
        <div class="hero-bg-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-1.jpg" alt="Luxury taxi service" fetchpriority="high" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-2.jpg" alt="Premium limousine ride" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-3.jpg" alt="Executive car rental" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-4.jpg" alt="Airport transfer taxi" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-5.jpeg" alt="Luxury black car service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-6.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-7.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-8.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-9.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-10.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-11.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-image">
                            <img src="images/hero-banner-12.jpeg" alt="SERBY (TBS) TAXI BURY Service" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Image Slider End -->

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Hero Contant Start -->
                    <div class="hero-content">
                        <div class="hero-slider-nav">
                            <button type="button" class="hero-slider-prev" aria-label="Previous slide"><i class="fa-solid fa-chevron-left"></i></button>
                            <button type="button" class="hero-slider-next" aria-label="Next slide"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Where Would You Like To Go?</span>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Your Personal <br>Taxi Services</h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Button Start -->
                        <div class="hero-content-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="btn-default btn-highlighted">Book Online</a>
                            <a href="#fleets" class="btn-default btn-white">Our Fleet</a>
                        </div>
                        <!-- Hero Content Button End -->
                    </div>
                    <!-- Hero Contant End -->
                </div>

                <div class="col-lg-12">
                    <!-- Hero Search Form Start -->
                    <div class="hero-search-box wow fadeInUp" id="booking-search" data-wow-delay="0.6s">
                        <form id="rentForm" action="booking" method="GET">

                            <div class="hero-search-field hero-search-service" data-picker="service">
                                <span class="hero-search-icon icon-service"></span>
                                <div class="hero-search-info">
                                    <label>Service</label>
                                    <button type="button" class="hero-search-value" id="serviceDisplay">Select Service</button>
                                    <input type="hidden" name="service" id="service" value="">
                                </div>
                                <div class="hero-search-panel hero-service-panel">
                                    <div class="hero-service-list">
                                        <button type="button" class="hero-service-item" data-value="Airport Transfers">Airport Transfers</button>
                                        <button type="button" class="hero-service-item" data-value="City to City Rides">City to City Rides</button>
                                        <button type="button" class="hero-service-item" data-value="Executive Taxi">Executive Taxi</button>
                                        <button type="button" class="hero-service-item" data-value="Meet &amp; Greet">Meet &amp; Greet</button>
                                        <button type="button" class="hero-service-item" data-value="Flight Monitoring">Flight Monitoring</button>
                                        <button type="button" class="hero-service-item" data-value="Baby Seats">Baby Seats</button>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-search-field hero-search-date" data-picker="date">
                                <span class="hero-search-icon icon-date"></span>
                                <div class="hero-search-info">
                                    <label>Date</label>
                                    <button type="button" class="hero-search-value" id="dateDisplay">Thu, Oct 06, 2022</button>
                                    <input type="hidden" name="pickupdate" id="pickupdate">
                                </div>
                                <div class="hero-search-panel hero-calendar-panel" id="datePanel"></div>
                            </div>

                            <div class="hero-search-field hero-search-time" data-picker="time">
                                <span class="hero-search-icon icon-time"></span>
                                <div class="hero-search-info">
                                    <label>Time</label>
                                    <button type="button" class="hero-search-value" id="timeDisplay">08 AM : 00</button>
                                    <input type="hidden" name="pickuptime" id="pickuptime" value="08:00">
                                </div>
                                <div class="hero-search-panel hero-time-panel" id="timePanel">
                                    <div class="hero-time-cols">
                                        <ul class="hero-time-hours"></ul>
                                        <ul class="hero-time-mins"></ul>
                                        <ul class="hero-time-ampm"></ul>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-search-field hero-search-from" data-picker="from">
                                <span class="hero-search-icon icon-from"></span>
                                <div class="hero-search-info">
                                    <label>From</label>
                                    <button type="button" class="hero-search-value" id="fromDisplay">London City Airport (LCY)</button>
                                    <input type="hidden" name="pickuplocation" id="pickuplocation" value="London City Airport (LCY)">
                                </div>
                                <div class="hero-search-panel hero-location-panel">
                                    <div class="hero-location-list">

                                        <button type="button" class="hero-location-item" data-value="Birmingham Airport (BHX)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Birmingham Airport (BHX)</strong>
                                                <small>Birmingham, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Bristol Airport (BRS)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Bristol Airport (BRS)</strong>
                                                <small>Bristol, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Cambridge City Airport (CBG)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Cambridge City Airport (CBG)</strong>
                                                <small>Cambridge, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="East Midlands Airport (EMA)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>East Midlands Airport (EMA)</strong>
                                                <small>East Midlands, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Humberside Airport (HUY)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Humberside Airport (HUY)</strong>
                                                <small>North Lincolnshire, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Leeds Bradford Airport (LBA)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Leeds Bradford Airport (LBA)</strong>
                                                <small>Leeds, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Manchester Airport (MAN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Manchester Airport (MAN)</strong>
                                                <small>Manchester, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Norwich Airport (NWI)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Norwich Airport (NWI)</strong>
                                                <small>Norwich, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Newquay Airport (NQY)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Newquay Airport (NQY)</strong>
                                                <small>Newquay, Cornwall, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Shoreham Airport (ESH)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Shoreham Airport (ESH)</strong>
                                                <small>Shoreham-by-Sea, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Southampton Airport (SOU)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Southampton Airport (SOU)</strong>
                                                <small>Southampton, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London City Airport (LCY)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London City Airport (LCY)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Gatwick Airport (LGW)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Gatwick Airport (LGW)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Heathrow Airport (LHR)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Heathrow Airport (LHR)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Luton Airport (LTN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Luton Airport (LTN)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Stansted Airport (STN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Stansted Airport (STN)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Southend Airport (SEN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Southend Airport (SEN)</strong>
                                                <small>Southend-on-Sea, United Kingdom</small>
                                            </span>
                                        </button>

                                        <!-- Existing locations -->

                                        <button type="button" class="hero-location-item" data-value="London Tower Hill">
                                            <img src="images/icon-location-building.png" alt="">
                                            <span>
                                                <strong>London Tower Hill</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Leyton Train Station">
                                            <img src="images/icon-location-train.png" alt="">
                                            <span>
                                                <strong>Leyton Train Station</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="hero-search-field hero-search-to" data-picker="to">
                                <span class="hero-search-icon icon-to"></span>
                                <div class="hero-search-info">
                                    <label>To</label>
                                    <button type="button" class="hero-search-value" id="toDisplay">London City Airport (LCY)</button>
                                    <input type="hidden" name="droplocation" id="droplocation" value="London City Airport (LCY)">
                                </div>
                                <div class="hero-search-panel hero-location-panel">
                                    <div class="hero-location-list">

                                        <button type="button" class="hero-location-item" data-value="Birmingham Airport (BHX)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Birmingham Airport (BHX)</strong>
                                                <small>Birmingham, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Bristol Airport (BRS)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Bristol Airport (BRS)</strong>
                                                <small>Bristol, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Cambridge City Airport (CBG)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Cambridge City Airport (CBG)</strong>
                                                <small>Cambridge, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="East Midlands Airport (EMA)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>East Midlands Airport (EMA)</strong>
                                                <small>East Midlands, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Humberside Airport (HUY)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Humberside Airport (HUY)</strong>
                                                <small>North Lincolnshire, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Leeds Bradford Airport (LBA)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Leeds Bradford Airport (LBA)</strong>
                                                <small>Leeds, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Manchester Airport (MAN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Manchester Airport (MAN)</strong>
                                                <small>Manchester, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Norwich Airport (NWI)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Norwich Airport (NWI)</strong>
                                                <small>Norwich, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Newquay Airport (NQY)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Newquay Airport (NQY)</strong>
                                                <small>Newquay, Cornwall, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Shoreham Airport (ESH)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Shoreham Airport (ESH)</strong>
                                                <small>Shoreham-by-Sea, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Southampton Airport (SOU)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>Southampton Airport (SOU)</strong>
                                                <small>Southampton, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London City Airport (LCY)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London City Airport (LCY)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Gatwick Airport (LGW)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Gatwick Airport (LGW)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Heathrow Airport (LHR)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Heathrow Airport (LHR)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Luton Airport (LTN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Luton Airport (LTN)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Stansted Airport (STN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Stansted Airport (STN)</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="London Southend Airport (SEN)">
                                            <img src="images/icon-location-plane.png" alt="">
                                            <span>
                                                <strong>London Southend Airport (SEN)</strong>
                                                <small>Southend-on-Sea, United Kingdom</small>
                                            </span>
                                        </button>

                                        <!-- Existing locations -->

                                        <button type="button" class="hero-location-item" data-value="London Tower Hill">
                                            <img src="images/icon-location-building.png" alt="">
                                            <span>
                                                <strong>London Tower Hill</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                        <button type="button" class="hero-location-item" data-value="Leyton Train Station">
                                            <img src="images/icon-location-train.png" alt="">
                                            <span>
                                                <strong>Leyton Train Station</strong>
                                                <small>London, United Kingdom</small>
                                            </span>
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="hero-search-submit">
                                <button type="submit"><img src="images/icon-search-magnify.svg" alt=""> Search</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </form>
                    </div>
                    <!-- Hero Search Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Special Price Section Start -->
    <section class="special-fares-section dark-section" aria-labelledby="special-fares-title">
        <div class="container">
            <div class="special-fares-layout">
                <div class="special-fares-intro">
                    <span class="section-sub-title">Local journeys</span>
                    <h2 id="special-fares-title">Special Price</h2>
                    <p>Premium local travel with a clear, competitive fare for journeys across Suffolk.</p>
                    <a href="#booking-search" class="special-fares-link">Book your journey <span aria-hidden="true">↗</span></a>
                </div>

                <div class="special-fares-locations" aria-label="Special price locations">
                    <div class="special-fare-location wow fadeInUp">
                        <span class="special-fare-location-mark" aria-hidden="true">01</span>
                        <strong>ELMSWELL</strong><span class="special-fare-arrow" aria-hidden="true">↗</span>
                    </div>
                    <div class="special-fare-location wow fadeInUp" data-wow-delay="0.1s">
                        <span class="special-fare-location-mark" aria-hidden="true">02</span>
                        <strong>WOOLPIT</strong><span class="special-fare-arrow" aria-hidden="true">↗</span>
                    </div>
                    <div class="special-fare-location wow fadeInUp" data-wow-delay="0.2s">
                        <span class="special-fare-location-mark" aria-hidden="true">03</span>
                        <strong>STOWMARKET</strong><span class="special-fare-arrow" aria-hidden="true">↗</span>
                    </div>
                    <div class="special-fare-location wow fadeInUp" data-wow-delay="0.3s">
                        <span class="special-fare-location-mark" aria-hidden="true">04</span>
                        <strong>THURSTON</strong><span class="special-fare-arrow" aria-hidden="true">↗</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Price Section End -->

    <!-- Airport Special Price Section Start -->
    <section class="airport-special-fares-section" aria-labelledby="airport-special-fares-title">
        <div class="container">
            <div class="airport-special-fares-shell">
                <div class="airport-special-fares-content add-particles">
                    <span class="section-sub-title">Airport transfers</span>
                    <h2 id="airport-special-fares-title">Airport Special Price</h2>
                    <p>Travel comfortably to and from the airport with a straightforward, competitive fare.</p>
                    <a href="#booking-search" class="btn-default btn-highlighted">Get a special price</a>
                </div>
                <div class="airport-special-fares-detail" aria-label="Airport transfer destinations">
                    <div class="airport-special-fares-detail-top">
                        <span>DIRECT TRANSFERS</span>
                        <img src="images/icon-location-plane.png" alt="">
                    </div>
                    <div class="airport-route-line" aria-hidden="true"><i></i><span></span><i></i></div>
                    <div class="airport-route-labels">
                        <strong>Your door</strong>
                        <strong>Airport</strong>
                    </div>
                    <small>Luton &nbsp;·&nbsp; Heathrow &nbsp;·&nbsp; Gatwick</small>
                </div>
            </div>
        </div>
    </section>
    <!-- Airport Special Price Section End -->
    
    <!-- About Us Section Start -->
    <div class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp">
                        <!-- About Us Image Start -->
                        <div class="about-us-image">
                            <figure class="image-anime">
                                <img src="images/about-us-image.png" alt="Airport taxi transfer" loading="lazy" decoding="async">
                            </figure>
                        </div>
                        <!-- About Us Image End -->

                        <!-- About Us Customer Box Start -->
                        <div class="about-us-video-box about-us-stats-box">
                            <!-- About Us Video Box Content Start -->
                            <div class="about-us-video-box-content">
                                <!--  Satisfaction Client Image Start -->
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="images/author-1.jpg" alt="" loading="lazy" decoding="async">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="images/author-2.jpg" alt="" loading="lazy" decoding="async">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="images/author-3.jpg" alt="" loading="lazy" decoding="async">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image add-more">
                                        <h2><span class="counter">2</span>M</h2>
                                    </div>
                                </div>
                                <!-- Satisfaction Client  Image End -->

                                <!--About Satisfy Client Title Start -->
                                <div class="about-satisfy-client-title">
                                    <p>KM Driven Across the UK</p>
                                </div>
                                <!--About Satisfy Client Title End -->
                            </div>
                            <!-- About Us Video Box Content End -->
                        </div>
                        <!-- About Us Customer Box End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">About Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Your trusted taxi for airport transfers</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">From Luton, Heathrow and Gatwick to city-to-city journeys, our licensed taxi drivers deliver punctual, discreet and comfortable transfers around the clock.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About Us Body Item Start -->
                            <div class="about-us-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="images/icon-about-taxi.png" alt="Professional taxi drivers" loading="lazy" decoding="async">
                                </div>
                                <div class="about-us-body-item-content">
                                    <h3>Professional Taxi Drivers</h3>
                                    <p>CRB-checked, fully licensed drivers with local knowledge and a calm, discreet manner.</p>
                                </div>
                            </div>
                            <!-- About Us Body Item End -->

                            <!-- About Us Body Item Start -->
                            <div class="about-us-body-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="images/icon-about-flight.png" alt="Flight tracking" loading="lazy" decoding="async">
                                </div>
                                <div class="about-us-body-item-content">
                                    <h3>Flight Tracking</h3>
                                    <p>We monitor your flight in real time, so delays never leave you waiting curbside.</p>
                                </div>
                            </div>
                            <!-- About Us Body Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn">
                                <a href="#" class="btn-default">More About</a>
                            </div>
                            <!-- About Us Button End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Service Section Start -->
    <div class="our-services bg-section add-particles" id="services">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Premium transfers for every journey</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
        </div>

            <div class="services-slider wow fadeInUp">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#booking-search" data-service="Airport Transfers" class="service-item" data-cursor="-hidden">
                                <div class="service-item-image">
                                    <img src="images/hero-banner-4.jpg" alt="Airport Transfers" loading="lazy" decoding="async">
                                </div>
                                <div class="service-item-overlay">
                                    <h2>Airport Transfers</h2>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#booking-search" data-service="City to City Rides" class="service-item" data-cursor="-hidden">
                                <div class="service-item-image">
                                    <img src="images/hero-banner-2.jpg" alt="City to City Rides" loading="lazy" decoding="async">
                                </div>
                                <div class="service-item-overlay">
                                    <h2>City to City Rides</h2>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#booking-search" data-service="Executive Taxi" class="service-item" data-cursor="-hidden">
                                <div class="service-item-image">
                                    <img src="images/service-executive-taxi.png" alt="Executive Taxi" loading="lazy" decoding="async">
                                </div>
                                <div class="service-item-overlay">
                                    <h2>Executive Taxi</h2>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#booking-search" data-service="Meet &amp; Greet" class="service-item" data-cursor="-hidden">
                                <div class="service-item-image">
                                    <img src="images/service-meet-greet.png" alt="Meet and Greet" loading="lazy" decoding="async">
                                </div>
                                <div class="service-item-overlay">
                                    <h2>Meet &amp; Greet</h2>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#booking-search" data-service="Flight Monitoring" class="service-item" data-cursor="-hidden">
                                <div class="service-item-image">
                                    <img src="images/service-flight-monitoring.png" alt="Flight Monitoring" loading="lazy" decoding="async">
                                </div>
                                <div class="service-item-overlay">
                                    <h2>Flight Monitoring</h2>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#booking-search" data-service="Baby Seats" class="service-item" data-cursor="-hidden">
                                <div class="service-item-image">
                                    <img src="images/service-baby-seats.png" alt="Baby Seats" loading="lazy" decoding="async">
                                </div>
                                <div class="service-item-overlay">
                                    <h2>Baby Seats</h2>
                                </div>
                            </a>
                        </div>
                        <!-- new revision -->
                        <div class="swiper-slide">
                            <div class="service-item service-item-coming-soon" data-cursor="-hidden" aria-disabled="true" tabindex="-1"><div class="service-item-image"><img class="temp-blurred" src="images/service-school-run.jpg" alt="School Run" loading="lazy" decoding="async"></div><div class="service-item-overlay"><span class="coming-soon-badge">COMING SOON</span><h2>School Run</h2></div></div>
                        </div>
                    </div>
                </div>
                <div class="services-slider-nav">
                    <button type="button" class="services-slider-prev" aria-label="Previous services">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20 12H4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                            <path d="M10 6L4 12L10 18" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button type="button" class="services-slider-next" aria-label="Next services">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 12H20" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                            <path d="M14 6L20 12L14 18" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trust-strip wow fadeInUp" data-wow-delay="0.4s">
                        <div class="trust-strip-rating">
                            <span class="trust-strip-score"><span class="counter">4.9</span></span>
                            <span class="trust-strip-stars" aria-label="Rated 5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span class="trust-strip-dot" aria-hidden="true"></span>
                            <span class="trust-strip-count">2,000+ reviews</span>
                        </div>
                        <p>Explore every taxi and airport transfer we offer</p>
                        <a href="#" class="trust-strip-link">View all services
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service Section End -->

    <!-- Comfort Features Section Start -->
    <div class="why-choose-us comfort-features" id="why">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">We make sure that your every<br> trip is comfortable</h2>
                    </div>
                </div>
            </div>

            <div class="comfort-features-grid">
                <div class="comfort-feature-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="comfort-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13.2 4.7 8.8A1.7 1.7 0 0 1 6.3 7.7h11.4a1.7 1.7 0 0 1 1.6 1.1L21 13.2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 13.2h18v2.4a1.1 1.1 0 0 1-1.1 1.1h-.7M4.8 16.7h-.7A1.1 1.1 0 0 1 3 15.6v-2.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="7.25" cy="16.75" r="1.55" stroke="currentColor" stroke-width="2"/>
                            <circle cx="16.75" cy="16.75" r="1.55" stroke="currentColor" stroke-width="2"/>
                            <path d="M8.8 16.75h6.4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="comfort-feature-content">
                        <h3>Luxury Vehicle Selection</h3>
                        <p>A modern fleet from executive saloons to 8-seat minibuses, prepared for every transfer.</p>
                    </div>
                </div>

                <div class="comfort-feature-item wow fadeInUp" data-wow-delay="0.15s">
                    <div class="comfort-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="7.4" y="2.8" width="9.2" height="18.4" rx="2.1" stroke="currentColor" stroke-width="2"/>
                            <path d="M10.4 5.5h3.2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="18.5" r="0.85" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="comfort-feature-content">
                        <h3>24/7 Booking Available</h3>
                        <p>Book, amend or speak to a coordinator any hour of the day, any day of the year.</p>
                    </div>
                </div>

                <div class="comfort-feature-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="comfort-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="8.1" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 7.6V12l3.1 1.9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="comfort-feature-content">
                        <h3>Fast Airport Transfers</h3>
                        <p>Drivers arrive early, track your flight and time the route around your check-in.</p>
                    </div>
                </div>

                <div class="comfort-feature-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="comfort-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3.6 5.6 6.2v5c0 4 2.7 7.3 6.4 8.6 3.7-1.3 6.4-4.6 6.4-8.6v-5L12 3.6Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="m9.3 12 1.9 1.9 3.6-3.7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="comfort-feature-content">
                        <h3>High Safety Standards</h3>
                        <p>Licensed, fully insured vehicles with child seats and CRB-checked drivers.</p>
                    </div>
                </div>

                <div class="comfort-feature-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="comfort-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.3 4.5 19.8 12a1.4 1.4 0 0 1 0 2l-5.8 5.8a1.4 1.4 0 0 1-2 0L4.5 12.3V4.5h7.8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <circle cx="8.5" cy="8.5" r="1.15" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="comfort-feature-content">
                        <h3>Fixed Prices, No Surprises</h3>
                        <p>Clear fares with no hidden extras, plus a first-booking welcome offer.</p>
                    </div>
                </div>

                <div class="comfort-feature-item wow fadeInUp" data-wow-delay="0.35s">
                    <div class="comfort-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="8" r="3.15" stroke="currentColor" stroke-width="2"/>
                            <path d="M5.5 19.4c.7-3.3 3.3-5.2 6.5-5.2s5.8 1.9 6.5 5.2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="comfort-feature-content">
                        <h3>Professional Taxi Drivers</h3>
                        <p>Licensed local drivers with a calm, discreet manner on every journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Comfort Features Section End -->

    <!-- How It Works Section Start -->
    <div class="intro-video-box how-it-works-section bg-section dark-section">
        <div class="how-it-works-bg" aria-hidden="true">
            <video muted playsinline loop preload="none" data-lazy-video>
                <source src="media/rentgo-intro-video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">How It Works</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Book your taxi in three simple steps</h2>
                    </div>
                </div>
            </div>

            <div class="how-steps">
                <article class="how-step wow fadeInUp">
                    <span class="how-step-label">Step 01</span>
                    <span class="how-step-no" aria-hidden="true">1</span>
                    <h3>Click on Book Your Ride</h3>
                    <p>Press Book Online anywhere on the site and you’ll be taken straight to the booking form.</p>
                </article>
                <article class="how-step wow fadeInUp" data-wow-delay="0.15s">
                    <span class="how-step-label">Step 02</span>
                    <span class="how-step-no" aria-hidden="true">2</span>
                    <h3>Fill out the booking form</h3>
                    <p>The online form is simple — enter your pickup and drop-off locations, plus date and time.</p>
                </article>
                <article class="how-step wow fadeInUp" data-wow-delay="0.3s">
                    <span class="how-step-label">Step 03</span>
                    <span class="how-step-no" aria-hidden="true">3</span>
                    <h3>Select your car and pay</h3>
                    <p>Choose your vehicle, pay for the journey, and wait for your driver to pick you up.</p>
                </article>
            </div>
        </div>
    </div>
    <!-- How It Works Section End -->

    <!-- Our Fleets Section Start -->
    <div class="our-fleets fleet-lux-section" id="fleets">
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Fleets</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">A refined fleet for every transfer</h2>
                    </div>
                </div>
            </div>

            <div class="fleets-slider fleet-lux-slider wow fadeInUp" data-wow-delay="0.2s">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="fleet-lux-card" data-cursor="-hidden">
                                <div class="fleet-lux-image">
                                    <img src="images/fleet-suv.png" alt="Business Van and SUV" loading="lazy" decoding="async">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Business Van/SUV</h3>
                                    <p>Mercedes-Benz V-Class, Chevrolet Suburban, Cadillac</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="fleet-lux-card" data-cursor="-hidden">
                                <div class="fleet-lux-image">
                                    <img src="images/fleet-v-class.png" alt="Executive MPV" loading="lazy" decoding="async">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Executive MPV</h3>
                                    <p>Mercedes-Benz V-Class or similar 8-seat minibus</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">8</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">6</span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <div class="fleet-lux-card fleet-lux-card-coming-soon" aria-disabled="true" tabindex="-1" data-cursor="-hidden">
                                <div class="fleet-lux-image"><span class="fleet-coming-soon-badge">COMING SOON</span>
                                    <img src="images/fleet-e-class.png" alt="Business Class" loading="lazy" decoding="async">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Business Class</h3>
                                    <p>Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="fleet-lux-card fleet-lux-card-coming-soon" aria-disabled="true" tabindex="-1" data-cursor="-hidden">
                                <div class="fleet-lux-image"><span class="fleet-coming-soon-badge">COMING SOON</span>
                                    <img src="images/fleet-eqs.png" alt="First Class" loading="lazy" decoding="async">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>First Class</h3>
                                    <p>Mercedes-Benz EQS, BMW 7 Series, Audi A8 or similar</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="fleet-lux-card" data-cursor="-hidden">
                                <div class="fleet-lux-image">
                                    <img src="images/fleet-suv.png" alt="Business Van and SUV">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Business Van/SUV</h3>
                                    <p>Mercedes-Benz V-Class, Chevrolet Suburban, Cadillac</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="fleet-lux-card" data-cursor="-hidden">
                                <div class="fleet-lux-image">
                                    <img src="images/fleet-v-class.png" alt="Executive MPV">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Executive MPV</h3>
                                    <p>Mercedes-Benz V-Class or similar 8-seat minibus</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">8</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">6</span>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <div class="fleet-lux-card fleet-lux-card-coming-soon" aria-disabled="true" tabindex="-1" data-cursor="-hidden">
                                <div class="fleet-lux-image"><span class="fleet-coming-soon-badge">COMING SOON</span>
                                    <img src="images/fleet-e-class.png" alt="Business Class">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Business Class</h3>
                                    <p>Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="fleet-lux-card fleet-lux-card-coming-soon" aria-disabled="true" tabindex="-1" data-cursor="-hidden">
                                <div class="fleet-lux-image"><span class="fleet-coming-soon-badge">COMING SOON</span>
                                    <img src="images/fleet-eqs.png" alt="First Class">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>First Class</h3>
                                    <p>Mercedes-Benz EQS, BMW 7 Series, Audi A8 or similar</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="fleet-lux-card" data-cursor="-hidden">
                                <div class="fleet-lux-image">
                                    <img src="images/fleet-mini-trailer.png" alt="Mini Trailer" loading="lazy" decoding="async">
                                </div>
                                <div class="fleet-lux-info">
                                    <h3>Mini Trailer</h3>
                                    <p>Mini trailer with a payload capacity of 600kg</p>
                                </div>
                                <div class="fleet-lux-meta">
                                    <span><img src="images/icon-fleet-passenger.svg" alt="">4</span>
                                    <span><img src="images/icon-fleet-luggage.svg" alt="">2</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fleet-lux-nav">
                    <button type="button" class="fleets-slider-prev" aria-label="Previous fleet">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20 12H4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                            <path d="M10 6L4 12L10 18" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button type="button" class="fleets-slider-next" aria-label="Next fleet">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 12H20" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                            <path d="M14 6L20 12L14 18" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Fleets Section End -->

    <!-- CTA Section Start -->
    <div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Ride in Luxury</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Book your next airport transfer today</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Speak with our coordinators any time to reserve a taxi, amend a booking or plan a city-to-city journey from Luton, Heathrow or Gatwick.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- CTA Body Start -->
                        <div class="cta-content-body wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Licensed taxi drivers on every journey</li>
                                <li>Flight tracking and meet &amp; greet</li>
                            </ul>
                        </div>
                        <!-- CTA Body End -->

                        <!-- CTA Content Footer Start -->
                        <div class="cta-content-footer wow fadeInUp" data-wow-delay="0.4s">
                            <!-- CTA Button Start -->
                            <div class="cta-content-btn">
                                <a href="#" class="btn-default btn-highlighted">Book Your Transfer</a>
                            </div>
                            <!-- CTA Button End -->

                            <!-- About Contact Box Start -->
                            <div class="about-contact-box" id="contact">
                                <div class="icon-box">
                                    <img src="images/icon-phone-primary.svg" alt="">
                                </div>
                                <div class="about-contact-box-content">
                                    <p>24/7 Support</p>
                                    <h3><a href="tel:+123456789">+(123) 456-789</a></h3>                                   
                                </div>
                            </div>
                            <!-- About Contact Box End -->
                        </div>
                        <!-- CTA Content Footer End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials google-reviews-section add-particles">
        <div class="container">
            <div class="google-reviews-header">
                <h2 class="text-anime-style-3" data-cursor="-opaque">Google reviews</h2>
                <p>Five-star reviews from travellers who booked with SERBY (TBS) TAXI BURY.</p>
                <div class="google-reviews-badge">
                    <span class="google-reviews-g" aria-hidden="true">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#4285F4" d="M23.5 12.27c0-.82-.07-1.42-.23-2.04H12.24v3.7h6.46c-.13 1.08-.83 2.7-2.39 3.79l-.02.14 3.47 2.64.24.02c2.2-2 3.5-4.94 3.5-8.25z"/>
                            <path fill="#34A853" d="M12.24 24c3.16 0 5.81-1.04 7.75-2.82l-3.69-2.8c-.99.69-2.32 1.17-4.06 1.17-3.1 0-5.73-2.05-6.67-4.87l-.14.01-3.61 2.75-.05.13C3.7 21.53 7.66 24 12.24 24z"/>
                            <path fill="#FBBC05" d="M5.57 14.68A7.23 7.23 0 0 1 5.17 12c0-.93.17-1.83.39-2.68l-.01-.14-3.65-2.78-.12.06A11.96 11.96 0 0 0 .24 12c0 1.93.46 3.75 1.28 5.37l4.05-2.69z"/>
                            <path fill="#EA4335" d="M12.24 4.75c2.2 0 3.68.95 4.53 1.74l3.31-3.17C18.04 1.19 15.4 0 12.24 0 7.66 0 3.7 2.47 1.77 6.13l4.04 2.69c.94-2.82 3.57-4.07 6.43-4.07z"/>
                        </svg>
                    </span>
                    <span>Google</span>
                    <strong>5.0</strong>
                    <span class="google-reviews-badge-stars" aria-label="5 stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="google-reviews-marquee" data-cursor="-hidden">
            <div class="google-reviews-track">
                <div class="google-reviews-set">
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Driver was waiting in arrivals with a name board. Heathrow to Luton was smooth, on time and the car was spotless.</p>
                        <div class="google-review-author">
                            <h3>Annette B.</h3>
                            <span>Heathrow airport transfer</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Booked a Gatwick transfer at 4am. Driver arrived early, tracked the flight and helped with the luggage. Fair price, no extras.</p>
                        <div class="google-review-author">
                            <h3>Bessie C.</h3>
                            <span>Gatwick early-hours transfer</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Used the executive saloon for a city-to-city meeting. Discreet driver, Wi-Fi, and we arrived ahead of schedule.</p>
                        <div class="google-review-author">
                            <h3>Devon L.</h3>
                            <span>City to city executive taxi</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Family transfer with child seats from Luton. Coordinator was helpful, minibus was clean and the fare was exactly as quoted.</p>
                        <div class="google-review-author">
                            <h3>Leslie A.</h3>
                            <span>Luton family transfer</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Meet and greet at Stansted was effortless. Driver had the name board ready, bags loaded, and we were on the motorway in minutes.</p>
                        <div class="google-review-author">
                            <h3>James R.</h3>
                            <span>Stansted meet &amp; greet</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Booked last minute for a delayed Heathrow arrival. They tracked the flight, waited without fuss, and the fare stayed exactly as quoted.</p>
                        <div class="google-review-author">
                            <h3>Priya S.</h3>
                            <span>Heathrow flight tracking</span>
                        </div>
                    </article>
                </div>
                <div class="google-reviews-set" aria-hidden="true">
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Driver was waiting in arrivals with a name board. Heathrow to Luton was smooth, on time and the car was spotless.</p>
                        <div class="google-review-author">
                            <h3>Annette B.</h3>
                            <span>Heathrow airport transfer</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Booked a Gatwick transfer at 4am. Driver arrived early, tracked the flight and helped with the luggage. Fair price, no extras.</p>
                        <div class="google-review-author">
                            <h3>Bessie C.</h3>
                            <span>Gatwick early-hours transfer</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Used the executive saloon for a city-to-city meeting. Discreet driver, Wi-Fi, and we arrived ahead of schedule.</p>
                        <div class="google-review-author">
                            <h3>Devon L.</h3>
                            <span>City to city executive taxi</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Family transfer with child seats from Luton. Coordinator was helpful, minibus was clean and the fare was exactly as quoted.</p>
                        <div class="google-review-author">
                            <h3>Leslie A.</h3>
                            <span>Luton family transfer</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Meet and greet at Stansted was effortless. Driver had the name board ready, bags loaded, and we were on the motorway in minutes.</p>
                        <div class="google-review-author">
                            <h3>James R.</h3>
                            <span>Stansted meet &amp; greet</span>
                        </div>
                    </article>
                    <article class="google-review-card">
                        <div class="google-review-top">
                            <span class="google-review-stars" aria-label="5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>Google review</span>
                        </div>
                        <p>Booked last minute for a delayed Heathrow arrival. They tracked the flight, waited without fuss, and the fare stayed exactly as quoted.</p>
                        <div class="google-review-author">
                            <h3>Priya S.</h3>
                            <span>Heathrow flight tracking</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs bg-section" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get answers to your questions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Find clear answers about booking, flight delays, meet and greet, payments and 24/7 support for your airport transfer.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Faqs Body Start -->
                        <div class="faqs-content-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>24/7 coordinators for every transfer</li>
                                <li>Licensed taxi drivers with a customer-first approach</li>
                            </ul>
                        </div>
                        <!-- Faqs Body End -->

                        <!-- Faqs Button Start -->
                        <div class="faqs-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="#" class="btn-default">View all FAQ's</a>
                        </div>
                        <!-- Faqs Button End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>

                <div class="col-xl-7">
                    <!-- FAQ Content Start -->
                    <div class="faq-contant">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Q1. How do I book an airport transfer?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Use the search form above to enter date, time, pickup and drop-off, or call our 24/7 team. You will receive a confirmation with your driver details before travel.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Q2. What happens if my flight is delayed?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We track your flight in real time and adjust pickup automatically. Complimentary waiting time is included so you are not charged for delays outside your control.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Q3. Do you offer meet and greet at the airport?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes. Your driver waits in arrivals with a name board, assists with luggage and escorts you to the vehicle at Luton, Heathrow, Gatwick, Stansted and other UK airports.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Q4. What payment methods do you accept?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Pay by card when you book or settle with your driver after the journey. Fares are quoted upfront with no hidden extras.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Q5. Is customer support available 24 hours a day?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" role="region" aria-labelledby="heading5" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes. Our coordinators are available around the clock to book, amend or assist with early flights, late arrivals and last-minute transfers.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- FAQ Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->

    <!-- Main Footer Start -->
    
    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script defer src="js/jquery-3.7.1.min.js"></script>
    <!-- Circle Progress Js File -->
    <script defer src="js/circle-progress.min.js"></script>
    <!-- Bootstrap js file -->
    <script defer src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script defer src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script defer src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script defer src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script defer src="js/jquery.waypoints.min.js"></script>
    <script defer src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script defer src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script defer src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script defer src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script defer src="js/gsap.min.js"></script>
    <script defer src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script defer src="js/SplitText.min.js"></script>
    <script defer src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script defer src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script defer src="js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script defer src="js/function.js?v=20260923perf2"></script>
    <!-- Particles js File -->
    <script defer src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script defer src="js/particles.js"></script>

<?php require __DIR__ . '/includes/footer.php'; ?>
