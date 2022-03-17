<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>EXEMPLO-03</title>
</head>
<body>
<?php

/*
 Primeiro teste, TESTANDO TUDO DE UMA VEZ 
*/


$idade1 = 17;
$idade2 = 20;
$idade3 = 18;
$idade4 = 15;
$hab1 = FALSE;
$hab2 = FALSE;
$hab3 = TRUE;
$hab4 = TRUE;


if($idade1 >= 18 && $hab1){

  echo 'A) Você foi aprovado !';
  echo "<br>";
}
  else {

   echo 'A) Você foi reprovado !';
   echo "<br>";
}

if($idade2 >= 18 && $hab2){
 
  echo 'B) Você foi aprovado !';
  echo "<br>";
}
  else {

   echo 'B) Você foi reprovado !';
   echo "<br>";
}
if($idade3 >= 18 && $hab3){
 
  echo 'C) Você foi aprovado !';
  echo "<br>";
}
  else {

   echo 'C) Você foi reprovado !';
   echo "<br>";
}
if($idade4 >= 18 && $hab4){
 
  echo 'D) Você foi aprovado !';
  echo "<br>";
}
  else {

   echo 'D) Você foi reprovado !';
   echo "<br>";
}
?>

</body>
</html>