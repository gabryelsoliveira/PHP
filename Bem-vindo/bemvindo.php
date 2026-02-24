<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
function saudacao(){
    $nome = "Gabryel";
    echo "Bem Vindo $nome <hr>";
}

saudacao();

function saudacao2($nome2){
    echo "Bem-vindo $nome2 <hr>";
}

saudacao2("Gabryel");

?>
</body>
</html>