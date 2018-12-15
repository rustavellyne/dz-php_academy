<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Php_editor</title>
</head>
<body>
    <form action="" method="POST">
        <textarea rows="4" cols="50" name="php_code" title="php_code">
        </textarea>
        <input type="submit">
    </form>

    <?php
       // var_dump((bool)trim($_POST['php_code']));
        if(isset($_POST['php_code']) && trim($_POST['php_code'])) {
            $f = fopen('test.php', 'w');
            fwrite($f, "<?php" . PHP_EOL . $_POST['php_code']);
            fclose($f);
        } else {
            print_r("enter some code pls");
        }
    ?>


    
    <iframe src="./code.php" frameborder="2" name="php_view"></iframe>
</body>
</html>