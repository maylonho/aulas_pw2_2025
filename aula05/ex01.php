//Crie uma função que verifique se o cidadão pode ou não votar.

<h1>Exericio 1</h1>
<?php


function possoVotar(){
    $idade = 19;
    if($idade >=16 && $idade < 18){
        $mensagem = "Você pode votar, mas não é obrigado!";
    } else if ($idade < 16){
        $mensagem = "Você não pode votar!";
    }
    else{
        $mensagem = "Você é obrigado a votar";
    }

    return $mensagem;
}

echo possoVotar();


?>