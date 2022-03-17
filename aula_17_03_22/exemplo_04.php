<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>EXEMPLO-04</title>
</head>
<body>
<?php

$sigla = "SP";

switch($sigla){
    case "SP":
        echo "Você escolheu São paulo";
        break;

    case "RJ":
        echo "Você escolheu Rio de janeiro";
        break;
    case "MG":    
        echo "Você escolheu Minas gerais";
        break;
    default:
        echo "Você não selecionou nenhuma das siglas disponiveis";
         break;
}


?>

</body>
</html> 