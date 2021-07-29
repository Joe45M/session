# Session

A simple helper library to easily navigate and manage sessions in PHP. Requires PHP 8.

## Install

```
composer require joem/session
```

## Usage

```php

// Set an index
session()->set('name', 'Joe');

// Get an index
session()->get('name');

// Get an index with a default return type if the index does not exist
session()->get('name', 'Name not found');

// See if an index exists
session()->has('name');
```

Session is inspired by the [Laravel](https://laravel.com/) session object and facade.

## Contributing

If you would like to contribute, you're more than welcome to propose new changes or accept open issues - just go ahead!
Thanks :)
