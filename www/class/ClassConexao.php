<?php

abstract class ClassConexao
{
   
    //conexao com o BD
    protected function conectaDB()
    {
        try
        {
            $con=new PDO("mysql:host=localhost:8080;dbname=teste","root","root");
            return $con;
        }
        catch (PDOException $Erro)
        {
            return $Erro->getMessage();
        }
    }
}