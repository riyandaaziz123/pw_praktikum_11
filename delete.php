<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id='$id'";
if(mysqli_query($link,$sql)) {
    header('Location: tampil_data.php');
} 

?>