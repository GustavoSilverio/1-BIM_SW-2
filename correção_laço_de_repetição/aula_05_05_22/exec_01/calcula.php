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
    $cubo = pow($numero, 3);
    /*for($cont = $numero; $cont <= $cubo; $cont++){
        //echo $cont;
        //echo "<br>";    
    }
*/
    $cubo_imp = $cubo % 2;
    for($cont = $numero; $cont <= $cubo_imp; $cont++){
        echo "$cont <br>";    
    }
    
?>