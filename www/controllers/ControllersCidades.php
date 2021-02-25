<?php
include("../class/ClassConexao.php");
include("../class/variaveis.php");
include("../class/ClassCrud.php");
include("../class/ClassCidades.php");

$cidadeName = $_POST["query"];
$key = 'c0aff712';

if(empty($cidadeName))
{
    $cidades = array('Curitiba','Londrina','Rio de Janeiro','Campinas','São Paulo');

    foreach($cidades as $cidade){

        $ClassCidade = new ClassCidade;
        $output = $ClassCidade->retornaCidade($cidade, $key);

        echo $output;
    }
}
else
{
    $dados = json_decode(file_get_contents('http://api.hgbrasil.com/weather/?key='.$key.'&city_name='.$cidadeName), true); // Recebe os dados da API
    
    if($dados['results']['city_name'] == $cidadeName){

        $ClassCidade = new ClassCidade;
        $output = $ClassCidade->retornaCidade($cidadeName, $key);

        echo $output;
    }
}