<?php
header('Location:index.php');
require 'database.php';

print_r($_POST);

$new_post_title = $_POST["new_post_title"];
$new_text = $_POST["new_text"];
$new_category_id = $_POST["new_category_id"];
$id = $_POST["id"];


  if(!empty($_POST["new_post_title"]) && !empty($_POST["new_text"])) {
        $statement = $pdo->prepare(
        "UPDATE posts SET
        post_title = :new_post_title,
        text = :new_text,
        category_id = :new_category_id
        WHERE id = :id"
        );
        $statement->execute(array(
        ":new_post_title" => $new_post_title,
        ":new_text" => $new_text,
        ":new_category_id" => $new_category_id,
        ":id" => $id
        ));
    }