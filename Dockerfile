#
# ESTE DOCKFILE ES PARA UN SITIO WEB
#

FROM debian:bullseye

# Actualizando el sistema
RUN apt-get update
# Instalando y configurando el idioma
RUN set -eux \
  apt-get update && apt-get install -y locales \
  && localedef -i es_BO -c -f UTF-8 -A /usr/share/locale/locale.alias es_BO.UTF-8
ENV LANG es_BO.utf8
# Ghostscript es requiredo para renderizar vistas previas de PDF
RUN set -eux \
  apt install -y --no-install-recommends ghostscript;
# Core extencions
RUN set -eux apt install -y --no-install-recommends \
  libfreetype6-dev \
  libicu-dev \
  libjpeg-dev \
  libmagickwand-dev \
  libpng-dev \
  libwebp-dev \
  libzip-dev \
  zip \
  unzip \
  git \
  wget \
  curl
# Instalando apache2
RUN set -eux \
  apt-get install -y apache2 
# Instalando PHP 7.4
RUN apt-get install -y php7.4
# Instala los módulos adicionales requeridos por WordPress
RUN apt-get install -y \
  php7.4-mysql \
  php7.4-curl \
  php7.4-gd \
  php7.4-intl \
  php7.4-mbstring \
  php7.4-soap \
  php7.4-xml \
  php7.4-xmlrpc \
  php7.4-zip
# Habilitando modulo PHP en Apache2
RUN a2enmod php7.4
# Habilitando modilo rewrite
RUN a2enmod rewrite
# Agregando el ausario root al grupo www-data
RUN usermod -aG www-data root
# Cambiando los permisos del direcroti /var/www/html
RUN chown -R www-data:www-data /var/www/html/*
# Copiamos el archivo site.conf al /etc/apache2/sites-available/000-default.conf
COPY site.conf /etc/apache2/sites-available/000-default.conf
#  Reinicia el servicio de Apache2
RUN service apache2 restart
# Limpiando cache y lista de repositorios
RUN apt clean && rm -rf /var/lib/apt/lists/*
# Configura el directorio de trabajo en /var/www/html
WORKDIR /var/www/html
# Expone el puerto 80 para acceder a Apache2
EXPOSE 80
#EXPOSE 3306
# Inicia Apache2 en primer plano al ejecutar el contenedor
CMD ["apache2ctl", "-D", "FOREGROUND"]
