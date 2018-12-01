FROM node:11
WORKDIR /app
COPY ./app/themes/base/package*.json ./
RUN yarn
COPY ./app/themes/base/ .
RUN yarn run build

FROM wordpress:php7.2
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./app/mu-plugins /var/www/html/wp-content/mu-plugins
COPY ./app/plugins /var/www/html/wp-content/plugins
COPY ./app/wp-config.php /var/www/html/wp-config.php
COPY --from=0 /app /var/www/html/wp-content/themes/base
COPY ./app/uploads /var/www/html/wp-content/uploads
