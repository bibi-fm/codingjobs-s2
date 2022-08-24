<?php
class Log
{
    public static $visit;

    public function __construct()
    {
        
    }

    public static function log_info()
    {
        self::$visit = date('d/m/Y H:i:s') . ' - Accessing file';
        if (file_exists('visit_log.txt')) {
            $file = fopen("visit_log.txt", "a");
            //write info into file
            fwrite($file, self::$visit);
            fclose($file);
        } else {
            echo "File doesnt exists!";
        }
    }
}
