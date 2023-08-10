<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="Ejercicio3.php">
    <label for="numero">Ingresa un número:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Enviar">
</form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];


    for($i=0; $i<$numero; $i++){
        echo "<img src='pk.gif' width='300' height='220'>";
        }
}
    ?>
</body>
</html>