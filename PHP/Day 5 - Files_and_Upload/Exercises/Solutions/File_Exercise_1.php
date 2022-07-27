<?php

if (file_exists('message.txt')) {
    $file_handle = fopen('message.txt', 'r');

    while (!feof($file_handle)) {
        $current_line = fgets($file_handle);
        echo $current_line . '<hr>';
    }

    fclose($file_handle);
} else {
    echo 'File doesnts exists';
}
