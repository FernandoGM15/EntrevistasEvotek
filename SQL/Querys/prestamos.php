<?php 
    require("conexion.php");

    $sql = "SELECT nombre, paterno, titulo, autor, fecha_prestamo
    FROM prestamos
      INNER JOIN libros ON libros.id = prestamos.libro_id
      INNER JOIN usuarios ON usuarios.id = prestamos.usuario_id;";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " el usuario: " . $row["nombre"]. " " . $row["paterno"] .  "  Pidio prestado el libro:  " . $row["titulo"] .  "  Del autor:  " . $row["autor"] .  "  El dia:  " . $row["fecha_prestamo"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
