<?php
$tipoCambio = 0.85;

if (isset($_GET["dolares"])) {
    $dolares = $_GET["dolares"];
    if (is_numeric($dolares)) {
        $cantidadEuros = $dolares * $tipoCambio;
        echo "<h2>$dolares dólares son aproximadamente $cantidadEuros euros</h2>";
    } else {
        echo "<p>Por favor, ingresa una cantidad válida en dólares.</p>";
    }
}
?>