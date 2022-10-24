1) Se você fosse um programador na época da troca do método de cálculo da bomba de gasolina
de 3 dígitos para 2, como você provavelmente teria o código antes e depois?
<?php
echo "<br>";
$preco = 4.959;


echo "<hr>";
?>
2) Formate o número 31 3273 9 83.5 como se fosse um dinheiro do Brasil
<?php
echo "<br>";
$n = 313273983.5;
echo number_format($n,2,',','.');  //ele formata da direita pra esquerda

echo "<hr>";
?>
3) Formate o número 99333639.51 como se fosse dólar
<?php
echo "<br>";
echo number_format($n,2,'.',',');

echo "<hr>";
?>
4) Crie uma função que diga se o número é par ou ímpar
<?php
echo "<br>";

function parImpar($n){
    if($n % 2 == 0){  //se o resto da divisão entre $n e 2 for 0 , $n é par
        echo "$n é um número par";
    }
    else{
        echo "$n é um número impar";
    }
}
echo parImpar(5);

echo "<hr>";
?>
5) Faça uma função que receba um int, faça a raiz quadrada dele e arredonde para baixo.
<?php
echo "<br>";
$num = 10;
function raizQuadrada($n){
    $res= sqrt($n); //precisei criar um variavel para salvar o resultado
    return floor($res); //com o resultado salvo é só usar o floor
}
echo (raizQuadrada($num));


echo "<hr>";
?>