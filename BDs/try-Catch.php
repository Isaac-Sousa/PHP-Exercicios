<?php
require_once('conectar_BD.php');
try{
    AbrirConexao();
}catch(PDOExecption $ex){
    echo "<b>Mensagem:</b> ".$ex->getMessage()."<br>";
    echo "<b>Linha:</b> ".$ex->getLine()."<br>";
    echo "<b>Arquivo:</b> ".$ex->getFile()."<br>";
}