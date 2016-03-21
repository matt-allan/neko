<?php

namespace Yuloh\Neko;

/**
 * The snakeCase regex is based on the regex from doctrine/inflector,
 * Copyright (c) 2006-2015 Doctrine Project.
 * @link https://github.com/doctrine/inflector/blob/master/LICENSE
 */
class Neko
{
    /**
     * The cache of snake-cased words.
     *
     * @var array
     */
    private static $snakeCache = [];

    /**
     * The cache of kebab-cased words.
     *
     * @var array
     */
    private static $kebabCache = [];

    /**
     * The cache of pascal-cased words.
     *
     * @var array
     */
    private static $pascalCache = [];

    /**
     * The cache of camel-cased words.
     *
     * @var array
     */
    private static $camelCache = [];

    /**
     * Convert a value to snake_case.
     *
     * @param  string $value
     * @return string
     */
    public static function snakeCase($value)
    {
        $key = $value;
        if (isset(static::$snakeCache[$key])) {
            return static::$snakeCache[$key];
        }

        $value = preg_replace('/\s+/', '', ucwords($value));
        $value = str_replace('-', '_', $value);
        $value = static::normalizeScreamingCase($value);
        return static::$snakeCache[$key] = strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', $value));
    }

    /**
     * Convert a value to kebab-case.
     *
     * @param  string $value
     * @return string
     */
    public static function kebabCase($value)
    {
        $key = $value;
        if (isset(static::$kebabCache[$key])) {
            return static::$kebabCache[$key];
        }

        $value = preg_replace('/\s+/', '', ucwords($value));
        $value = str_replace('_', '-', $value);
        $value = static::normalizeScreamingCase($value);
        return static::$kebabCache[$key] =  strtolower(preg_replace('~(?<=\\w)([A-Z])~', '-$1', $value));
    }

    /**
     * Convert a value to PascalCase.
     *
     * @param  string $value
     * @return string
     */
    public static function pascalCase($value)
    {
        if (isset(static::$pascalCache[$value])) {
            return static::$pascalCache[$value];
        }

        $value = static::normalizeScreamingCase($value);
        return static::$pascalCache[$value] = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $value)));
    }

    /**
     * Convert a value to camelCase.
     *
     * @param  string $value
     * @return string
     */
    public static function camelCase($value)
    {
        if (isset(static::$camelCache[$value])) {
            return static::$camelCache[$value];
        }

        return static::$camelCache[$value] = lcfirst(static::pascalCase($value));
    }

    /**
     * Normalize screaming snake/kebab case value to regular snake/kebab case.
     *
     * @param  string $value
     * @return string
     */
    private static function normalizeScreamingCase($value)
    {
        if (ctype_upper(str_replace(['_', '-'], '', $value))) {
            return strtolower($value);
        }

        return $value;
    }
}
