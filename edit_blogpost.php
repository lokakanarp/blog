<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="new_insert_blogpost.php" method="POST">
         <h3>Namn</h3>
          <input name="username" type="text">
         <h3>Titel</h3>
          <input name="new_post_title" type="text">
          <select name="new_category_id">
                <option value="1">watches</option>
                <option value="2">sunglasses</option>
                <option value="3">Interior</option>
          </select>
          <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
          <br>
          <br>
          <textarea name="new_text" rows="10" cols="90"></textarea>
          <br>
          <input type="submit">
        </form>
    </main>
    
</body>
</html>