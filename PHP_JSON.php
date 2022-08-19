
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo JSON</title>
</head>
<body>
    <!--
    // e /**/-> São representações de comentarios
    /*JSON, o que é? O que faz? e como posso usar com php?
    JSON é a abreviação para JavaScript Object Notation, sendo um mecanimos para transporte de informações que vem sucedendo o XML que se encontra em desuso no 
    mercado por ser complexo e pesado.
    Tipos de valores: STRING, BOOLEAN, INT, FLOAT, DOUBLE, ARRAYs E NULL 
    Seguindo para as sintaxes, como um objeto iniciaremos um JSON da seguinte forma:
    */
    //abertura da chave do JSON
    { 
     "firstname":"Sousa",
     "lastname" : "Olimpicus"
    // chave de identificação -> "firstname"
    // Os dois pontos é uma representação de atribuição
    // valor identificado pela chave -> "Sousa"
    }
    //fechamento da chave do JSON
    /*
    Agora como transformar um array em um JSON:
    */
     -->
   <?php
   //array para json
    $arrayFilme = array(
            "titulo"=>"Moby Dick",
            "sinopse"=>"Uma fera do mar e bravos marinheiros",
            "ano"=>2023,
            "horarios"=> array (
            "08:00",
            "10:00",
            "12:00")
        );
    $jsonStr = json_encode($arrayFilme);
    echo $jsonStr."<br>";
     //json para array
     $jsonStr2 = '{"titulo":"HellHide","sinopse":"Um motoqueiro do inferno","ano":2025,"horarios":["16:00","18:00","20:00"]}';
     $arrayF2 = json_decode($jsonStr2);
     echo "<br><br>";
     echo "<br><br>";
     var_dump($arrayF2);
     echo "<br><br>";
     print_r($arrayF2);
     echo "<br><br>";
    
     $cep = "60360-401";
     $str = file_get_contents("https://ws.apicep.com/cep.json?code=".$cep);
     echo $str."<br><br>";
     $arrCity = json_decode($str);
     var_dump($arrCity);
     echo "<br><br>";
     print_r($arrCity);
     echo "<br><br>";
    

   /*
    foreach($arrayF2 as $num){
        echo $num."<br>";

    };
    */


   ?>




</body>
</html>
