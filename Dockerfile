FROM wordpress:5.4.2-fpm-alpine

LABEL maintainer = "dev.moonho@gmail.com"

WORKDIR /usr/src/app

ARG CONTENT_DIR=/var/www/html
COPY . ${CONTENT_DIR} 
