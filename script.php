<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
;

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3) {
    echo 'O nome não pode ser menor que 3 carácteres';
    return;
}

if(strlen($nome) > 30){
    echo 'O nome não pode ser maior que 30 carácteres';
    return;
}

if(!is_numeric($idade) || strlen($idade) > 3){
    echo 'Informe um número válido no campo [idade]';
    return;
}

if($idade >= 6 && $idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Infantil') {
            echo "O/A nadador(a) ".$nome. " compete na categoria infantil.";
        }
    }
}else if($idade >= 13 && $idade <= 17) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Adolescente') {
            echo "O/A nadador(a) ".$nome. " compete na categoria Adolescente.";  
            }
    }
}
else{
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Adulto') {
            echo "O/A nadador(a) ".$nome. " compete na categoria Adulto.";
        }
    }
}
    