<?php
$today = date("Y-n-j");
$my_name = array();
    if(!empty($_POST["username"])){
        $statement = $pdo->prepare(
        'SELECT users.id FROM users WHERE username ="' . $_POST['username'] . '"' 
        ); 
        $statement->execute();
        $my_name = $statement->fetchAll(PDO::FETCH_ASSOC);
    }


  if(!empty($_POST["post_title"]) && !empty($_POST["text"])) {
        $statement = $pdo->prepare(
        "INSERT INTO posts (post_title, text, category_id, date, user_id)
        VALUES (:post_title, :text, :category_id, :date, :user_id)");
        $statement->execute(array(
        ":post_title" => $_POST["post_title"],
        ":text" => $_POST["text"],
        ":category_id" => $_POST["category_id"],
        ":date" => $today,
        ":user_id" => $my_name[0]["id"]
        ));
    }