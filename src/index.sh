#!bin/sh/

service mysql restart
service php7.3-fpm start
service nginx start

bash