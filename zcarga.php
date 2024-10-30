<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: text/html; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $archivo = fopen("zcarga.txt", "a");

    if ($archivo) {
        fwrite($archivo, "Correo electrónico: " . $_POST['email'] . "\n");

        $prendaNum = 1;
        while (isset($_POST["peso_$prendaNum"])) {
            fwrite($archivo, "Prenda $prendaNum:\n");
            fwrite($archivo, "Peso: " . $_POST["peso_$prendaNum"] . " gramos\n");
            fwrite($archivo, "Color: " . $_POST["color_$prendaNum"] . "\n");
            fwrite($archivo, "Tipo de tejido: " . $_POST["tejido_$prendaNum"] . "\n");
            $prendaNum++;
        }

        fwrite($archivo, "---------------------------------\n");
        fclose($archivo);

        // Redirigir al index
        header("Location: index.php");
        exit;
    } else {
        echo "Error: No se pudo abrir el archivo para guardar los datos.";
    }
}
?>
