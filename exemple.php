<?php
use \Tutoriel\Autoloader;
use \Tutoriel\Personnage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <?php
    require "./class/Autoloader.php";
    Autoloader::register();
    // $merlin = new Personnage("Merlin");
    // $merlin->regenerer();
    // var_dump($merlin);


    // $harry = new Personnage("Harry");
    // var_dump($harry);

    //     $merlin->attaque($harry, 80);

    // if ($harry->est_mort()) {
    //     echo $harry->getNom() . " est mort !";
    // } else {
    //     echo $harry->getNom() . " a survécu !";
    // }

    $rael1 = new Personnage("Rael1");
    var_dump($rael1);

    $rael2 = new Personnage("Rael2");
    var_dump($rael2);

    $rael3 = new Personnage("Rael3");
    var_dump($rael3);

    $rael4 = new Personnage("Rael4");
    var_dump($rael4);

    $rael5 = new Personnage("Rael5");
    var_dump($rael5);

    var_dump(Personnage::getIdArray());
        
    
    ?>


</body>
</html>