<?php

// guested number from 0 to 10

define('MAX_NUMBER', 10);
define('MIN_NUMBER', 0);

$guessNumber = rand(MIN_NUMBER, MAX_NUMBER);

$yourNumber = 0; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
      <body>
     <p> Hadej cislo mezi <?= MIN_NUMBER ?> - <?= MAX_NUMBER ?></p>


    <!-- <p>Hadam, ze je cislo: <?= $yourNumber ?></p> -->

     <?php
/*
     if($guessNumber == $yourNumber) { ?>
         <p> Uhadl jsi!</p>
<?php
     } else {  ?>
          <p> Vedle jak to jedle ! </p>
    <?php }
*/

     while ($guessNumber != $yourNumber)  { ?>
           <p> Tve cislo: <?= $yourNumber ?> neni spravne. Zkus jine. </p> 
     <?php      
          if ($yourNumber > $guessNumber) {
               echo "Tve cislo neni spravne. Je mensi nez hadane cislo.";
          }  
          elseif ($yourNumber < $guessNumber) {
               echo "Tve cislo neni spravne. Je vetsi nez hadane cislo.";
          }

            $yourNumber = rand(MIN_NUMBER, MAX_NUMBER);    
     }
     ?>

     <p>Gratulujeme, uhadl jsi cislo <?= $guessNumber ?> </p>

      </body>
</html>