<?php
$str = "   Eu viajei para São Paulo!    ";

//echo "$str";
echo trim($str);


//EX 01 
//a PELO MENOS UM NUMERO
//regex: /^(?=.*\d)(?=.*[0-9]){8-36}$/;

//b PELO MENOS UMA LETRA
//regex:  /^(?=.*[a-zA-Z])$/

//c PELO MENOS UM CARACTERE  ESPECIAL
//regex: /^(?=.*[$*&@#])$/

//d PELO MENOS 8 CARACTERES
//regex: {8, }



//EX02 Uma determinada variável pode ser preenchida de diversas formas, como eu GARANTO que se
//comparada com ‘amigo’ ela sempre será confiavel?
$nome = "AMIgo";

echo "<hr>";


//EX03 Como eu posso garantir que o ‘input de dados’ de um determinado formulário não vai me enviar
//caracteres vazios? Antes ou depois e no meio.
$str = " Olá, meu nome é  Elvis  ";
var_dump(trim($str));

//eu sou uma nova linha