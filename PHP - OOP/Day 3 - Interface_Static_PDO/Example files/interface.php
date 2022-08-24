<?php

/*
    INTERFACE

    Interface looks like a class but only contains static properties and abstract method.

    Interfaces are use to implements roles/jobs WHEN no inheritance is involved.

    Sometimes, we use interfaces to implement multiple inheritance.

    Best practice : 
        - Name of the file should be same as the interface
        - Name of the interface starts with capital I
        IExample

*/

interface IExample
{
    // Abstract is implicit
    public function sit();
}

class Dog extends Animal implements IExample
{
    // I have to implement sit() method
    public function sit()
    {
        echo 'Dog is sitting and waiting for food.';
    }
}

class Robot implements IExample
{
    public function sit()
    {
        echo 'Robot is rusty. Having hard time to sit.';
    }
}

/*
Abstract class :
    1. Use abstract class when rules/template must be defined for subclasses (children).
    2. Abstract classes provides default action for children
    3. Use to provide a template for potential future inherited classes.

Interface
    1. Use an interface when a role/rules must be defined for classes, regardless of the inheritance.
    2. You can't instantiate an interface.
    3. A class can implement multiple interfaces.

    */
