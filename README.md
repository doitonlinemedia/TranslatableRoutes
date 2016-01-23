# TranslatableRoutes
Create translatable resource routes for laravel

# Installation

Run the following command:

`composer require doitonlinemedia/translatableroutes "dev-master"`


Next add the following provider to your app.php in the config file under 'providers':

`Doitonlinemedia\Translatableroutes\TranslatableRoutesServiceProvider::class`


And add this line to 'aliases' in the same file:

`'TranslatableRoute' => Doitonlinemedia\Translatableroutes\TranslatableRouteFacade::class`


Finally run `composer dump-autoload`


# Usage
From now on you can use it like this in your route file:

`TranslatableRoute::resource('recipe', 'recepten', 'RecipeController');`

Grouping these routes still works!

# Result
![Alt text](example.png?raw=true "Routes Example")

# Expansion

For now this package supports the English (default and Dutch language.

