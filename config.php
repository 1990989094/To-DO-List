<?php

const MYSQL_USER = "root";
const MySQL_PASSWORD = "";
const MYSQL_HOST = "localhost";
const MYSQL_DATABASE = "todo";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

$pdo = new PDO(
  'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DATABASE,MYSQL_USER,MySQL_PASSWORD,$options
);