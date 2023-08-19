<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>

        <label for="operacion">Operación:</label>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                echo "El resultado de la suma es: $resultado";
                break;

            case "resta":
                $resultado = $num1 - $num2;
                echo "El resultado de la resta es: $resultado";
                break;

            case "multiplicacion":
                $resultado = $num1 * $num2;
                echo "El resultado de la multiplicación es: $resultado";
                break;

            case "division":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "El resultado de la división es: $resultado";
                } else {
                    echo "Invalido. No se puede dividir por 0.";
                }
                break;

            default:
                echo "Operación no válida.";
                break;
        }
    }
    ?>
</body>
</html>
