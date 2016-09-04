#!/bin/sh

# This script is required to run PHP4 scripts using FastCGI from your account, please don't modify or remove

PHPRC="/etc/php4/cgi"
export PHPRC
PHP_FCGI_MAX_REQUESTS=5000
export PHP_FCGI_MAX_REQUESTS
exec /usr/bin/php4-cgi
