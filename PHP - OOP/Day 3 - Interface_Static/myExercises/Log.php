<?php
class Log
{
    public static $visit;

    public function __construct()
    {
        
    }

    public static function log_info()
    {
        self::$visit = date('d/m/Y H:i:s') . " - Accessing file\r\n";
        if (file_exists('visit_log.txt')) {
            //a appends information as opposed to w which overwrites
            $file = fopen("visit_log.txt", "a");
            //write info into file
            fwrite($file, self::$visit);
            fclose($file);
        } else {
            echo "File doesnt exists!";
        }
    }
}
