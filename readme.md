<<<<<<< HEAD
# [Laravel](http://laravel.com) - A PHP Framework For Web Artisans

Laravel is a clean and classy framework for PHP web development. Freeing you
from spaghetti code, Laravel helps you create wonderful applications using
simple, expressive syntax. Development should be a creative experience that you
enjoy, not something that is painful. Enjoy the fresh air.

[Official Website & Documentation](http://laravel.com)

## Feature Overview

- Simple routing using Closures or controllers.
- Views and templating.
- Driver based session and cache handling.
- Database abstraction with query builder.
- Authentication.
- Migrations.
- PHPUnit Integration.
- A lot more.

## A Few Examples

### Hello World:

```php
<?php

Route::get('/', function()
{
	return "Hello World!":
});
```

### Passing Data To Views:

```php
<?php

Route::get('user/(:num)', function($id)
{
	$user = DB::table('users')->find($id);

	return View::make('profile')->with('user', $user);
});
```

### Redirecting & Flashing Data To The Session:

```php
<?php

return Redirect::to('profile')->with('message', 'Welcome Back!');
```

## Contributing to Laravel

Contributions are encouraged and welcome; however, please review the Developer
Certificate of Origin in the "license.txt" file included in the repository. All
commits must be signed off using the `-s` switch.

```bash
git commit -s -m "this commit will be signed off automatically!"
```

## License

Laravel is open-sourced software licensed under the MIT License.
=======
# [Laravel](http://laravel.com) Quickstart for [Pagodabox](https://pagodabox.com/)

Get a copy of Laravel running on Pagodabox in seconds.

Based on the Boxfile method from: http://forums.laravel.com/viewtopic.php?id=890

[Official Laravel Website & Documentation](http://laravel.com)

[Official Pagodabox Website & Documentation](https://pagodabox.com/)

## Usage

- Install the quickstart on Pagodabox
- Clone the repo on your machine
- Open up Boxfile and modify the web1 name

``web1:
  name: YOUR_APP_NAME``

## Features

- Laravel 3.2.5
>>>>>>> baa91818e7554af82b465684c2cbe8c8035086c6
