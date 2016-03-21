<?php

namespace Yuloh\Neko;

use Yuloh\Neko\Neko;

/**
 * Convert a value to snake_case.
 *
 * @param  string $value
 * @return string
 */
function snake_case($value)
{
    return Neko::snakeCase($value);
}

/**
 * Convert a value to kebab-case.
 *
 * @param  string $value
 * @return string
 */
function kebab_case($value)
{
    return Neko::kebabCase($value);
}

/**
 * Convert a value to PascalCase.
 *
 * @param  string $value
 * @return string
 */
function pascal_case($value)
{
    return Neko::pascalCase($value);
}

/**
 * Convert a value to camelCase.
 *
 * @param  string $value
 * @return string
 */
function camel_case($value)
{
    return Neko::camelCase($value);
}
