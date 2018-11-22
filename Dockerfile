FROM node:10-stretch
WORKDIR /app
COPY ./app/themes/base/package*.json .
RUN npm install
COPY ./app/themes/base/ .
RUN npm run build

FROM wordpress:php7.2
COPY ./app/themes /var/www/html/wp-content/themes
COPY ./app/plugins /var/www/html/wp-content/plugins
COPY ./app/uploads /var/www/html/wp-content/uploads
COPY ./app/.htaccess /var/www/html/.htaccess
COPY ./app/wp-config.php /var/www/html/wp-config.php
COPY --from=0 /app /var/www/html/wp-content/themes/base
