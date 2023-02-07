<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\styles.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php require_once("require_files\header.php")?>
    </header>

    <div class="background-main-content">
        <main>
            <h1>Blogs</h1>
            <p>View & post blogs here</p>
            <form action="backend\blogController.php" method="post">
                    <label for="name">name:</label>
                    <input type="text" name="name" id="name">
                    <label for="content">Message:</label>
                    <textarea name="content" id="content" cols="30" rows="10"></textarea>

                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">
            </form>

            <?php
                echo file_get_contents("backend/blogController.txt");
            ?>
        </main>        
    </div>
</body>
</html>