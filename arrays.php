1) Crie um array com pelo menos 4 registros e faça um código que adicione uma nova variável ao
fim do array

<?php
$cidades = [
    "0" => "Curitiba",
    "1" => "São Paulo",
    "2" => "Florianópolis",
    "3" => "Salvador"
];
echo "<br>";
array_push($cidades, "Gramado");  // final do array
print_r($cidades);
echo "<hr>";

?>

2) Replique o exemplo acima agora no começo do array

<?php
$cidades = [
    "0" => "Curitiba",
    "1" => "São Paulo",
    "2" => "Florianópolis",
    "3" => "Salvador"
];
echo "<br>";
array_unshift($cidades, "Gramado");  // começo do array
print_r($cidades);
echo "<hr>";
?>

3) Como você faria para se certificar que um determinado valor genérico esteja nos values de um
array? E no key?
<?php
echo "<br>";

$nome1 = ["elvis","maria","jose"];
$nome2 = ["elvis", "jose"];

$diferencas = array_diff($nome1, $nome2);
print_r($diferencas);
echo "<br>";

$cidades = [
    "0" => "Curitiba",
    "1" => "São Paulo",
    "2" => "Florianópolis",
    "3" => "Salvador"
];
if (array_key_exists('3', $cidades)) {
    echo "O elemento 3 existe";
}

echo "<hr>";
?>
4) É possível criar um array com os estados do Brasil e ordenar? Se sim, como seria?

<?php
$estados = [
    
    "Rio Grande do Norte <br>",
    "Amapá <br>",  
    "Bahia <br>", 
    "Ceará <br>" , 
    "Acre <br>", 
    "Distrito Federal <br>" , 
    "Espírito Santo <br>", 
    "Goiás <br>",  
    "Mato Grosso <br>", 
    "Mato Grosso do Sul <br>", 
    "Minas Gerais <br>", 
    "Pará <br>", 
    "Alagoas <br>", 
    "Paraíba <br>", 
    "Paraná <br>", 
    "Pernambuco <br>", 
    "Piauí <br>", 
    "Maranhão <br>",
    "Rio de Janeiro <br>",      
    "Rio Grande do Sul <br>", 
    "Rondônia <br>", 
    "Roraima <br>", 
    "Tocantins <br>",
    "Santa Catarina <br>", 
    "São Paulo <br>", 
    "Sergipe <br>",
    "Amazonas <br>"
];

asort($estados);
foreach ($estados as $est){
    echo "$est";
}

echo "<hr>";
?>