<?php
echo "<fonte size= 4>"."Teste1"."</font>"."<br>";

include("gravar.php");
escreva("Cupcake de morango com calda de morango e granulados coloridos","Comida.txt");
include("ler.php");
$mensagem = leia("Comida.txt");
echo $mensagem;

echo "<br>";
echo "<br>";
echo "<fonte size= 4>"."Teste2"."</font>"."<br>";
require_once("gravar.php");
escreva("Cupcake de morango com calda de morango e granulados coloridos","Comida.txt");

require_once("ler.php");
$mensagem = leia("Comida.txt");
echo $mensagem;
?>
