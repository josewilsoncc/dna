**********************
* Artist for Mutant! *
**********************

<?php

define('DNA', "./vendor/josewilsoncc/dna/");

//Total de argumentos: $argc

switch ($argv[1]){
    case '-v':
        $console = "DNA Version: 2015.05.05";
        break;
    case 'mutate':
        require "./system/config/config.php";
        require DNA.'artist/sql.php';
        break;
}

echo $console;
?>

;)
:*