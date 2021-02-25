<?php

include("../class/ClassConexao.php");
include("../class/variaveis.php");
include("../class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB(
    "cadastro",
    "?,?,?,?,?,?",
    array(
        $id,
        $nome,
        $telefone,
        $email,
        $data,
        $endereco
    )
);