<?php
function escreva(string $mensagem, string $file) {
    //acima o $file vai definir o arquivo
  $abrir=fopen( $file,"a+" );
  // a+ abre o arquivo para leitura e editar, coloca o ponteiro no inicio do arquivo e seo arquivo não existir tenta cria-lo
  fwrite($abrir,"{$mensagem}  <br>\r\n ");
  //OBS: O <br> está aparecendo no arquivo
  fclose($abrir);
}
escreva("Cupcake de morango com calda de morango e granulados coloridos","Comida.txt");


?>