## Installation

Clone the repo locally:

```sh
git clone git@github.com:agencetwogether/filament-argument.git
```
Go to directory:
```sh
cd filament-argument
```

Install PHP dependencies:
```sh
composer install
```

Setup configuration:
```sh
cp .env.example .env
```

Generate application key:
```sh
php artisan key:generate
```

Run database migrations with seeder:

```sh
php artisan migrate --seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit the url in your browser, and login with:

-   **Username:** admin@filamentphp.com
-   **Password:** password

## Access and show the issue
Go to Locations, open actions dropdown of any record, and click on ```Slots Funerals```, a slide over opens. (In normal situation, a form appears, but in this case, it's ouside of the scope)
Finally click on Save button and error occurs : 
```Undefined array key "module"```

