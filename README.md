# Installation

## Clone the Repo

## Change into the new directory

## Install Dependencies
    docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer install --ignore-platform-reqs

## Dump Autoload
    docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer dump-autoload --ignore-platform-reqs

## Copy .env.example file to .env and add db credentials
    mv .env.example .env
  Now open the `.env`-File and add database user and password:

    DB_USERNAME=<yourdbuser>
    DB_PASSWORD=<yourdbpassword>

## Start the Server using Laravel Sail (Docker)
    vendor/bin/sail up -d

## Generate new Application Key
    vendor/bin/sail artisan key:generate

## Migrate the database
    vendor/bin/sail artisan migrate

## Create your first Client user (vcs guard)
    vendor/bin/sail artisan user:create

## Emit Test Event with a message (Laravel Tinker):
event(new App\Events\PrivateChannelEvent("test2"))
  
  *Follow the console instructions*

## Optional: Run tests
    vendor/bin/sail test