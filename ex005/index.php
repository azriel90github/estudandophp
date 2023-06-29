<!DOCTYPE html>
<html lang="pt-tp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavéis e Constantes</title>
</head>
<body>
    <h1>Variavéis e Constantes</h1>
    <?php 
        $nome = "Azriel";
        $sobrenome = "Armando";
        const PAIS = "Angola"; 
        echo "Prazer em te conhecer, $nome $sobrenome! Você mora emn " . PAIS ;
    ?>
    <br>
    <?php 
        const _TX = 850;
        echo "Resultado = " . _TX;
    ?>
</body>
</html>