<?php

require(__DIR__."/../vendor/autoload.php");
require(__DIR__."/../lib/User.php");
 
class UserTest extends PHPUnit_Framework_TestCase
{
    // test the talk method
    public function testTalk() {
        // make an instance of the user
        $user = new User();
 
        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}