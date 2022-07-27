<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
    - Exercise 1 :
        1. Create an HTML form with a text field in a PHP script. The form will point to the same page. DONE
        2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase. DONE
        3. Create a second `submit` button, which displays the string entered in lowercase DONE
	
*/
if (isset($_POST['upper-btn'])) {
    $toUpper = strtoupper($_POST['user-input']);
    echo "<div>" . $toUpper . "</div>";
}
if (isset($_POST['lower-btn'])) {
    $toLower = strtolower($_POST['user-input']);
    echo "<div>" . $toLower . "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="user-input">
        <button type="submit" name="upper-btn">UpperCase</button>
        <button type="submit" name="lower-btn">LowerCase</button>
    </form>
</body>

</html>

<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
    - Exercise 2 :
        Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:
        $sentence = "This is a random sentence"; DONE
*/
$sentence = "This is a random sentence.";
$sentenceArray = explode(' ', $sentence);
//var_dump($sentenceArray) ;
$sentenceArray[3] = "beautiful";
//var_dump($sentenceArray);
$newSentence = implode(' ', $sentenceArray);
echo $newSentence;
?>


<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
    - Exercise 3 : DONE
    Write a PHP script that displays the last word of a sentence using 2 functions:
        explode () and count ()
    
    You can use the previous sentence to test : $sentence = "This is a random sentence";
    */
$sentence = "This is a random sentence";
$wordArr = explode(' ', $sentence); 
$len = count($wordArr);
echo $wordArr[$len-1];

//echo "$len <br>";
//var_dump($wordArr);
?>