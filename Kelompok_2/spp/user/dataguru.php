<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            <marquee behavior="scroll" ></marquee>
                <div class="row">
                   
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center"> Data Guru </h3><br>
                         
 

   
         <br>
          <form class="form-horizontal form-label-left" novalidate action="?page=dataguru" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12" >
                <input type="text" class="search form-control" align="right" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="Search for people" name="nama_guru" />  
                <div     id="result"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" align="left">
                
                              <button class="btn btn-default" name="submit" type="submit "><i class="fa fa-search"></i> Cari</button>
            </div>
        </div>
    </div>   
</form>
         <hr>
        
<section class="panel">       
    <table class="table table-striped   table-hover">
        <thead>
        <tr>
            <th>Nomor</th>
     
            <th class="hidden-phone"><i class=></i> KODE GURU </th>
            <th><i class=></i> KODE JURUSAN</th>   
            <th><i class=></i> NIP</th> 
            <th><i class=></i> NAMA GURU</th>  
             <th><i class=></i> ALAMAT GURU</th> 
              <th><i class=></i> NO TELEPHONE</th> 
              
            <!-- <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>
            <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>           -->                
        </tr>
        </thead>
        <tbody align="left">
         <?php
         error_reporting(0);
           include "config/koneksi.php";    
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM guru WHERE nama_guru LIKE '%$search%' or nama_guru LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM guru order by nama_guru asc LIMIT 3");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
        
        <tr>
            <td><?php echo $Nomor ?> </td>
            
            <td class="hidden-phone"><?php echo $tampil['kd_guru']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['kd_jurusan']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['nip']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['nama_guru']; ?> </td>
                 <td class="hidden-phone"><?php echo $tampil['alamat_guru']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['telp_guru']; ?> </td>
            
                                 
                                     
          
        </tr>     
        <?php } }?>             
        <tr>
            <td>Jumlah Data</td>
            <td>: <?php echo $jumlah1 ?> </td>
        </tr>      
        </tbody>
    </table>
</section>                                                                                    
 


                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
