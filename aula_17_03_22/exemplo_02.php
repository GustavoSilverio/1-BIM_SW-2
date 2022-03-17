<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>EXEMPLO-02</title>
</head>
<body>
<?php

$nota = 5.0;

//deseja-se imprimir APROVADO se a nota do aluno for maior que 5
// ou REPROVADO se for menor que 5

if ($nota>6){
    //comandos SE verdadeiro 
  echo "APROVADO";
}
elseif($nota<5){
    //comando SE FALSO
  echo "REPROVADO";
}

else{
  echo "RECUPERAÇÃO";
}

?>
</body>
</html>