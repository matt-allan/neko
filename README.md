# Neko - Case tranformation functions for PHP

Neko is a small collection of case tranformation functions for PHP.  They are as simple as possible with no external dependencies.

I wrote this library because I was tired of the other libraries out there not working like I expected.  Neko can handle input in Title case, lower case, PascalCase, camelCase, kebab-case, SCREAMING-KEBAB-CASE, snake_case, and SCREAMING_SNAKE_CASE.

## Install

Neko can be installed using [composer](getcomposer.org).

``` bash
$ composer require yuloh/neko
```

## Usage

### Snake Case

```php
use function Yuloh\Neko\snake_case;

echo snake_case('Hello World'); // hello_world
```

### Kebab Case

```php
use function Yuloh\Neko\kebab_case;

echo kebab_case('Hello World'); // hello-world
```

### Pascal Case

```php
use function Yuloh\Neko\pascal_case;

echo pascal_case('Hello World'); // HelloWorld
```

### Camel Case

```php
use function Yuloh\Neko\camel_case;

echo camel_case('Hello World'); //helloWorld
```
