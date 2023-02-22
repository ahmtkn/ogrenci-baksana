FROM php:8.1.0-fpm

RUN apt update
RUN apt upgrade -y
RUN apt install -y apt-utils
RUN apt install -y libmcrypt-dev
RUN apt install -y libicu-dev
RUN apt install -y libxml2-dev
RUN apt install -y libldb-dev
RUN apt install -y libldap2-dev
RUN apt install -y libxml2-dev
RUN apt install -y libssl-dev
RUN apt install -y libxslt-dev
#RUN apt install -y libpq-dev
RUN apt install -y libsqlite3-dev
RUN apt install -y libsqlite3-0
RUN apt install -y libc-client-dev
RUN apt install -y libkrb5-dev
RUN apt install -y curl
RUN apt install -y libcurl3-dev
RUN apt install -y firebird-dev
RUN apt install -y libicu-dev
RUN apt install -y libzip-dev
#RUN apt install -y mysql-client
#RUN apt install mysql
#RUN apt install -y libcurl3
#RUN apt install -y zip
#RUN apt install -y unzip
#RUN apt install -y php-apc
#RUN apt install -y postgresql-client

#RUN apt-get install nano
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y zip
#RUN apt-get install -y libpng12-dev
#RUN apt-get install -y libjpeg62-turbo-dev

RUN docker-php-ext-install intl
RUN docker-php-ext-install zip
RUN docker-php-ext-install soap
RUN docker-php-ext-install ftp
RUN docker-php-ext-install xsl
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install calendar
RUN docker-php-ext-install ctype
RUN docker-php-ext-install dba
RUN docker-php-ext-install dom
RUN docker-php-ext-install session
RUN docker-php-ext-install ldap
#RUN docker-php-ext-install json
RUN docker-php-ext-install sockets
RUN docker-php-ext-install pdo
#RUN docker-php-ext-install tokenizer
#RUN docker-php-ext-install pgsql
#RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install pdo_mysql 
#RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install curl
RUN docker-php-ext-install exif
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install gettext
RUN docker-php-ext-install iconv
RUN docker-php-ext-install pdo_firebird
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install phar
RUN docker-php-ext-install posix
RUN docker-php-ext-install shmop
RUN docker-php-ext-install simplexml
RUN docker-php-ext-install sysvmsg
RUN docker-php-ext-install sysvsem
RUN docker-php-ext-install sysvshm
RUN docker-php-ext-install xml
#RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-install xmlwriter
#RUN docker-php-ext-install wddx
#RUN docker-php-ext-install hash
#RUN docker-php-ext-install mbstring
#RUN docker-php-ext-install interbase
#RUN docker-php-ext-install pspell
#RUN docker-php-ext-install recode
#RUN docker-php-ext-install snmp
#RUN docker-php-ext-install tidy
#RUN docker-php-ext-install zip
#RUN docker-php-ext-install mcrypt
#RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
#RUN docker-php-ext-install gd
#RUN docker-php-ext-configure zip --with-libzip
#RUN docker-php-ext-install zip

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get update \
 && apt-get install -y \
 nodejs

RUN apt-get update && apt-get install -y libpng-dev 
RUN apt-get install -y \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev libxpm-dev \
    libfreetype6-dev
#RUN docker-php-ext-configure gd \
#    --with-gd \
#    --with-webp-dir \
#    --with-jpeg-dir \
#    --with-png-dir \
#    --with-zlib-dir \
#    --with-xpm-dir \
#    --with-freetype-dir
RUN docker-php-ext-install gd

RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap

RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_NO_INTERACTION=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
COPY . /var/www/html

#ADD bootstrap.sh /usr/local/bin/bootstrap.sh
#RUN chmod +x /usr/local/bin/bootstrap.sh
#CMD ["/usr/local/bin/bootstrap.sh", "start"]