<?php
function leia(string $file){
    $abrir=fopen( $file, "r");
    // r abre o arquivo somente para leitura
    $mensagem=fread($abrir, filesize($file));
    fclose($abrir);
    return $mensagem;
    }
     echo leia("Comida.txt")."<br>";
?>