<?php
echo "<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

body {
    text-align: center;
    background-color: black;
    color: white;
    margin-top: 20%;
}

* {
    font-family: 'Poppins', sans-serif;
    font-weight: bolder;
}</style>";

    $numero = $_POST['num'];
    
    for($cont = 1; $cont <=10; $cont++){
        $resultado = $numero * $cont;
        echo "$numero * $cont = $resultado <br>";
    }

    /* POTENCIALIZAR UM NUMERO: numero x numero x numero 
    $cubo = pow($numero, 3);
    */
    
/*
    for($cont = $numero; $cont <= $cubo; $cont++){
        //echo $cont;
        //echo "<br>";    
    }
*/
    //Exemplo para identificar números ímpares !!!
    
/*
     $abacaxi = 10;
     $resto = ($abacaxi % 2);
     echo $resto;
*/

?>