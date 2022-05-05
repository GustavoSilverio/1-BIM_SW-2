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

//
    $numero = $_POST['num'];
    $resultado = 1;
    for($cont = $numero; $cont >=1; $cont--){
        $resultado *= $cont; 
        echo " contador ==> $cont <br>";
        echo "resultado ==> $resultado <br><br>";
    }

    echo "O resultado final é : $resultado";

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