#!bin/sh/

tar -xf /tmp/phpMyAdmin-5.0.4-all-languages.tar.gz -C /tmp/
tar -xf /tmp/latest.tar.gz -C /tmp/
mv /tmp/phpMyAdmin-5.0.4-all-languages /var/www/phpmyadmin
mv /tmp/wordpress /var/www/
cp /src/nginx.conf /etc/nginx/sites-available/default
cp /src/config.inc.php /var/www/phpmyadmin/
cp /src/wp-config.php /var/www/wordpress/
cp /src/index.nginx-debian.html /var/www/html/
chown -R www-data:www-data /var/www/wordpress
chown -R www-data:www-data /var/www/phpmyadmin
rm -rf /tmp/*
mkdir /var/lib/phpmyadmin
mkdir /var/lib/phpmyadmin/tmp

openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/ssl/private/my_cert.crt -keyout /etc/ssl/certs/my_key.key -subj "/C=RU/ST=Tatarstan/L=Kazan/O=21School/OU=lelsweyr/CN=localhost"

service mysql start
mariadb < "/var/www/phpmyadmin/sql/create_tables.sql" &&
mysql -u root --skip-password -e "GRANT SELECT, INSERT, UPDATE, DELETE ON phpmyadmin.* TO 'lelsweyr'@'localhost' IDENTIFIED BY '123456';" &&
mysql -u root --skip-password -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" &&
mysql -u root --skip-password -e "GRANT ALL ON wordpress.* TO 'lelsweyr'@'localhost' IDENTIFIED BY '123456';" &&
mysql -u root --skip-password -e "FLUSH PRIVILEGES;";