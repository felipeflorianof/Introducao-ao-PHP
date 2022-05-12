<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'NaoApto';
    $categorias[] = 'Idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade < 6)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'NaoApto')
                {
                    setarMensagemSucesso("O nadador ".$nome. " não compete devido a sua idade não fazer parte do nosso rítmo de competição.");
                    return null;
                }  
            }
        }
        if($idade >= 81)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'Idoso')
                {
                    setarMensagemSucesso("O nadador ".$nome. " não compete devido a sua idade avançada.");
                    return null;
                }  
            }
        }
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }  
            }
        }
        else if($idade >= 13 && $idade <= 17)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                } 
            }
        }
        else if($idade >= 18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                } 
            }
        }    
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}