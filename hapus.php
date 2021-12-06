<?php
 
include("config.php");
 
if( isset($_GET['id']) ){
 
    // get id from query
    $id = $_GET['id'];
 
    // delete query
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
 
   // if success
    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }
 
} else {
    die("akses dilarang...");
}
 
?>