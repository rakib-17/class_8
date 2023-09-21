<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAW PHP</title>
</head>
<body>
    <form action="./controller/prcessing.php" method="POST">
        <input type="text" placeholder="Post Title" name="title"> <br><br>
            <?php
                echo isset($_SESSION['title_error']) ? $_SESSION['title_error']:"";
            ?>
        <textarea cols="30" rows="5" placeholder="Post Description" name="description"></textarea> <br><br>
            <?php
                echo isset($_SESSION['description_error']) ? $_SESSION['description_error']:"";
            ?>
        <input type="text" placeholder="Post Author" name="author"> <br><br>
            <?php
                echo isset($_SESSION['author_error']) ? $_SESSION['author_error']:"";
            ?>
        <button type="submit">Add New Post</button>
    </form>
</body>
</html>

<?php
    session_unset();
?>