<?php

$hostname = "localhost";
$username = "root";
$password = "&tec77@info!";
$dbname = "bdviagem";

$mysqli = new mysqli($hostname, $username, $password, $dbname);

if ($mysqli->connect_error) {
    throw new Error("Falha na conexão : (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
}
