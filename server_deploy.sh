#!/bin/bash
set -e

echo "Deploying Application ..."

#Enter maintence mode
(php artisan down --retry=60) || true
    # Update codebase
   git pull
   # git reset --hard origin/deploy

    # Install dependecies based on lock file
    # composer install --no-interaction --prefer-dist --optimize-autoloader

    # Migrate database
    # php artisan migrate

    # Note: If you are using queue workers, this is the place to restart them.
    # ...

    # Generate key
    #Ophp artisan key:generate

    # Clean Cache
    php artisan optimize

    # Reload PHP to update opcache
    # echo "" | -S service php8.1-fpm reload

# End maintence mode
php artisan up

echo "Application Deployed"
