FROM php:7.2-apache

RUN apt-get update
RUN apt-get upgrade -y

RUN apt-get install --fix-missing -y libpq-dev
RUN apt-get install --no-install-recommends -y libpq-dev
RUN apt-get install -y libxml2-dev libbz2-dev zlib1g-dev
# RUN apt-get install -y apache2 apache2-utils
RUN apt-get -y install libsqlite3-dev libsqlite3-0 mariadb-client curl exif ftp
RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo
RUN docker-php-ext-enable pdo_mysql
RUN apt-get -y install --fix-missing zip unzip
RUN apt-get -y install --fix-missing git

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer self-update --2

# COPY apache2.conf /etc/apache2/sites-enabled/dev.conf
# ADD /usr/local/apache2/apache.conf /etc/apache2/sites-available/000-default.conf

COPY myapp /var/www/
RUN chmod -R 0777 /var/www/


# RUN apt-get clean \
# 	&& rm -r /var/lib/apt/lists/*

# VOLUME ["/var/www/html", "/var/log/apache2", "/etc/apache2"]
RUN a2enmod rewrite

WORKDIR /var/www/

# EXPOSE 8000
# CMD ["php", "-S localhost:80"]
# CMD ["apachectl", "start"]
CMD ["php", "spark",  "serve"]
