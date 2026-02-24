<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
function saudacao($nome){
    echo "Bem Vindo $nome <hr>";
}   
saudacao("Gabryel");

function saudacao2($nome2){
return "Bem-vindo $nome2 <hr>";
}

echo saudacao2("Gabryel");

?>
</body>
</html>