<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
//print_r($categorias);

$nome = 'Felipe';
$idade = 6;
//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Infantil') {
            echo "O nadador ".$nome. " compete na categoria infantil.";
        }
    }
}else if($idade >= 13 && $idade <= 17) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Adolescente') {
            echo "O nadador ".$nome. " compete na categoria Adolescente.";  
            }
    }
}
else if($idade >= 18){
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Adulto') {
            echo "O nadador ".$nome. " compete na categoria Adulto.";
        }
    }
}
    
