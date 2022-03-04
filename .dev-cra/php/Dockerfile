FROM vrokdd/php:api-8

# for composer
RUN apk update && apk add zip wget git

# for debugging directly in an IDE
RUN apk add $PHPIZE_DEPS \
    && pecl install xdebug-3.1.2 \
    && docker-php-ext-enable xdebug

COPY ./install-composer.sh /tmp/
RUN /tmp/install-composer.sh
