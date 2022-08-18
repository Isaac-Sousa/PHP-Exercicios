<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>    
<body>
<br>    
<br>

<!--Primeiro exercicio -->
<?php
$a_Componentes = ["Mouse","Teclado","Monitor","Gabinete","Estabilizador","Caixa de som"];
echo $a_Componentes[1]."<br>";
echo $a_Componentes[3]."<br>";
echo "<br>";
for($i = 0; $i < count($a_Componentes);$i++){
echo $i." ".$a_Componentes[$i]."<br>";
}
?>
<br>

<!--Segundo exercicio -->
<?php
$a_Funcionarios = ["Eduardo","Ramiro","Israel","Lucas","Mari","Ingrid"];
foreach ($a_Funcionarios as $n_Funcionarios){
echo "<li>"."Funcionario: {$n_Funcionarios}"."<br>";

}
?>
<br>

<!--Terceiro exercicio -->
<?php
$a_Modelos = [
 1 => "Volksavagem",
 2 => "Fiat",
 3 => "Ferrari",
 4 => "Lamborgini",
 5 => "Chevrolet",
];
foreach($a_Modelos as $carro => $marca){
echo "O carro {$carro} é da marca {$marca}"."<br>";
}
?>

<br>
<!-- fincionamento incompleto. 
<form name="Modelos" action="#" method="get">
<label>Escolha uma marca</label> <select>

 <option value="<? =$marca--;?>"><?=$carro?></option>

</select>
</form>
-->



<br>
<!--Quarto exercicio -->
<?php
$a_Transporte = ["Carro","Moto","Avião","Ônibus","Metro","Bicicleta","Balsa"];
?>
<form name="Form" action="#" method="get">
    <fieldset>
<label>Escolha um meio de transporte</label> <select>
        <?php
        for($i=0;$i <count($a_Transporte);$i++){
?>
<option value="<?=$i;?>"><?=$a_Transporte[$i]?></option>
<?php
        }
?>
</fieldset>
</form>
</body>
</html>