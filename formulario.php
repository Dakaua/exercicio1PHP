<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 0 - PHP</title>
</head>

<body>
    <form action="calcularIMC.php" method="post">
        <label for="nome">Nome:</label><br>
        <input name="nome" type="text" id="nome" maxlength="50" placeholder="Digite seu nome"><br>

        <label for="dataNasc">Sua data de nascimento:</label><br>
        <input type="date" id="dataNasc" name="dataNasc"><br>

        <label for="altura">Altura:</label><br>
        <input type="number" name="altura" id="altura" step="0.01" placeholder="Defina sua altura"><br>

        <label for="peso">Peso:</label><br>
        <input type="number" name="peso" id="peso" step="0.01" placeholder="Defina sua altura"><br>

        <label>Gênero:</label><br>
        <input type="radio" name="genero" id="masculino" value="masculino">
        <label for="masculino">Masculino</label>
        
        <input type="radio" name="genero" id="feminino" value="feminino">
        <label for="feminino">Feminino</label><br>
        
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
         <style>
            form{
                align-items: center;
                justify-content: center;
            }
        </style>
</body>

</html>