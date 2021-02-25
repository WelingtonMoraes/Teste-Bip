<?php

/*if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }elseif (isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id=0; }
if(isset($_POST['nome'])){$Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);}elseif(isset($_GET['nome'])){ $Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nome=""; }
if(isset($_POST['telefone'])){ $telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['telefone'])){ $telefone=filter_input(INPUT_GET,'telefone',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $telefone=""; }
if(isset($_POST['email'])){ $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['email'])){ $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $email=""; }
if(isset($_POST['nascimento'])){ $nascimento=filter_input(INPUT_POST,'nascimento',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['nascimento'])){ $nascimento=filter_input(INPUT_GET,'nascimento',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $nascimento=""; }
if(isset($_POST['endereco'])){ $endereco=filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['endereco'])){ $endereco=filter_input(INPUT_GET,'endereco',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $endereco=""; }
*/

$id         = 0;
$cidade	    = $dados['results']['city_name'];
$Tempo      = $dados['results']['temp'];
$hora       = $agora;