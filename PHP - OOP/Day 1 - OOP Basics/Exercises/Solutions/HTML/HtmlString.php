<?php

class HtmlString
{
    private $string;

    public function __construct($s)
    {
        $this->set_string($s);
    }

    public function set_string($newString)
    {
        if (is_string($newString))
            $this->string = $newString;
        else
            echo 'Must be a string.';
    }

    public function get_string()
    {
        return $this->string;
    }

    public function get_bold_string()
    {
        return '<strong>' . $this->string . '</strong>';
    }

    public function get_italic_string()
    {
        return '<i>' . $this->string . '</i>';
    }

    public function get_bolditalic_string()
    {
        return '<strong><i>' . $this->string . '</i></strong>';
    }
}
