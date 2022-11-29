<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes </h1>
    <?php

    $nome = "Vagner";
    $idade = 41;
    $fumante = false;
    echo "<p> ID Cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p>" ;
    /*
OPERADORES ARITIMÉTICOS 

- + : adição
- - : operador de subtração
- *: operador de multiplicação
- /: operador de divisão
- **: exponenciação
- % : resto da divisão, operador de módulo
*/
echo 20 * 3;
echo "<br>";

/* 
OPERADORES RELACIONAIS

==	Igual a
!=	Diferente de
===	Idêntico a (valores iguais e do mesmo tipo)
!==	Não idêntico a
>	Maior do que
>=	Maior ou igual a
<	Menor do que
<=	Menor ou igual a
*/
echo 20 > 10;
echo "<br>";

/*
OPERADORES LÓGICOS

&&(e)    and(e) – O resultado verdadeiro só será obtido quando ambos dos dados comparados forem verdadeiros.
||(ou)   or(ou) – O resultado verdadeiro só será obtido quando pelo menos um dos dados comparados for verdadeiro.
xor – O resultado verdadeiro só será obtido quando pelo menos um dos dados comparados for verdadeiro, mas não ambos.
!(não) – O resultado verdadeiro só será obtido se o valor dado não for verdadeiro.
*/

echo "operadores lógico";
!$fumante = false;
echo $fumante;

// ##Estrutura de decisão
// ### IF

$idade = 78;
if ($idade >= 18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa </p>";
}else if($idade >= 70){
    echo "<p>Pessoas acima de 70 não entra na festa</p>";
}else{

   echo "<p>Você foi barrado</p>";
}


$nota = 3;
if($nota >= 8){
    echo "<p>Aprovado</p>";
}else if($nota >= 5){
    echo "<p>Recuperação</p>";
}else{
    echo "<p>Reprovado</p>";
}

$idade = 10;
echo ($idade >= 18)? "pode entrar" : "rejeitado";


$cor = "verde";
switch ($cor) {
    case 'azul':
        echo "<p>sua cor favorita é azul</p>";
        break;
    case 'verde':
        echo "<p>sua cor favorita é verde</p>";
        break;
    case 'vermelho':
        echo "<p>sua cor favorita é vermelho</p>";
        break;
    default:
    echo "<p>sua cor favorita não é verde, azul ou vermelho</p>";
        break;
}

$dia = 7;
switch ($dia) {
    case 1 :
    echo "Domindo";
    break;
    case 2 :
    echo "Segunda";
    break;
    case 3 :
    echo "Terça";
    break;
    case 4 :
    echo "Quarta";
    break;
    case 5 :
    echo "Quinta";
    break;
    case 6 :
    echo "Sexta";
    break;
    case 7 :
    echo "Sábado";
    break;
    default:
    echo "dia inválido";
    break;
}




    
?>
</body>
</html>