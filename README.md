# laradeck-collection-macros

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Набор макросов для расширения стандартного функционала `Illuminate\Support\Collection`

## Install

Via Composer

``` bash
$ composer require ngtfkx/laradeck-collection-macros
```

## Documentations

**forSelect(string $valueName, string $keyName = 'id'): array**

Метод возвращает ассоциативный массив, где в качестве ключа используется свойство `$keyName` элемента коллекции,
а в качестве значения свойство `$valueName`.

``` php
$arr = [
    ['id' => '10', 'name' => 'First', ],
    ['id' => '20', 'name' => 'Second', ],
    ['id' => '30', 'name' => 'Third', ],
];
$collect = new Collection($arr);
$keyValueArray = $collect->forSelect('name')
//[
//    '10' => 'First',
//    '20' => 'Second',
//    '30' => 'Third',
//]
```

**forSelectWithPrepend(string $valueName, string $keyName = 'id', array $prepend = ['' => 'Выбрать']): array**

Аналогично `forSelect`, только в начало массива добавляютсся данные из массива `$prepend`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Denis Sandal][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ngtfkx/laradeck-collection-macros.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ngtfkx/laradeck-collection-macros/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ngtfkx/laradeck-collection-macros.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ngtfkx/laradeck-collection-macros.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ngtfkx/laradeck-collection-macros.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ngtfkx/laradeck-collection-macros
[link-travis]: https://travis-ci.org/ngtfkx/laradeck-collection-macros
[link-scrutinizer]: https://scrutinizer-ci.com/g/ngtfkx/laradeck-collection-macros/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ngtfkx/laradeck-collection-macros
[link-downloads]: https://packagist.org/packages/ngtfkx/laradeck-collection-macros
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
