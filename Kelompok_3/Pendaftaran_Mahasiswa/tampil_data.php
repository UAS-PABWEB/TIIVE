<?php

if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
}

else{
    $cari = "";
}
?>

<div class="row">
    <div class="col-md-12">
    <?php

    if(empty($_GET['alert'])) {
        echo "";
    }

    elseif($_GET['alert'] == 1) { ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><i class="fas fa-check-circle"></i> Sukses!</strong> Data berhasil disimpan.
      <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
        <span aria-hidden="true">&times;</span>
      </button>
     </div>
    <?php
    }

    elseif($_GET['alert'] == 2) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><i class="fas fa-check-circle"></i> Sukses!</strong> Data berhasil diubah.
          <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php
    }

    elseif($_GET['alert'] == 3) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><i class="fas fa-check-circle"></i> Sukses!</strong> Data berhasil dihapus.
          <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php
    }

    elseif ($_GET['alert'] == 4) {?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-times-circle"></i> Gagal!</strong> NIM <b><?php echo $_GET['nim']; ?></b> sudah ada.
            <button type="button" class="close" data-dismiss="alert" aria-label="CLose">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
    }

    ?>
        <form class="mr-3" action="index.php" method="post">
            <div class="form-row">
                <div class="col-3">
                  <input type="text" class="form-control" name="cari" placeholder="Cari NIM atau Nama Mahasiswa" value="<?php echo $cari; ?>">
                </div>

                <div class="col-8">
                    <buttom type="submit" class="btn btn-info">Cari</button>
                </div>

                <div class="col">
                  <a class="btn btn-info" href="?page=tambah" role="button"><i class="fas fa-plus"></i>Daftar</a>
                </div>
            </div>
        </form>
        
        <table class="table table-striped table-bordered">
          <thead>
           <tr>
             <th>No.</th>
           
             <th>NIM</th>
             <th>Nama Lengkap</th>
             <th>Jenis Kelamin</th>
             <th>Program Studi</th>
             <th>Alamat</th>
             <th>No. HP</th>
             <th>UKM</th>
             <th></th>
            </tr>
          </thead>

          <tbody>
          <?php

          $batas = 5;
          if(isset($cari)) {
              $query_jumlah = mysqli_query($db, "SELECT count(nim) as jumlah FROM tbl_pendaftaran WHERE nim LIKE '%$cari%' OR nama_lengkap LIKE '%$cari%'")or die('Ada kesalahan pada query jumlah:'.mysqli_error($db));
          }

          else {
              $query_jumlah = mysqli_query($db, "SELECT count(nim) as jumlah FROM tbl_pendaftaran")or die('Ada kesalahan pada query jumlah:'.mysqli_error($db));
          }

          $data_jumlah  = mysqli_fetch_assoc($query_jumlah);
          $jumlah       = $data_jumlah['jumlah'];
          $halaman      = ceil($jumlah / $batas);
          $page         = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
          $mulai        = ($page - 1) * $batas;

          $no = $mulai + 1;

          if (isset($cari)) {
              $query = mysqli_query($db, "SELECT * FROM tbl_pendaftaran WHERE nim LIKE '%$cari%' OR nama_lengkap LIKE '%$cari%' ORDER BY nim DESC LIMIT $mulai, $batas")or die('Ada kesalahan pada query pendaftaran: '.mysqli_error($db));
          }

          else {
              $query = mysqli_query($db, "SELECT * FROM tbl_pendaftaran ORDER BY nim DESC LIMIT $mulai, $batas")or die('Ada kesalahan pada query pendaftaran: '.mysqli_error($db));
          }

          while ($data = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td width="30" class="center"><?php echo $no; ?></td>
               
                <td width="80" class="center"><?php echo $data['nim']; ?></td>
                <td width="180"><?php echo $data['nama_lengkap']; ?></td>
                <td width="120"><?php echo $data['jenis_kelamin']; ?></td>
                <td width="100"><?php echo $data['program_studi']; ?></td>
                <td width="180"><?php echo $data['alamat']; ?></td>
                <td width="70" class="center"><?php echo $data['no_hp']; ?></td>
                <td width="180"><?php echo $data['pilih_ukm']; ?></td>
                <td width="120" class="center">
                 <a title="Ubah" class="btn btn-outline-info" href="?page=ubah&nim=<?php echo $data['nim']; ?>"><i class="fas fa-edit"></i></a><a title="Hapus" class="btn btn-outline-danger" href="proses_hapus.php?nim=<?php echo $data['nim'];?>" onclick="return confirm('Anda yakin ingin menghapus mahasiswa <?php echo $data['nama_lengkap']; ?>?');"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php
          $no++;
          } ?>
          </tbody>
    </table>

    <?php

    if (empty($_GET['hal'])) {
        $halaman_aktif = '1';
    }

    else {
        $halaman_aktif = $_GET['hal'];
    }
    ?>
    <div class="row">
      <div class="col">
       <a>
         Halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> - Total <?php echo $jumlah; ?> data
         </a>
      </div>
      <div class="col">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">

          <?php

          if ($halaman_aktif<='1') { ?>
            <li class="page_item disable"> <span class="page-link">Sebelumnya</span></li>
            <?php
          }

          else { ?>
           <li class="page-item"><a class="page-link" href="?hal=<?php echo $page -1 ?>">Sebelumnya</a></li>
           <?php } ?>

           <?php 
           for($x=1; $x<=$halaman; $x++) { ?>
           <li class="page-item"><a class="page-link" href="?hal=<?php echo $x ?>"><?php echo $x ?></a></li> 
           <?php } ?>

           <?php
           if ($halaman_aktif>=$halaman) { ?>
             <li class="page-item disabled"> <span class="page-link">Selanjutnya</span></li> 
           <?php 
           }

           else { ?>
             <li class="page-item"><a class ="page-link" href="?hal=<?php echo $page +1 ?>">Selanjutnya</a></li>
           <?php } ?>
           </ul>
        </nav>
    </div>
  </div>
 </div>
</div>
