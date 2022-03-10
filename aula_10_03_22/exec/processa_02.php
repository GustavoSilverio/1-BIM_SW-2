<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style_02.css">
    <title>First example</title>
</head>
<body> 
    <div class= "processa"> 
<?php

//$num1 = 5;
//$num2 = 10;

$name = $_POST['name'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$soma = $nota1 + $nota2 + $nota3;
$media = $soma / 3;

echo "Ola $name ! , sua média é: $media";
?>
</div>
</body>
</html>
