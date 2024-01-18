<?
if (isset($_GET["num1"]) && isset($_GET["num2"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $resultado = $num1 * $num2;
    echo "<p>El resultado de la multiplicación es: $resultado </p>";
} else {
    echo "<p>ERROR: No ha introducido un número</p>";
}
 ?>