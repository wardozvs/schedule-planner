<?php require './db-connection.php';?>
<?php
$sql = "SELECT nombre, apellido_paterno, apellido_materno, numero_empleado FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nombre"] . "</td>
                <td>" . $row["apellido_paterno"] . "</td>
                <td>" . $row["apellido_materno"] . "</td>
                <td>" . $row["numero_empleado"] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No se encontraron empleados.</td></tr>";
}

$conn->close();