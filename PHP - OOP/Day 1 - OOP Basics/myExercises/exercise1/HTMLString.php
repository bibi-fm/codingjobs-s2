<?php
class HTMLString
{
    private $string;

    public function __construct($str)
    {
        //$this->setString = ' " '. $str . ' " ';
        $this->setString($str);
    }

    public function setString($newString)
    {
        if (is_string($newString)) {
            $this->string = $newString;
        } else {
            return 'Please enter a string.';
        }
    }

    public function getString()
    {
        return $this->string;
    }

    public function getBoldString()
    {
        return '<strong>' . $this->string . '</strong>';
    }

    public function getItalicString()
    {
        return '<em>' . $this->string . '</em>';
    }

    public function getItalicBoldString()
    {
        return '<strong>' . '<em>' . $this->string . '</em>' . '</strong>';
    }
}
