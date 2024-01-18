<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["operador"])) {
            $numero1 = $_GET["numero1"];
            $numero2 = $_GET["numero2"];
            $operador = $_GET["operador"];

            switch ($operador) {
                case "suma":
                    echo "El resultado de la suma es " . ($numero1 + $numero2);
                    break;
                case "resta":
                    echo "El resultado de la resta es " . ($numero1 - $numero2);
                    break;
                case "multiplicacion":
                    echo "El resultado de la multiplicación es " . ($numero1 * $numero2);
                    break;
                case "division":
                    if ($numero2 != 0) {
                        echo "El resultado de la división es " . ($numero1 / $numero2);
                    } else {
                        echo "No es posible dividir por cero.";
                    }
                    break;
                default:
                    echo "Operación no válida.";
                    break;
            }
        } else {
            echo "Error, debes ingresar ambos números y seleccionar una operación.";
        }
    }
    ?>