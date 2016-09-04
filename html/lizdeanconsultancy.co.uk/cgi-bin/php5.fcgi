#!/bin/sh

# This script is required to run PHP5 scripts using FastCGI from your account, please don't modify or remove
# Version 2.1

PHPRC="/etc/php5/cgi"
export PHPRC
PHP_FCGI_MAX_REQUESTS=5000
export PHP_FCGI_MAX_REQUESTS
exec /usr/bin/php5-cgi
