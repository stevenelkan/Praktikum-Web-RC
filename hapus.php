<?php
include "penghubung.php";
$id = $_POST["id"];

$sql = "DELETE FROM mahasiswa where id = '".$id."' ";
$hasil = mysqli_query($con,$sql);
?>