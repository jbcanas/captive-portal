FROM php:7.2-fpm-alpine

RUN apk update \
  && apk add --no-cache \
      postgresql-dev \
  && docker-php-ext-configure bcmath --enable-bcmath \
  && docker-php-ext-configure pdo_mysql --with-pdo-mysql \
  && docker-php-ext-configure pdo_pgsql --with-pgsql \
  && docker-php-ext-configure mbstring --enable-mbstring \
  && docker-php-ext-install -j$(nproc) \
      bcmath \
      pdo_mysql \
      pdo_pgsql \
      mbstring \
      opcache

EXPOSE 9000
CMD ["php-fpm"]
