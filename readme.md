This is a Laravel 5 package that provides pet management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `petfinder/pet`.

    "petfinder/pet": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Petfinder\Pet\Providers\PetServiceProvider::class,

```

And also add it to alias

```php
'Pet'  => Petfinder\Pet\Facades\Pet::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Petfinder\Pet\Providers\PetServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Petfinder\Pet\Providers\PetServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Petfinder\Pet\Providers\PetServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Petfinder\Pet\Providers\PetServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Petfinder\Pet\Providers\PetServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Petfinder\Pet\Providers\PetServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


