<?php
header('Location:index.php');
require 'database.php';

$id = $_GET['id'];
$statement = $pdo->prepare(
    "DELETE FROM posts 
    WHERE id = :id"
    );
    $statement->execute(array(":id" => $id));