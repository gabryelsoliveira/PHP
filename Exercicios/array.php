<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
// $frutas = array('banana', 'maçã', 'morango');

//$frutas =[];

$frutas = ['b' => 'banana', 'm' => 'maçã', 'f' => 'morango'];

echo '<pre>';
print_r($frutas);
echo '</pre>';

echo 'pre';
print_r($frutas);
echo '/pre';

echo $frutas['b'];

$_cadastroAlunos['nomes'] = ['Ana', 'Bruno', 'Carlos']; 
$_cadastroAlunos['idades'] = [20, 22, 19];

echo '<pre>';
var_dump($_cadastroAlunos);
echo '</pre>';


//Foreach

foreach($frutas as $fruta){
    echo $fruta . '<br>';
        //"$fruta <br>"

}





?>
</body>
</html>