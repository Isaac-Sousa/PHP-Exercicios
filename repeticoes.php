!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Laços de repetição</h3>
    <br>
    <h1>While, DoWhile e For </h1>
   <?php

   $indice = 0;
   while ($indice < 20){
       echo "<font size = 5 >"."O valor do índice é: ".$indice."<br>"."</font>";
       $indice++; }

  Do{
   echo "<font size = 5 >"."Continue a nadar"."<br>"."</font>";
   $indice++; 

   } 

while($indice < 30);

for($i = 0; $i < 25; $i++ ){
 echo $i." Indiozinho";

}



?>
</body>
</html>



