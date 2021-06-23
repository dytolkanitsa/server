FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get -y install
RUN apt-get -y install mariadb-server
RUN apt-get -y install wget
RUN apt-get -y install nginx
RUN apt-get -y install php-mysql php-fpm php7.3-xml php7.3-xmlrpc php7.3 php-pdo php-gd php-cli php-mbstring

WORKDIR /var/www/html

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz
RUN tar -xvzf phpMyAdmin-5.1.0-all-languages.tar.gz
RUN rm -rf phpMyAdmin-5.1.0-all-languages.tar.gz
RUN mv phpMyAdmin-5.1.0-all-languages phpmyadmin

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz 
RUN rm -rf latest.tar.gz

COPY ./srcs/default /etc/nginx/sites-available/
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin
COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/init.sh /

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Tatarstan/L=Kazan/O=21shool/OU=lgarg/CN=localhost"

RUN rm -f /var/www/html/index.nginx-debian.html
RUN chmod -R 755 ./*

WORKDIR /
RUN chmod +x *.sh

CMD bash init.sh