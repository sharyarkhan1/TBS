<?php require_once __DIR__ . '/config.php'; ?>
<?php $is_booking_page = basename($_SERVER['PHP_SELF']) === 'booking.php'; ?>
<header class="main-header active-sticky-header">
        <!-- particles.js container -->
        
        
        <div class="header-sticky  add-particles">
            
            <div class="header-top-main">
                <div class="container">
                    <div class="header-top">
                        <div class="header-top-1">
                            <a href="tel:+447700900123" class="header-call">
                                <i class="fa-solid fa-phone"></i>+44 7700 900123
                            </a>
                        </div>

                        <div class="header-top-2">
                                <a class="navbar-brand" href="./">
                                <img src="images/logo.svg?v=4" alt="SERBY (TBS) TAXI BURY">
                            </a>
                        </div>

                        <div class="header-top-3">
                            <div class="header-socials">
                                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                            </div>

                            <div class="navbar-toggle"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-top-sub">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./#about">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./#services">Services</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./#fleets">Fleet</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./#faqs">FAQs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./#contact">Contact</a></li>
                                </ul>
                            </div>

                            <div class="header-btn">
                                <a href="./#booking-search" class="header-login">Book Online</a>
                                <a href="https://wa.me/" class="header-signup" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="responsive-menu"></div>

        </div>
    </header>
