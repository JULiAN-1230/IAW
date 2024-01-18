<?
$cambio = 1.18;

if (isset($_GET["euros"])) {
    $euros = $_GET["euros"];

    if (is_euroseric($euros)) {
        $dolares = $euros * $cambio;

        echo "<h2>$euros euros son aproximadamente $dolares dólares</h2>";
    } else {
        echo "<p>Por favor, ingresa una cantidad válida en euros.</p>";
    }
}
?>