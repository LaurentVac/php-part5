<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 a 4 part 5 php</title>
</head>
<body>
<?php 
     $months = [
         "Janvier",
         "Février",
         "Mars",
         "Avril",
         "Mai",
         "Juin",
         "Juillet",
         "Aout",
         "Septembre",
         "Octobre",
         "Novembre",
         "Décembre",
     ];
     //exo 2
     
     echo $months[2];
     echo "<br/><br/>";
    //  exo 3
     echo $months[5];
     //je remplace dans le tableau $months index 7 , 1 seule valeur 
     array_splice($months,7,1,"Août");
     echo "<br/><br/>";
     echo   print_r($months);
    //  exo 8
    echo "<br/><br/>";
    foreach($months as $element){
        echo $element;
        echo "<br/>";

    };
    ?>

    
</body>
</html>