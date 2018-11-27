FROM node:11
WORKDIR /app
COPY ./app/themes/base/package*.json ./
RUN yarn
COPY ./app/themes/base/ .
RUN yarn run build

FROM wordpress:php7.2
COPY ./app/themes /var/www/html/wp-content/themes
COPY ./app/plugins /var/www/html/wp-content/plugins
COPY ./app/uploads /var/www/html/wp-content/uploads
COPY ./app/wp-config.php /var/www/html/wp-config.php
COPY --from=0 /app /var/www/html/wp-content/themes/base
