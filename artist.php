**********************
* Artist for Mutant! *
**********************

<?php

define('DNA', BASEPATH."vendor/josewilsoncc/dna/");

//Total de argumentos: $argc

switch ($argv[1]){
    case '-v':
        $console = "DNA Version: 2015.05.05";
        break;
    case 'mutate':
        require DNA.'artist/sql.php';
        break;
}

echo $console;
?>

;)
:*