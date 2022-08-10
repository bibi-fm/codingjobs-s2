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
 * of houses for each person, as well as the bank account balance (credit - debit). DONE
 * If the bank account balance is below 0, display it in red. DONE
 * This list should be displayed in descending alphabetical order (based on the name). DONE
 */

//sorts the array in descending order based on the array key
krsort($celebrities);

foreach ($celebrities as $celebrity => $info) {
    $balance = $info['credit'] - $info['debit'];
    echo "Name: $celebrity <br>";
    echo "<p>Houses: " . $info['houses'] . "</p>";
    if ($balance < 0) {
        echo "<p style='color: red;'> Balance: $balance </p>";
    } else if ($balance > 0){
        echo "<p>Balance: $balance </p>";
    }
    echo '<hr>';
}

/** DELETED CODE
 * echo "Balance: $balance <br>";
 * echo 'Credit: ' . $info['credit'] . '<br>';
 * echo 'Debit: ' . $info['debit'] . '<br>';
 * echo '<pre>';
 *  var_dump($celebrity);
 * echo '</pre>';
 * echo '<pre>';
 * var_dump($info);
 * echo '</pre>';
 */