<?php 
    require("conexion.php");

    $sql = "SELECT * FROM libros ORDER BY fecha_publicacion DESC";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - titulo: " . $row["titulo"]. " " . $row["fecha_publicacion"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
