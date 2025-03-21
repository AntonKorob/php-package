<?php

namespace Php\Package\Tests;

require("src/Utils.php");
require("vendor/autoload.php");

use PHPUnit\Framework\TestCase;
use Php\Package\User;

use function Hexlet\Phpunit\Utils\reverseString;
class UserTest extends TestCase
{
    public function testGetName(): void
    {
        $name = 'john';
        $children = [new User('Mark')];
        $user = new User($name, $children);

        $this->assertEquals($name, $user->getName());
        $this->assertEquals(collect($children), $user->getChildren());
    }

    public function testReverse()
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleH', reverseString('Hello'));
    }
}
