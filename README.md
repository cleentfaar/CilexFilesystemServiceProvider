# Cilex Filesystem Service Provider

[![Build Status](https://secure.travis-ci.org/cleentfaar/CilexFilesystemServiceProvider.png?branch=master)](http://travis-ci.org/cleentfaar/Cilex-Filesystem-Service-Provider)

This is a [Cilex Service Provider](http://cilex.github.com)
for Symfony [Filesystem Component](http://symfony.com/doc/master/components/filesystem.html).

## Installation

Add it using [composer](http://getcomposer.org/) :

```json
{
    "require": {
        "cleentfaar/cilex-filesystem-provider": "dev-master"
    }
}
```

## Usage

```php
use Silex\Application;
use Cleentfaar\Cilex\Provider\FilesystemServiceProvider;

$app = new Application();
// Register the filesystem
$app->register(new FilesystemServiceProvider());

// Just use it as any Cilex service
if (!$app['filesystem']->exists('any-absolute-or-relative-path...')) {
	throw new \Namespace\PathNotFoundCustomException();
}
```

## Filesystem

Read more about the [Symfony2 Filesystem Component](http://symfony.com/doc/current/components/filesystem.html)

##License

This is released under the MIT license
