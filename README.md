## A bootstrap 3 helper for Laravel 5

### Install

```console
composer require "joeloco/bootstrap:dev-master"
```

### Config

1 - Register the service provider in /config/app 

```php
'providers' => [
        //.....
        Bootstrap\Providers\BootstrapServiceProvider::class
    ],
```

2 - Set a alias for facade in /config/app 

```php

'aliases' => [
        //....
        'BS' => Bootstrap\Facades\Bootstrap::class,
    ],
```

### Breadcrumb example

```php
<?php echo BS::breadcrumb()->drop('Root','/root')->drop('Chield','root/chield')->stop('right');?>
```




