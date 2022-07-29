<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
    - Exercise 1 :
        1. Create an HTML form with a text field in a PHP script. The form will point to the same page.
        2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.
        3. Create a second `submit` button, which displays the string entered in lowercase
	
*/

?>
<form method="POST">
    <input type="text" name="yourString" placeholder="Type a word/sentence"><br>
    <input type="submit" name="uppercase" value="uppercase">
    <input type="submit" name="lowercase" value="lowercase">
</form>

<?php
if (isset($_POST['uppercase'])) {
    $string = $_POST['yourString'];
    echo strtoupper($string);
}
if (isset($_POST['lowercase'])) {
    $string = $_POST['yourString'];
    echo strtolower($string);
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
    - Exercise 2 :
        Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:
        $sentence = "This is a random sentence";
*/
$sentence = "This is another random sentence";

echo str_replace('random', 'beautiful', $sentence);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
    - Exercise 3 :
    Write a PHP script that displays the last word of a sentence using 2 functions:
        explode () and count ()
    
    You can use the previous sentence to test : $sentence = "This is a random sentence";
    */
$sentence = "This is a random sentence";
$array = explode(' ', $sentence);
$lastPosition = count($array) - 1;
echo $array[$lastPosition];
