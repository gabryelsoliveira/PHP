<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="imc.php" method="get">
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" placeholder="ex: Gabryel"></input>
            
            <label for="peso">Peso:</label>
            <input name="peso" id="peso" type="text" placeholder="ex: 69.5" step="0.10"></input>

            <label for="altura">Altura:</label>
            <input name="altura" id="altura" type="text" placeholder="ex: 1.78" step="0.01"></input>
            <button type="submit">Calcular</button>

        </form>



</body>
</html>