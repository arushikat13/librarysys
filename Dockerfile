FROM ubuntu
#FROM php:7.0-apache  
COPY . /var/www/php

RUN apt-get update 
RUN apt-get install –y apache2 
RUN apt-get install –y apache2-utils 
RUN apt-get clean
CMD [“apache2ctl”, “-D”, “FOREGROUND”]


#FROM php:7.2-cli

#docCOPY php-site /usr/src/php-site
#WORKDIR  /usr/src/php-site



ENTRYPOINT [ "php","S 0.0.0.0:2000", "./index.php", ]







