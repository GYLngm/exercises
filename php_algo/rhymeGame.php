<?php

    require_once("phpAlgoBasic.php");

    $phpalgo = new phpAlgoBasic();
    while(true)
    {
        echo "Enter your word: ";
        $handle = fopen("php://stdin","r");
        $line = trim(strtolower(fgets($handle,4096)));
        if($line == '' || strlen($line) < 1){
            echo "No word entered!".PHP_EOL;
            continue;
        } 
        if($line == "end;")
        {
            echo "I quit!";
            break;
        }

        echo "------------------------------------------------------";
        echo PHP_EOL."start with <$line>: ".PHP_EOL;
        $phpalgo->jeuxDeRime($line);
        echo "--------------------END TOUR--------------------------------".PHP_EOL;
        fclose($handle);
    }
?>