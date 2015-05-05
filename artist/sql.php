<?php


$config = new config();

$mysqli = new mysqli($config->data['dbhost'], $config->data['dbuser'], $config->data['dbpass']);
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("CREATE DATABASE ".$config->data['dbname'].";")) {
    echo "Falló la creación de la base de datos: (" . $mysqli->errno . ") " . $mysqli->error;
}