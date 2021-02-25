<?php

include("../class/ClassConexao.php");
include("../class/ClassCrud.php");

$Crud=new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "cadastro",
    "id=?",
    array(
       $IdUser
    )
);

echo'<script language="javascript" type="text/javascript">window.location.href="../selecao.php";</script>';