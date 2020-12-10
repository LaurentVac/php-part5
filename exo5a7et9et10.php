<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5 a 7,9,10 part 5 php</title>
</head>
<body>
<?php 
// je creer un tableau les clefs sont le bnumédes département est le valeur le noms
     $hautDeFrance = [
         "59" => "Nord",
         "62" => "Pas-de-Calais",
         "80" => "Somme",
         "02" => "Aisne",
         "60" => "Oise"
     ];
// exo 6
      
      echo "Le département 59 est : ". $hautDeFrance[59];
      //exo 7
      echo "<br/><br/>";
      $hautDeFrance[51] = "Marne";
      echo $hautDeFrance[51];
      echo "<br/>";
      print_r($hautDeFrance);
      echo "<br/><br/>";
    //   exo 9 
    //boucle qui affiche les valeur du tableau
    foreach($hautDeFrance as $element){
        echo $element;
        echo "<br/>";
    }
    echo "<br/><br/>";
    //exo 10
    foreach($hautDeFrance as $clef => $valeur){
        echo "Le département " .$clef. " a le numéro " .$valeur;
        echo "<br/>";

    }


    ?>

    
</body>
</html>



