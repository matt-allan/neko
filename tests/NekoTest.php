<?php

use function Yuloh\Neko\snake_case;
use function Yuloh\Neko\kebab_case;
use function Yuloh\Neko\pascal_case;
use function Yuloh\Neko\camel_case;

class NekoTest extends \PHPUnit_Framework_TestCase
{
    private $title = 'The Thing';
    private $lower = 'the thing';
    private $pascal = 'TheThing';
    private $camel = 'theThing';
    private $kebab = 'the-thing';
    private $screamingKebab = 'THE-THING';
    private $snake = 'the_thing';
    private $screamingSnake = 'THE_THING';

    //------------------- snake ------------------------//

    public function testSnakeCaseFromTitleCase()
    {
        $this->assertSame($this->snake, snake_case($this->title));
    }

    public function testSnakeCaseFromLowerCase()
    {
        $this->assertSame($this->snake, snake_case($this->lower));
    }

    public function testSnakeCaseFromPascalCase()
    {
        $this->assertSame($this->snake, snake_case($this->pascal));
    }

    public function testSnakeCaseFromCamelCase()
    {
        $this->assertSame($this->snake, snake_case($this->camel));
    }

    public function testSnakeCaseFromKebabCase()
    {
        $this->assertSame($this->snake, snake_case($this->kebab));
    }

    public function testSnakeCaseFromScreamingKebabCase()
    {
        $this->assertSame($this->snake, snake_case($this->screamingKebab));
    }

    public function testSnakeCaseFromSnakeCase()
    {
        $this->assertSame($this->snake, snake_case($this->snake));
    }

    public function testSnakeCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->snake, snake_case($this->screamingSnake));
    }

    //------------------- kebab ------------------------//

    public function testKebabCaseFromTitleCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->title));
    }

    public function testKebabCaseFromLowerCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->lower));
    }

    public function testKebabCaseFromPascalCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->pascal));
    }

    public function testKebabCaseFromCamelCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->camel));
    }

    public function testKebabCaseFromKebabCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->kebab));
    }

    public function testKebabCaseFromScreamingKebabCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->screamingKebab));
    }

    public function testKebabCaseFromSnakeCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->snake));
    }

    public function testKebabCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->kebab, kebab_case($this->screamingSnake));
    }

    //------------------- pascal ------------------------//

    public function testPascalCaseFromTitleCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->title));
    }

    public function testPascalCaseFromLowerCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->lower));
    }

    public function testPascalCaseFromPascalCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->pascal));
    }

    public function testPascalCaseFromCamelCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->camel));
    }

    public function testPascalCaseFromKebabCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->kebab));
    }

    public function testPascalCaseFromScreamingKebabCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->screamingKebab));
    }

    public function testPascalCaseFromSnakeCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->snake));
    }

    public function testPascalCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->pascal, pascal_case($this->screamingSnake));
    }

    //------------------- camel ------------------------//

    public function testCamelCaseFromTitleCase()
    {
        $this->assertSame($this->camel, camel_case($this->title));
    }

    public function testCamelCaseFromLowerCase()
    {
        $this->assertSame($this->camel, camel_case($this->lower));
    }

    public function testCamelCaseFromPascalCase()
    {
        $this->assertSame($this->camel, camel_case($this->pascal));
    }

    public function testCamelCaseFromCamelCase()
    {
        $this->assertSame($this->camel, camel_case($this->camel));
    }

    public function testCamelCaseFromKebabCase()
    {
        $this->assertSame($this->camel, camel_case($this->kebab));
    }

    public function testCamelCaseFromScreamingKebabCase()
    {
        $this->assertSame($this->camel, camel_case($this->screamingKebab));
    }

    public function testCamelCaseFromSnakeCase()
    {
        $this->assertSame($this->camel, camel_case($this->snake));
    }

    public function testCamelCaseFromScreamingSnakeCase()
    {
        $this->assertSame($this->camel, camel_case($this->screamingSnake));
    }
}
