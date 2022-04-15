<?php
require "config.php";

$pdo_statement =  $pdo->prepare("DELETE FROM todo WHERE id=".$_GET['id']);
$pdo_statement->execute();

header("Location: index.php");

?>