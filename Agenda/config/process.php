<?php

include_once("config/conection.php");
include_once("config/url.php");

session_start();

$contacts = [];

$query = "SELECT * FROM contacts";
$stmt = $conn ->prepare($query);

$stmt ->execute();

$contacts  = $stmt -> fetchAll();