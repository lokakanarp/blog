<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show single blogpost</title>
</head>
<body>
   <?php
    require 'database.php';
    
    $my_single_blogpost = array();
    $statement = $pdo->prepare
        ("SELECT posts.id, 
        users.username, 
        posts.date, 
        posts.text, 
        posts.post_title, 
        categories.title 
        FROM users 
        JOIN posts 
        JOIN categories 
        ON posts.user_id = users.id 
        and posts.category_id = categories.id 
        WHERE posts.id = $_GET[id]");
    $statement->execute();
    $my_single_blogpost = $statement->fetchAll(PDO::FETCH_ASSOC);  
        print_r($_GET);

    foreach($my_single_blogpost as $blogpost){ ?>     
        <p><?= $blogpost['username']?> | <?= $blogpost['date'] ?></p>
        <h2><?= $blogpost['post_title']?></h2>
        <p><?= $blogpost['text']?></p>
        <p><?= $blogpost['title']?></p>
        <p>........................</p>
        <br>
        <a href="edit_blogpost.php?id=<?= $blogpost['id']?>">Edit blogpost</a>
        <a href="delete_blogpost.php?id=<?= $blogpost['id']?>">Delete blogpost</a>
        <br>
    <?php }    
    ?>
     <form action="insert_comment.php" method="POST">
        <h3>Write your comment:</h3>
        <textarea name="text" rows="10" cols="90"></textarea>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <br>
        <input type="submit">
     </form>
     <br>
     <?php
    $my_comments = array();
    $statement = $pdo->prepare
        ("SELECT text, date
        FROM comments 
        WHERE post_id = $_GET[id]");
    $statement->execute();
    $my_comments = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(isset($my_comments[0]['text'])){ ?>
        <h3>Comments</h3> <?php } ?>
        <?php 
    foreach($my_comments as $comment){ ?>
        <p>Written: <?= $comment['date'] ?></p>
        <p><?= $comment['text'] ?></p>

    <?php }         
               
     ?>   
</body>
</html>