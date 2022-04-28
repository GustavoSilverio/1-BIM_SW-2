<?php

$nomes = ["MeNgÂo", "VaScO", "BoTa - FoGo"];
/*
echo $nomes [0];
echo "<br>";
echo $nomes [1];
echo "<br>";
echo $nomes [2]
*/
$indice = 0;
for($indice = 0; $indice < 3; $indice++){
    // echo "$nomes[$indice] <br>";
    echo ($indice + 1). "º $nomes[$indice] <br>";
}
?>