<?php

function buscarCEP(string $cep) {
    if (strlen($cep) !==8) {
        //verifica se o CEP possui 8 caracteres
        return [
            "erro"=>"cep precisa ter 8 caracteres"
        ];
    }
    //pega os dados presente na api
$url = file_get_contents("https://viacep.com.br/ws/01001000/json");

//Descriptografa os dados da api
$dados = json_decode($url, true);

if(isset($dados['erro'])) {
    return [
        "erro"=> "cep não encontrado!"
    ];
}
}





?>