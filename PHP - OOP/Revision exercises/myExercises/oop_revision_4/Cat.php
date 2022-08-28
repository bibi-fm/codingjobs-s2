<?php

class Cat
{

    public $name;
    public $age;
    public $color;
    public $sex;
    public $breed;

    public function __construct($n, $a, $c, $s, $b)
    {
        $this->set_name($n);
        $this->set_age($a);
        $this->set_color($c);
        $this->set_sex($s);
        $this->set_breed($b);
    }
    public function set_name($n)
    {
        if (is_string($n)) {
            $this->name = $n;
        } else {
            echo 'Name must be a string!<br>';
        }
    }
    public function set_age($a)
    {
        if (is_numeric($a)) {
            $this->age = $a;
        } else {
            echo 'Age must be a number!<br>';
        }
    }
    public function set_color($c)
    {
        if (is_string($c)) {
            $this->color = $c;
        } else {
            echo 'Color must be a string!<br>';
        }
    }
    public function set_sex($s)
    {
        if (is_string($s)) {
            $this->sex = $s;
        } else {
            echo 'Sex must be a string!<br>';
        }
    }
    public function set_breed($b)
    {
        if (is_string($b)) {
            $this->breed = $b;
        } else {
            echo 'Breed must be a string!<br>';
        }
    }
    public function get_info()
    {
        // $properties = array();

        $properties =  array(
            $this->name,
            $this->age,
            $this->color,
            $this->sex,
            $this->breed
        );

        return $properties;
    }
}
