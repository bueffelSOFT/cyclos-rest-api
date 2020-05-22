FROM vrokdd/php:symfony

RUN pecl install xdebug-2.8.0
RUN docker-php-ext-enable xdebug

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
