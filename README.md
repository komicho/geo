# Komicho Geo
get country name and code

### Install via composer

Add orm to composer.json configuration file.
```
$ composer require komicho/geo
```

And update the composer
```
$ composer update
```
    
## code
```php
require 'vendor/autoload.php';

use komicho\geo;

echo geo::code(); // get code

echo geo::name(); // get name

```