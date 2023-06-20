<?php
include "conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `travel` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: daftar.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}