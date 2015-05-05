<?php

define('ELOQUENT', BASEPATH . '/system/config/eloquent.php');
define('ORM', RESOURCES . 'orm/');

function orm($orm_src){
    require ORM . $orm_src;
}