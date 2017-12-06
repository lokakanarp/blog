 <?php
require 'database.php';
          
$my_blogposts = array();
$statement = $pdo->prepare("SELECT posts.id, users.username, posts.date, posts.text, posts.post_title, categories.title FROM users JOIN posts JOIN categories ON posts.user_id = users.id and posts.category_id = categories.id ORDER BY posts.id DESC");
$statement->execute();
$my_blogposts = $statement->fetchAll(PDO::FETCH_ASSOC);  