FROM php:7.2-cli

COPY php-site /usr/src/php-site

WORKDIR  /usr/src/php-site

CMD [ "php", "./index.php" ]
