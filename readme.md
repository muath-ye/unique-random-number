Generate Unique Random Number Based On Table Id
==============

Generate ranged digits random number from table id, so its unique.

## Requirements
- [PHP >= 5.0](http://php.net/)

## Installation

To install through composer, run the following command from terminal:

    composer require "muath-ye/unique-random-number"

### For laravel users

if you are using laravel project, and you want to use it without declaration the use statement. Register ```Random``` alias on your `config/app.php` file.

```php

'aliases' => [
    // ...,
    'Random' => \Muathye\UniqueRandomNumber\Random::class
]
```


## Usage

```php
<?php
// You don't need to declare this use statement if you registered the Random class in config/app.php

use Muathye\UniqueRandomNumber\Random;

Random::generate(2, 3, 6);
// Out Put => 628

Random::generate(1, 4, 6);
// Out Put => 8314

Random::generate(1624, 4, 6);
// Out Put => 16248

Random::generate(54627, 4, 6);
// Out Put => 546276

Random::generate(54627, 4, 6);
// Out Put => 546276
```
### Security

If you discover any security-related issues, please email [muathye@gmail.com](mailto:muathye@gmail.com) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
