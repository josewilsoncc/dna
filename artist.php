<?php

//Total de argumentos: $argc
//echo var_dump($argv);

switch ($argv[0]){
    case '-v':
        $console = "DNA Version: 2015.05.05";
        break;
}

echo $console;