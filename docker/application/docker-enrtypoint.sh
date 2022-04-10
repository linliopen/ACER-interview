#!/bin/sh

# startup php-fpm (daemonize)
/usr/sbin/php-fpm --daemonize

# startup nginx (no daemonize)
/usr/sbin/nginx -c /etc/nginx/nginx.conf
