<?php

// guested number from 0 to 100


define('MAX_NUMBER', 100);
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

     while ($guessNumber != $yourNumber)  { 
          if ($yourNumber < $gueessNumber) { ?>
           <p> Hadane cislo: <?= $yourNumber ?> Musi byt vestsi </p>

          <?php
          } else { ?>
               <p> Hadane cislo: <?= $yourNumber ?> Musi byt mensi </p>
         <?php } 
            $yourNumber = rand(MIN_NUMBER, MAX_NUMBER);    
     }
     ?>

     <p>Gratulujeme, uhadl jsi cislo gueessNumber <?= $guessNumber ?> svym hadanym cislem <?= $yourNumber ?></p>
     
</body>
</html>