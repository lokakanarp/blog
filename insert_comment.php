<?php
header('Location:index.php');
require 'database.php';
$today = date("Y-n-j");

  if(!empty($_POST["text"])) {
        $statement = $pdo->prepare(
        "INSERT INTO comments (text, date, post_id)
        VALUES (:text, :date, :post_id)");
        $statement->execute(array(
        ":text" => $_POST["text"],
        ":date" => $today,
        ":post_id" => $_POST["id"]
        ));
    }