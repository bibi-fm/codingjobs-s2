<?php

/*
- Exception : 
An exception is a unexpected result that
can be handle by the script.

For example : you try to open a file,
but this file doesn't exists.

This exception can be handle by either
creating the file or you can give the user
an option to look for the file.

Exceptions must be handle by the dev.
Exceptions are handled in a Object Oriented way.

When an exception is thrown, an 'Exception' object is created.
An Exception Object contains some details.
It have some methods : getMessage(), getCode(), toString....

Syntax :
    throw new Exception('This is an exception')

'throw' allow to trigger an exception
'new' create an instance of an exception


You have to catch an exception using try....catch {}
*/

class DivideByNegativeException extends Exception
{
}

class DivideByZeroException extends Exception
{
}



function multiply($x, $y)
{
    if ($y < 0)
        throw new DivideByNegativeException('Negative numbers are not allowed');
    else if ($y == 0)
        throw new DivideByZeroException('Divide by zero is forbidden');
    else
        echo $x * $y;
}

try {
    multiply(5, 0);
    echo 'Helloooooo !';
} catch (DivideByZeroException  $e) {
    // echo $e->getMessage();
    echo 'Zero exception catched';
} catch (DivideByNegativeException  $e) {
    echo $e->getMessage();
}
