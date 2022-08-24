<?php

class Log
{
    public static function save_log()
    {
        $file_handle = fopen('last_access.txt', 'a');
        $data = date('d/m/Y H:i:s') . " - Accessing file\r\n";
        fwrite($file_handle, $data);
        fclose($file_handle);

        echo 'Last access was saved into the file';
    }
}
