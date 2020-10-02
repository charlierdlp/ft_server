FROM debian:buster

RUN apt-get update 
RUN apt-get install -y nginx
RUN apt-get install -y vim
RUN apt-get install -y mariadb-server mariadb-client
RUN apt-get install -y php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline
RUN apt-get install -y wget

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz
RUN tar -zxf phpMyAdmin-4.9.0.1-english.tar.gz
RUN rm -rf phpMyAdmin-4.9.0.1-english.tar.gz
RUN mv phpMyAdmin-4.9.0.1-english /var/www/html/phpmyadmin
RUN rm /etc/nginx/sites-enabled/default

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -zxvf latest.tar.gz
RUN mv wordpress /var/www/html/wordpress
RUN chmod 777 -R /var/www/*
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=127.0.0.1" -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt 

RUN apt-get install -y openssl

COPY srcs/nginx.config /etc/nginx/sites-enabled/default
COPY srcs/wp-config.php /var/www/html/wordpress
COPY srcs/wordpress.sql /var/www/html/wordpress
COPY srcs/dundie.jpg  /var/www/html/wordpress/
COPY srcs/ream.jpg  /var/www/html/wordpress/
COPY srcs/default.sql /var/www/html/phpmyadmin
COPY srcs/dunder.jpg /var/www/html/
COPY srcs/index.html /var/www/html/
COPY srcs/php.png /var/www/html/
COPY srcs/wordpress.png /var/www/html/
COPY srcs/office.mp3 /var/www/html/

CMD service nginx start && service mysql start && \
	service php7.3-fpm start && mysql < /var/www/html/phpmyadmin/default.sql -u root && mysql wordpress < /var/www/html/wordpress/wordpress.sql -u root && bash
