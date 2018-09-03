# Client hints example code

This is a site for a fictional client, and it uses client hints to adapt delivery of content based on network and device conditions. In order to run this site locally, you'll need:

- Apache (Nginx might work, but I have not tested).
- A URL rewriting module (this example uses `mod_rewrite`).
- PHP 7.

`image.php` is the image handler. All image requests in the site point to this, but `mod_rewrite` rewrites the query string so it looks nice. The image handler examines client hints (if they're available) and delivers thes optimal image resource.

A function named `network_quality` the in `includes/functions.php` script also shows a proof of concept of how you might use network-focused client hints to determine the quality of a network connection. This is not an authoritative approach, just one of potentially many.

Currently, Chrome (and its derived browsers) are only capable of using client hints. No comprehensive fallbacks are implemented, but some options might be to use a service worker, or set cookies (this may not be optimal).

Client hints also require a site to be in HTTPS in order to work, or be run from localhost. The opt-in mechanism to enable client hints resides within `includes/functions.php`.
