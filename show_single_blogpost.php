<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    require 'database.php';
    
$my_single_blogpost = array();
$statement = $pdo->prepare("SELECT posts.id, users.username, posts.date, posts.text, posts.post_title, categories.title FROM users JOIN posts JOIN categories ON posts.user_id = users.id and posts.category_id = categories.id WHERE posts.id = $_GET[id]");
$statement->execute();
$my_single_blogpost = $statement->fetchAll(PDO::FETCH_ASSOC);  
    print_r($_GET);
          
foreach($my_single_blogpost as $blogpost){ ?>     
    <p><?= $blogpost['username']?> | <?= $blogpost['date'] ?></p>
    <h2><?= $blogpost['post_title']?></h2>
    <p><?= $blogpost['text']?></p>
    <p><?= $blogpost['title']?></p>
    <p>........................</p>
    <a href="edit_blogpost.php?id=<?= $blogpost['id']?>">Edit blogpost</a>
    <a href="delete_blogpost.php?id=<?= $blogpost['id']?>">Delete blogpost</a>
<?php }    
?>
</body>
</html>