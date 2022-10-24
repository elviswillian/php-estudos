Em um determinado código, você tem dois arrays que recebem nomes de cidade em vários estados
diferentes.
Sua tarefa é organizar uma função que recebe dois ou mais arrays, pesquisa se há cidades com o
mesmo nome e salva em uma variável a parte.
Junta todos os arrays em um só e imprime de modo ordenado alfabético
#juntar todos e imprimir sem repetir

<?php
echo "<br>";
echo "<br>";

    $cidades1 = [
        "Curitiba",
        "São Paulo",
        "Florianópolis",
        "Salvador",
        "Bombinhas",
        "Hortolândia",
        "Sumaré",
        "Minas Gerais"
    ];
    $cidades2 = [
        "Salvador", 
        "Colombo",
        "Bocaiúva",
        "São Paulo",
        "Florianópolis",
        "Curitiba",
        "Londrina",
        "Bombinhas"
    ];
    
    $cidades = array_merge($cidades1, $cidades2);
    asort($cidades);

    function juntar($c1){
       return   array_unique($c1);

    };

    print_r( juntar($cidades));

?>