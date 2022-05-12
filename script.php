<?php

session_start();

$categorias = [];
$categorias[] = 'NaoApto';
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];


if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
    header( 'Location: index.php');
    return;
}

else if(strlen($nome) < 3) {
$_SESSION['mensagem-de-erro'] = 'Certifique-se de que o campo [nome] foi digitado corretamente. (contendo mais de 2 dois caracteres)';
header( 'Location: index.php');
    return;
}

else if(!is_numeric($idade) || strlen($idade) > 3){
   $_SESSION['mensagem-de-erro'] = 'Certifique-se de que o campo [idade] foi digitado corretamente, (contendo até 3 dígitos e sendo um valor inteiro)';
   header( 'Location: index.php');
   return;
}


    else if($idade <= 5) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'NaoApto'){

            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' não pode competir por ser muito novo, só aceitamos competidores com 6 anos ou mais.';
            header('Location: index.php');
            return;
        }
    }
}
    if($idade >= 6 && $idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Infantil') {
           
         $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria infantil';
         header('Location: index.php');
         return;
        }
    }
}   
    else if($idade >= 13 && $idade <= 17) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Adolescente') {

          $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria Adolescente';
         header('Location: index.php');
         return;
        }
    }
}
    else if($idade >= 18 && $idade <= 80){
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Adulto') {

            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria Adulto';
         header('Location: index.php');
         return;
        }
    }
}   
    else if($idade >= 81) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'Idoso') {

             $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' não pode competir por questões de segurança relacionada a idade do mesmo.';
         header('Location: index.php');
         return;
        }
    }
}
    