FROM php:7.1-fpm-stretch

RUN pecl install -o -f redis \
  &&  rm -rf /tmp/pear \
  &&  docker-php-ext-enable redis

RUN mv /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
RUN sed -i 's/session.save_handler = files/session.save_handler = redis/g' /usr/local/etc/php/php.ini
RUN sed -i 's/;session.save_path = \"\/tmp\"/session.save_path = \"tcp\:\/\/redis\:6379\"/g' /usr/local/etc/php/php.ini