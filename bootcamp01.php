Você tem um um banco de dados, descobriu que ele foi hackeado e o hacker utilizou uma
criptografia de substituição de caracteres em seu banco de dado do tipo ‘Tenis/Polar’ onde a letra
T foi substituida pela letra P e a P pela T e por assim em diante. Você tem as variáveis $nome e
$sobrenome que carregam os dados do banco, como você faria para substituir em tempo real de
execução as letras de forma que o sistema continuasse operando normalmente?
Ex:
Antes da invasão: ANDRE
Depois da invasão: OLDSE 

<?php
echo "<hr>";

function muda($nome){
return str_replace(['P','O','L','I','R'],['T','E','N','A','S'],$nome); 

}

var_dump(muda('E'));

?>