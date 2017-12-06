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
        <form action="finished_blogpost.php" method="POST">
            <h3>Namn</h3>
            <input name="username" type="text"> 
            <h3>Titel</h3>
            <input name="post_title" type="text">
            <select name="category_id">
            <option value="1">watches</option>
            <option value="2">sunglasses</option>
            <option value="3">Interior</option>
          </select>
            <br>
            <br>
            <textarea name="text" rows="10" cols="90"></textarea>
            <br>
            <input type="submit">
        </form>
    </main>
    <footer></footer>
</body>

</html>
