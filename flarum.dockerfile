FROM php:7.2-apache

RUN set -ex; \
	apt-get update; \
	apt-get install -y \
	libjpeg-dev \
	libpng-dev \
	; \
	rm -rf /var/lib/apt/lists/*; \
	\
	docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr; \
	docker-php-ext-install gd mysqli opcache
# TODO consider removing the *-dev deps and only keeping the necessary lib* packages

RUN { \
	echo 'opcache.memory_consumption=128'; \
	echo 'opcache.interned_strings_buffer=8'; \
	echo 'opcache.max_accelerated_files=4000'; \
	echo 'opcache.revalidate_freq=2'; \
	echo 'opcache.fast_shutdown=1'; \
	echo 'opcache.enable_cli=1'; \
	} > /usr/local/etc/php/conf.d/opcache-recommended.ini

RUN a2enmod rewrite expires vhost_alias

RUN apt-get update && apt-get install -y \
	emacs-nox mlocate less git

RUN apt-get update -y \
	&& apt-get install -y libmcrypt-dev \
	&& echo '' | pecl install mcrypt-1.0.1 \
	&& echo 'extension=mcrypt.so' > /usr/local/etc/php/conf.d/docker-php-ext-pecl.ini

RUN apt-get update && apt-get install -y \
	bzip2 libbz2-dev \
	libicu-dev \
	mariadb-client \
	default-mysql-client \
	&& apt-get install -y --no-install-recommends libmagickwand-dev \
	&& pecl install imagick-3.4.3 \
	&& docker-php-ext-configure intl \
	&& docker-php-ext-install mbstring bz2 zip intl pdo pdo_mysql \
	&& docker-php-ext-enable imagick

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/
RUN rm -rf www
RUN composer create-project flarum/flarum www --stability=beta

RUN a2enmod rewrite
RUN apache2ctl configtest
# RUN systemctl enable apache2.service
RUN service apache2 restart
