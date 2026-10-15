<?php

if (!defined('TBS_BASE_PATH')) {
    define('TBS_BASE_PATH', dirname(__DIR__));
}

$setting = static function (string $name, string $fallback = ''): string {
    $value = getenv($name);
    return $value === false ? $fallback : $value;
};

define('SMTP_HOST', $setting('SMTP_HOST', 'smtp.gmail.com'));
define('SMTP_PORT', (int) $setting('SMTP_PORT', '587'));
define('SMTP_USERNAME', $setting('SMTP_USERNAME'));
define('SMTP_PASSWORD', $setting('SMTP_PASSWORD'));
define('BOOKING_RECIPIENT_EMAIL', $setting('BOOKING_RECIPIENT_EMAIL'));
define('BOOKING_FROM_EMAIL', $setting('BOOKING_FROM_EMAIL', SMTP_USERNAME));
define('BOOKING_FROM_NAME', $setting('BOOKING_FROM_NAME', 'TBS'));