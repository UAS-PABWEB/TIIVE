<?php 

require_once "config/database.php"; 
if (isset($_POST['simpan'])) { 
    $nim = mysqli_real_escape_string($db, trim($_POST['nim']));
    $nama_lengkap  = mysqli_real_escape_string($db, trim($_POST['nama_lengkap'])); 
    $jenis_kelamin = mysqli_real_escape_string($db, trim($_POST['jenis_kelamin'])); 
    $program_studi = mysqli_real_escape_string($db, trim($_POST['program_studi'])); 
    $alamat = mysqli_real_escape_string($db, trim($_POST['alamat'])); 
    $no_hp = mysqli_real_escape_string($db, trim($_POST['no_hp'])); 
    $ukm    = mysqli_real_escape_string($db, trim($_POST['pilih_ukm']));
   
    
    $query = mysqli_query($db, "SELECT nim FROM tbl_pendaftaran WHERE nim='$nim'") 
                        or die('Ada kesalahan pada query tampil data nim: '.mysqli_error($db));
    $rows = mysqli_num_rows($query); 
    if ($rows > 0) { 
        header("location: index.php?alert=4&nim=$nim"); 
        } else { 
            if($nim) { 
                $insert = mysqli_query($db, "INSERT INTO tbl_pendaftaran(nim,nama_lengkap, jenis_kelamin,program_studi,alamat,no_hp,pilih_ukm) 
                                             VALUES('$nim','$nama_lengkap', '$jenis_kelamin','$program_studi','$alamat','$no_hp','$ukm')") 
                                             or die('Ada kesalahan pada query insert : '.mysqli_error($db)); 
                if ($insert) { 
                    header("location: index.php?alert=1"); 
                    } 
                } 
            } 
        } 
mysqli_close($db); 
?> 