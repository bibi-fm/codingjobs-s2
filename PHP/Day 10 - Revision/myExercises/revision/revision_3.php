<?php

$celebrities = array(
    "Jeff Bezos" => array(
        "houses" => 15,
        "credit" => 8100140042,
        "debit" => 2123177
    ),
    "Dwayne Johnson" => array(
        "houses" => 21,
        "credit" => 871399200,
        "debit" => 9837123
    ),
    "Kylie Jenner" => array(
        "houses" => 5,
        "credit" => 55140042,
        "debit" => 55140040
    ),
    "PHP Simon" => array(
        "houses" => 0,
        "credit" => 200,
        "debit" => 1800
    )
);
/** INSTRUCTIONS (from pdf) 
 * Write a PHP script that displays the celebrity name AND the number
 * of houses for each person, as well as the bank account balance (credit - debit).
 * If the bank account balance is below 0, display it in red.
 * This list should be displayed in descending alphabetical order (based on the name).
*/

foreach ($celebrities as $key => $value) {
    var_dump($key)$value;
    var_dump($key)$value;
}
