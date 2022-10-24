<!DOCTYPE html>
<html>
    <?php  //1
    $nome = "Elvis";
    $sobrenome = "Willian";
    $idade = 26;

    echo "$nome <br> $sobrenome <br> $idade <hr>";
    ?>

    <?php //2
    for ($i=0; $i <= 100; $i+=2) {
    echo "$i ,";
    }
    echo "<hr>"
    ?>

    <?php //3
    for ($i=1; $i <= 100; $i+=2) {
        echo "$i ,";
    }
    echo "<hr>"
    ?>

    <?php //4
    $dados = array ("Elvis", "Willian", "26");

    foreach($dados as $d) {
        echo "$d ";

    }
    echo "<hr>"
    ?>

    <?php //5
    $nome = "Elvis";
    $idade  = 26;

    echo "Meu nome é $nome e tenho $idade anos";
    echo "<hr>"
    ?>

    <?php  //6 

    $cidades = array("Curitiba", "Ponta-Grossa", "Cascavel", "Londrina", "Bombinhas");
    $aleatorio = rand(0, 4);
    echo "$cidades[$aleatorio]";

    ?>
</html>