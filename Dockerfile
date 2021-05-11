FROM ubuntu:18.04

#UPDATING OS
RUN apt-get update
RUN apt-get install software-properties-common -y
# UPGRADE PHP7.4 REPOSITORY
RUN apt-add-repository ppa:ondrej/php -y
RUN apt-get update

#PHP ENVIROMENTS
ENV TZ=America/Mexico_city

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
ARG DEBIAN_FRONTEND=noninteractive
# LINUX DEPENDENCIES
RUN apt-get update

RUN apt-get update
RUN apt-get install apache2 php7.4 zip unzip curl -y

# PHP DEPENDENCIES
RUN apt-get install php7.4-mysql php7.4-gmp php7.4-zip php7.4-curl php7.4-gd php7.4-bcmath php7.4-mbstring php7.4-xml -y
# APACHE CONFIGURATION
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# INSTALL NODE & NPM
#RUN curl -sL https://deb.nodesource.com/setup_12.x -o nodesource_setup.sh
#RUN bash nodesource_setup.sh
#RUN apt-get install -y nodejs

# Apache Mod Rewrite active and config
RUN a2enmod rewrite
RUN sed -ri -e 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# WORKSPACHE DIRECTORY
WORKDIR /var/www/html

# INTEGRATING COMPOSER
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# TODO: LARAVEL IMPLEMENTATION
COPY ./ ./

RUN chmod -R 777 storage/
RUN chmod -R 777 bootstrap/
RUN cd ./ && composer install
RUN cp ./.env.example ./.env

EXPOSE 80
CMD apachectl -D FOREGROUND
