FROM composer:latest
COPY . .
RUN composer install

FROM node:11
WORKDIR /app
COPY ./app/themes/base/package.json ./
COPY ./app/themes/base/yarn.lock ./
RUN yarn
COPY ./app/themes/base/ .
RUN yarn run build

FROM wordpress:5-apache
COPY --from=0 /app/app /var/www/html/
COPY --from=1 /app /var/www/html/wp-content/themes/base
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
