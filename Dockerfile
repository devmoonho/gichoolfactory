FROM wordpress:5.4.2-fpm-alpine

LABEL maintainer = "dev.moonho@gmail.com"

WORKDIR /var/www/html

COPY . ${WORKDIR} 
