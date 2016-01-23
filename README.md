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

You can also use it like:

`TranslatableRoute::resource('recipe', trans('routes.recipes'), 'RecipeController');`

This way you will have different routes in different language, but always named the same. So if you use route('recipe.index') you'll always return the to the right page no matter what language.

# Result
![Alt text](example.png?raw=true "Routes Example")

# Expansion

For now this package supports the English (default) and Dutch language.

