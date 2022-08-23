<?php

/*
    ABSTRACT

    Abstraction is used when the parent should not be instantiate.
    Use it when you want to implement 'rules'/ mandatory behavior for the children.

    The structure of the class is still the same as a regular one, you just add the keyword 'abstract'.

    1. If a class contain one (or more) abstract method, the class has to be abstract.
    2. An abstract class can contain regular methods()
    3. A class can be abstract without any abstract method


*/

abstract class Shape
{
    public $x;
    public $y;

    // Abstract method
    abstract public function calculateSurface();

    public function example()
    {
        echo 'youhouuuuu';
    }
}

class Circle extends Shape
{
    public function calculateSurface()
    {
        echo 'Calcul from circle<br>';
    }
}

class Triangle extends Shape
{
    public function calculateSurface()
    {
        echo 'Calcul from triangle.<br>';
    }
}

class Rectangle extends Shape
{
    public function calculateSurface()
    {
        echo 'Calcul from rectangle.<br>';
    }
}

$myShape = new Circle();
