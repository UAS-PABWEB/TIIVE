<?php

require_once "config/database.php";

if(isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = mysqli_query($db, "SELECT nim FROM tbl_pendaftaran WHERE nim='$nim'")
                                or die('Ada kesalahan pada query tampil data nim: '.mysqli_error($db));
    $data = mysqli_fetch_assoc($query);
    
    $hapus_file = 'nim';

    if($hapus_file) {
        $delete = mysqli_query($db, "DELETE FROM tbl_pendaftaran WHERE nim='$nim'")
                                or die('Ada kesalahan pada query delete: '.mysqli_error($db));

        if($delete) {
            header("location: index.php?alert=3");
        }
    }
}

mysqli_close($db);
?>