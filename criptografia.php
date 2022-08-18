<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criptografias</title>
 </head>
 <body>
 <?php
//metodo casual
$senha ="Sousa2121";
echo "Tipos de Criptografia: "."<br>";
echo "<br>";
$criptoSHA1 = sha1($senha);
$criptoMD5 = md5($senha);
$criptoB64 = base64_encode($senha);
echo  "SHA1: "."<br>".$criptoSHA1."<br>";
echo "<br>";
echo  "MD5: "."<br>".$criptoMD5."<br>";
echo "<br>";
echo  "Base64: "."<br>".$criptoB64."<br>";
echo "<br>";
$descriptoB64 = base64_decode($criptoB64);
echo "Descriptografando Base64: "."<br>".$descriptoB64."<br>";
?>

<br>
<br>
<form name="f_cripto" method="post" action=" ">
 <fieldset>
  <Label>Informes seu nome e a sua senha que criptografar</Label><br>
   <div>
  <label>Nome :</label> <input type="text" name="f_nome" value=" "/>
   </div>
  <br>
   <div>
  <label>Senha :</label> <input type="password" name="f_senha" value=""/> <br>
   </div>
   <br>
  <input type="submit" name="Confirmar"/>
 </fieldset>
</form>
 <?php
 $nome1=filter_input(INPUT_POST,"f_nome",FILTER_SANITIZE_STRING) ;
 $senha2=filter_input(INPUT_POST,"f_senha");
 echo "<font size= 3>"."<b>"."Olá ".$nome1." veja os resultados de criptografias de sua senha: "."</b>"."<br>"; 
 echo "<li>"."Senha criptografada em SHA1 "."<br>";
 $sha1 = sha1($senha2);
 echo $sha1."<br><br>";
 echo "<li>"."Senha criptografada em MD5 "."<br>";
 $md5 = md5($senha2);
 echo $md5."<br><br>";
 echo "<li>"."Senha criptografada em BASE64 "."<br>";
 $base64EN = base64_encode($senha2);
 echo $base64EN."<br><br>";
 echo "<li>"."Senha criptografada em Bcrypt "."<br>";
 $hash = password_hash($senha2,PASSWORD_BCRYPT,array('cost'=>10));
 echo $hash."<br><br>";
 echo "<font size= 3>"."<b>"."Caso deseje, é possível descriptografar sua na BASE64: "."<br>"; 
 $base64DE = base64_decode($base64EN);
 echo $base64DE."<br><br>";
 ?>

 </body>
</html>
