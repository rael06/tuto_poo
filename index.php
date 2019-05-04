<?php
use \Tutoriel\HTML\BootstrapForm;

use \Tutoriel\Autoloader;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
    require "./class/Autoloader.php";
    Autoloader::register();
    
    $form = new BootstrapForm($_POST);
    
    ?>
    <form action="" method="POST">
        <?php
        echo $form->input("username");
        echo $form->input("password");
        ?>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    var_dump($form->getData());
    ?>

</body>
</html>
<?php

