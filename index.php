<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Calculadora</title>
    </head>
    <body>
        <h1>CALCULADORA</h1>
        <form method="post" action="index.php">
            Valor 1:
            <input type="text" step="0.001" name="val1" size="11"><br>
            Operação:
            <select name="operacao">
                <option value='somar'>Somar</option>
                <option value='subtrair'>Subtrair</option>
                <option value='multiplicar'>Multiplicar</option>
                <option value='dividir'>Dividir</option>
            </select><br>
            Valor 2:
            <input type="text" step="0.001" name="val2" size="11"><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        include ('calculo.php');
        ?>
    </body>
</html>