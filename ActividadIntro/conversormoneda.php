<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Pesos Colombianos</title>
</head>
<body>
    <h1>Conversor de Pesos Colombianos</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cantidad">Cantidad en Pesos Colombianos:</label>
        <input type="number" name="cantidad" required><br>

        <label for="moneda">Convertir a:</label>
        <select name="moneda">
            <option value="dolar">Dólares</option>
            <option value="euro">Euros</option>
            <option value="rupia india">Rupia India</option>
        </select><br>

        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $moneda = $_POST["moneda"];

        switch ($moneda) {
            case "dolar":
                $conversion = $cantidad / 4100; // Tasa de cambio aproximada
                echo "$cantidad Pesos Colombianos son equivalentes aproximadamente a $conversion Dólares.";
                break;

            case "euro":
                $conversion = $cantidad / 4500; // Tasa de cambio aproximada
                echo "$cantidad Pesos Colombianos son equivalentes aproximadamente a $conversion Euros.";
                break;

            case "rupia india":
                $conversion = $cantidad / 50; // Tasa de cambio aproximada
                echo "$cantidad Pesos Colombianos son equivalentes aproximadamente a $conversion Rupias Indias.";
                break;

            default:
                echo "Moneda no válida.";
                break;
        }
    }
    ?>
</body>
</html>
