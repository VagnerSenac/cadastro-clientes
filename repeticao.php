<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
<h1> Repetição </h1>
<?php
$contador = 1;
while($contador <= 10){
    echo "contador com while loop numero $contador <br>";
    //$contador = $contador + 1;
    $contador++;
}

echo "<br>";
//Array
$clientes = ["Vagner", "Cleyton", "Pedro", "Andrea", "Ana", "Maria"];
$contador = 0;
while($contador <= 5){
    echo "$clientes[$contador]<br>";
    $contador++;
}





    ?>
</body>
</html>