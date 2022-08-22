<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Direcionamento</h1>
    <?php
date_default_timezone_set('America/Fortaleza');
// mudar de arquivo depois, data e hora com if else
 echo "<font size= 5>"."<b>"."<li>"."Data e Hora"."</b>"."</font>"."<br>";
echo date("d/m/Y")."<br>";
echo date("F, d, Y")."<br>";
echo date("H:i:s")."<br>";
$hora = date("H");
//echo $hora;
if($hora > 0 && $hora <=6){
echo "Boa madrugada, ainda são {$hora} horas "."<br>";
}
elseif($hora > 6 && $hora <= 12){
        echo "Bom dia, já são {$hora} horas"."<br>";
}
elseif($hora > 12 && $hora <= 18) {
        echo "Boa tarde, são {$hora} horas"."<br>";
}
else{
        echo "Boa noite, são {$hora} horas"."<br>";
}

echo "<br>";
echo "<br>";
echo "<font size= 5>"."<b>"."<li>"."Lendo e Gravar em TXT"."</b>"."</font>"."<br>";

//crie uma funcao para facilitar
function escreva(string $mensagem, string $file) {
    //acima o $file vai definir o arquivo
  $abrir=fopen( $file,"a+" );
  // a+ abre o arquivo para leitura e editar, coloca o ponteiro no inicio do arquivo e seo arquivo não existir tenta cria-lo
  fwrite($abrir,"{$mensagem}  <br>\r\n ");
  //OBS: O <br> está aparecendo no arquivo
  fclose($abrir);
}
escreva("Precisaremos de tijolos, cimento e areia","Materiais.txt");

function leia(string $file){
$abrir=fopen( $file, "r");
// r abre o arquivo somente para leitura
$mensagem=fread($abrir, filesize($file));
fclose($abrir);
return $mensagem;
}
 echo leia("Materiais.txt")."<br>";
 echo "<br><br>";

?>
<!--
        Esse formulário será usado para CRUD de COOKIE
-->
<br><br>
 <form name="f_cripto" method="post" action=" ">
 <fieldset>
  <Label>Informe um número inteiro, de 1 á 4.</Label><br>
   <div>
  <label>Digite aqui :</label> <input type="number" name="f_switch" value=" "/>
   </div>
   <br>
  <input type="submit" name="Confirmar"/>
 </fieldset>
</form>
 <?php
 $biscoito = filter_input(INPUT_POST,"f_switch",FILTER_SANITIZE_NUMBER_INT);
 function Criar() {
    echo "Criando";
    setcookie("cup","Cupcake",time()+100);
 }
 function Ler(){
    //echo $_COOKIE("CK");
    echo filter_input(INPUT_COOKIE, "cup", FILTER_SANITIZE_STRING);
 }
 function Alterar(){
    echo "Alterando";
    setcookie("cup","Moranguinho");
 }
 function Deletar(){
   echo "Deletando";
   setcookie("cup","Cupcake",time()-1);
 }

 switch($biscoito){
 case 1: 
    Criar();
 break;
 case 2:
    Ler();
 break;
 case 3:
    Alterar();
 break;   
 case 4:
    Deletar();
 break;
 default:
  echo "Escolha um número válido por favor"; 
 }
 session_start();
 $_SESSION["chave"] = "Boy, tu é lindo boy";
 echo $_SESSION["chave"];
 //session_destroy() irá destruir o aquivo temporario da SESSION

 ?>
</body>
</html>





