<?php 
require 'fetch_blogposts.php';
print_r($my_blogposts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lokas blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header></header>
    <main>
       <a href="write_blogpost.php">Write your blogpost</a>
       
       <h1>My blogposts</h1>
    <?php       
        foreach($my_blogposts as $blogpost){ ?>     
           <p><?= $blogpost['username']?> | <?= $blogpost['date'] ?></p>
           <h2><?= $blogpost['post_title']?></h2>
           <p><?= $blogpost['text']?></p>
           <p><?= $blogpost['title']?></p>
           <a href="show_single_blogpost.php?id=<?= $blogpost['id']?>">Continue reading</a>
           <p>........................</p>
        <?} ?>    
       
    </main>
    <footer></footer>
</body>
</html>
