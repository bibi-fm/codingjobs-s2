<?php

/*
    STATIC

    A static method or property is not related to an object but to the class.

    A static can be accessed without creating an object.

*/

class Sheep
{
    private $name;
    private $count;
    public static $countCloned;

    public function __construct($n)
    {
        $this->name = $n;
        $this->count += 1;

        // 'self'
        self::$countCloned += 1;
    }

    // Example of static method :
    public static function test()
    {
        echo 'Yo !';
    }
}

$sheep1 = new Sheep('Sheep1');
$sheep2 = new Sheep('Sheep2');
$sheep3 = new Sheep('Sheep3');

// Access static property
echo 'Number of clone : ' . Sheep::$countCloned;
// Access static method
Sheep::test();
