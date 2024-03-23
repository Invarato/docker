<?php
$server = 'bd';
$username = 'usuariobd';
$password = 'contraseniabd';
$dbname = 'mibd';

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Fallo de conexión a la base de datos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nombre'];
    $value = $_POST['apellido'];

    $query = "INSERT INTO mi_tabla (nombre, apellido) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $name, $value);
    $stmt->execute();
    echo "¡Nuevo registro añadido a la tabla mi_tabla de la base de datos!<br>";
}

$query = "SELECT * FROM mi_tabla";
$result = $conn->query($query);

echo "<b>Registros guardados en mi_tabla:</b><br>";
echo "Nombre | Apellido<br>";
echo "==============<br>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['nombre']. " | " . $row['apellido'] . "<br>";
    }
} else {
    echo "0 resultados encontrados en la tabla mi_tabla";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<body>
<br><br><br>
<b>Nuevo registro a guardar en mi_tabla:</b>
<form method="post" action="index.php">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellido">Apellido:</label><br>
    <input type="text" id="apellido" name="apellido"><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

