<?php

define('RESOURCES', BASEPATH . 'resources/');
include './modules/orm.php';

#START MUTANT
global $blade;
$blade = new Philo\Blade\Blade(RESOURCES . 'views', RESOURCES . '/cache');



function view($view = null, $data = array(), $mergeData = array()){
    global $blade;
    echo $blade->view()->make($view, $data, $mergeData)->render();
}

use Illuminate\Translation\Translator;
use Illuminate\Translation\FileLoader;
use Illuminate\Filesystem\Filesystem;
 
$locale = 'es';
$path = RESOURCES.'/lang';

global $translationLoader;
$translationLoader = new FileLoader(new Filesystem,$path);
global $localiser;
$localiser = new Translator($translationLoader,$locale);

function trans($data){
    global $localiser;
    echo $localiser->get($data);
}

function set_lang($lang){
    global $localiser;
    global $translationLoader;
    $localiser = new Translator($translationLoader,$lang);
}
#END MUTANT