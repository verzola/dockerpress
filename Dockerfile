FROM node:11
WORKDIR /app
COPY ./app/themes/base/package.json ./
COPY ./app/themes/base/yarn.lock ./
RUN yarn
COPY ./app/themes/base/ .
RUN yarn run build

FROM composer:latest
COPY . .
RUN composer install

FROM wordpress:5-apache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=1 /app /var/www/html/
COPY --from=0 /app /var/www/html/wp-content/themes/base
