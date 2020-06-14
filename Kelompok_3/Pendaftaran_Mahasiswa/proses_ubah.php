<?php 

require_once "config/database.php";

if (isset($_POST['simpan'])) { 
    if (isset($_POST['nim'])) { 

        $nim            = mysqli_real_escape_string($db, trim($_POST['nim']));
        $nama_lengkap   = mysqli_real_escape_string($db, trim($_POST['nama_lengkap']));
        $jenis_kelamin  = mysqli_real_escape_string($db, trim($_POST['jenis_kelamin']));
        $program_studi  = mysqli_real_escape_string($db, trim($_POST['program_studi']));
        $alamat         = mysqli_real_escape_string($db, trim($_POST['alamat'])); 
        $pilih_ukm      = mysqli_real_escape_string($db, trim($_POST['pilih_ukm'])); 
        $no_hp          = mysqli_real_escape_string($db, trim($_POST['no_hp'])); 
        

        if (empty($nama_file)) { 
            
            $update = mysqli_query($db, "UPDATE tbl_pendaftaran SET   nama_lengkap            = '$nama_lengkap',
                                                                        jenis_kelamin   = '$jenis_kelamin', 
                                                                        program_studi   = '$program_studi', 
                                                                        alamat          = '$alamat', 
                                                                        pilih_ukm       = '$pilih_ukm',
                                                                        no_hp           = '$no_hp' 
                                                             WHERE      nim             = '$nim'") 
                                        or die('Ada kesalahan pada query update : '.mysqli_error($db));
            if ($update) { 
                header("location: index.php?alert=2"); 
            } 
        }

        else { 
            if(move_uploaded_file($tmp_file, $path)) { 
                $update = mysqli_query($db, "UPDATE tbl_pendaftaran      SET    nama_lengkap            = '$nama_lengkap', 
                                                                                jenis_kelamin           = '$jenis_kelamin', 
                                                                                program_studi           = '$program_studi', 
                                                                                alamat                  = '$alamat', 
                                                                                pilih_ukm               = '$pilih_ukm',
                                                                                no_hp                   = '$no_hp', 
                                                                                
                                                                WHERE           nim                     = '$nim'") 
                                            or die('Ada kesalahan pada query update : '.mysqli_error($db)); 
                if ($update) { 
                    header("location: index.php?alert=2"); 
                }        
            } 
        } 
    } 
}

mysqli_close($db); 
?> 