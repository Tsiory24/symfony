# Utiliser l'image PHP FPM 8.2
FROM php:8.2-fpm

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip opcache intl mbstring \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer (Si Composer n'est pas déjà installé)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Installer Symfony CLI (facultatif pour le développement, à retirer en production si non nécessaire)
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Copier les fichiers de l'application
WORKDIR /var/www/symfony
COPY . .

# Fixer les permissions pour les fichiers
RUN chown -R www-data:www-data /var/www/symfony

# Installer les dépendances Composer (en mode production)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Démarrer le serveur Symfony (en production, vous devriez plutôt utiliser un serveur comme Nginx)
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
