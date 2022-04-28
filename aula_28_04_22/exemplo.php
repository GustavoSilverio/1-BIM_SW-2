<?php
$estado = "SP";

switch ($estado){
    case 'SP':
        echo "Você selecionou SP";
        break;

    case 'RJ':
        echo "Você selecionou RJ";
        break;
    
    default:
        echo "Sigla não encontrada";
        break;
}
?>