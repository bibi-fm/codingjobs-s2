<?php

require_once 'HtmlString.php';

$myString = new HtmlString('my beautiful string');

echo $myString->get_bold_string()  . '<br>';
echo $myString->get_italic_string()  . '<br>';
echo $myString->get_bolditalic_string()  . '<br>';
