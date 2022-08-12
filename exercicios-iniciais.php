<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
</head>
<body> 
 <h3>Básicos</h3>
  <br>
  <br>
<form name="f_test" method="post" action="">
     
     <div>
       <label>Nome:</label> <input type="text" name="f_Nome" value=" "/>
       <label>Idade:</label><input tyoe="number" name="f_Idade" value=" ">
     </div>
     <div>
       <br>
     <input type="submit" name="Confirmar"/>   
     <input type="reset" name="Cancelar">  
    </div>
    
   </form>
  </fieldset> 
  <hr />
  <fieldset>
</form>
<hr4>




    <font size = "5">
  
  <?php
   echo "<br>";
   echo "<br>";
   echo "<li>"."<b>"."1 Imprimir informações na tela "."<b>";
   echo "<br>";
  ?>
 
 <?php
 echo "Estou aprendendo a usar o PHP";

 echo "<br>";
 echo "<br>";

 echo "<b>"."<li>"."2 Variáveis"."</b>";
 echo "<br>";

 $Nome1 = "Isaac";
 echo "Meu nome é ".$Nome1;
 echo "<br>";

 $Valor1 = 3.700;
 echo "Olha esse número ".$Valor1;

 echo "<br>";
 echo "<br>";

 echo "<b>"."<li>"."3 Operações Matemáticas"."</b>";

 echo "<br>";

 $n1 = 1200;
$n2 = 450.78;
$Soma1 = ($n1 + $n2);
$Soma2 = 87 + 45;
$Multi1 = ($Soma2)*3;
$Sub1 = (422-32);
$Div1 = ($Sub1/100);

echo "Temos os números:"."<br>".$n1." "."<br>".$n2."<br>"."Onde a Soma entre eles é de:"."<br>".$Soma1;

echo "<br>";
echo "<br>";

echo "A soma dos números 87 e 45 é de: ".$Soma2."<br>"."Que multiplicado por 3 é: ".$Multi1;

echo "<br>";
echo "<br>";

echo "A subtração entre os números 422 e 32 é ".$Sub1."<br>"."Se dividirmos esse valor por 100 teremos ".$Div1;

echo "<br>";
echo "<br>";

echo "<b>"."<li>"."4 IF,ELSE e ELSEIF"."</b>";
echo "<br>";
// POST usado para dinamizar esse exercicio.
$Nome2 = filter_input(INPUT_POST, "f_Nome", FILTER_SANITIZE_STRING);
$Idade1 = filter_input(INPUT_POST,"f_Idade", FILTER_SANITIZE_NUMBER_INT);
echo "Olá {$Nome2} ";

echo "<br>";

if($Idade1 >= 18){
 echo "Você tem idade para prosseguir"."<br>";
}
elseif ($Idade1 > 0 && $Idade1 < 18){
 echo "Você não tem idade para prosseguir, feche o site por favor."."<br>";   
}
elseif($Idade1 = 0){
    echo "Você precisa digitar sua idade."."<br>"; 
}

echo "<br>"."<br>"."<br>"."<br>"."<br>";
echo "A tabela de re-ajuste salaria sofreu alterações esse mês."."<br>"."para saber de quanto sera adicionado ao seu salário por favor informe quanto ganha no campo abaixo";
echo "<br>"."<br>"."<br>";


 ?>
</font>

<form name="f_test" method="post" action="">
     
     <div>
       <label>Salário:</label> <input type="float" name="f_Salario" value=" "/>
     </div>
     <div>
       <br>
     <input type="submit" name="Confirmar"/>   
     <input type="reset" name="Cancelar">  
    </div>
    
   </form>
  </fieldset> 
  <hr />
  <fieldset>
</form>
<hr4>
<?php
//Sobre o salário, algo não está funcionado corretamente, mesmo que o resultado der entre o IF e o segundo ELSE_IF, ele puxa pro resultado do segundo ELSE_IF e não para o primeiro
//Por hora vou prosseguir e depois verifico co que tem de errado
$Salario1 = filter_input(INPUT_POST,"f_Salario",FILTER_SANITIZE_NUMBER_FLOAT);
if($Salario1 < 1200.00 && $Idade1 > 0 ){
  $ajuste1=300.00;
  $s_Final=($Salario1+$ajuste1);  
  echo "O seu salário era de: R$ {$Salario1} "."<br>"."Agora se encontra em: R$ {$s_Final}"."<br>";
}
elseif($Salario1 > 1200.00 && $Salario1 < 1600.00){
  $ajuste1=250.00;
  $s_Final=($Salario1+$ajuste1);  
  echo "O seu salário era de: R$ {$Salario1} "."<br>"."Agora se encontra em: R$ {$s_Final}"."<br>";
}
elseif($Salario1 > 1600.00){
    $ajuste1=200.00;
    $s_Final=($Salario1+$ajuste1);  
    echo "O seu salário era de: R$ {$Salario1} "."<br>"."Agora se encontra em: R$ {$s_Final}"."<br>";
  }
else {
    echo "Por favor, digite quanto ganha para pocessarmos."."<br>";
}
?>
<hr4>  
<?php
echo "<br>"."<br>"."<br>"."<br>"."<br>";

?>

<form name="f_test" method="post" action="">
     
     <div>
       <label>Número:</label> <input type="number" name="f_Dia" value=" "/>
     </div>
     <div>
       <br>
     <input type="submit" name="Confirmar"/>   
     <input type="reset" name="Cancelar">  
    </div>
    
   </form>
  </fieldset> 
  <hr />
  <fieldset>
</form>
<hr4>
<?php
$Day1 = filter_input(INPUT_POST,"f_Dia",FILTER_SANITIZE_NUMBER_INT);
switch($Day1){
case 1: 
 echo "Segunda-Feira"."<br>";
break;
case 2: 
 echo "Terça-Feira"."<br>";
break;
case 3: 
 echo "Quarta-Feira"."<br>";
break;
case 4: 
 echo "Quinta-Feira"."<br>";
break;
case 5: 
 echo "Sexta-Feira"."<br>";
break;
case 6: 
 echo "Sabádo-Feira"."<br>";
break;
case 7: 
 echo "Domingo-Feira"."<br>";
break;

}
echo "<br>"."<br>"."<br>";
?>
</fieldset>

</body>
</html>