FROM vrokdd/php:symfony

# for composer
RUN apt-get update && apt-get -y install zip wget git

# for debugging directly in an IDE
RUN pecl install xdebug-2.9.0
RUN docker-php-ext-enable xdebug

COPY ./install-composer.sh /tmp/
RUN /tmp/install-composer.sh

#CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
