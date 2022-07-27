<?php
	if (file_exists('../message.txt')) {
		$opened_file = fopen("../message.txt", "r");

		while(!feof($opened_file)) {
			$line = fgets($opened_file);
			echo $line . "<hr>";
		}
        fclose($opened_file);
	} else {
        echo "Sorry. The file doesn't exist";
	}