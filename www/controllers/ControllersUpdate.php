<?php

include("../class/ClassConexao.php");
include("../class/variaveis.php");
include("../class/ClassCrud.php");
$iduser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
$id = $iduser;

$Crud=new ClassCrud();
$Crud->updateDB(
    "cadastro",
    "nome=?,telefone=?,email=?,data=?,endereco=?",
    "id=?",
    array(
        $nome,
        $telefone,
        $email,
        $data,
        $endereco,
        $id
    )
);

include("../topMensagem.php");
echo"Atualização realizado com sucesso";
include("../bottomMensagem.php");