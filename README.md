# TBS

Website source files for the TBS project.

## Email configuration

The SMTP password and email addresses are intentionally not stored in this repository. Configure these PHP environment variables on the server before using booking email:

- SMTP_HOST (defaults to smtp.gmail.com)
- SMTP_PORT (defaults to 587)
- SMTP_USERNAME
- SMTP_PASSWORD
- BOOKING_RECIPIENT_EMAIL
- BOOKING_FROM_EMAIL (defaults to SMTP_USERNAME)
- BOOKING_FROM_NAME (defaults to TBS)

.env.example lists the supported settings. Do not commit real credentials.