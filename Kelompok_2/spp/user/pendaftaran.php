
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login Form Pembayaran SPP Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Digital Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Salsa' rel='stylesheet' type='text/css'>

<style type="text/css">
  .kuning{
    color: orange;
  }
</style>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- js -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- script for close -->
<script>
$(document).ready(function(c) {
  $('.alert-close').on('click', function(c){
    $('.vlcone').fadeOut('slow', function(c){
      $('.vlcone').remove();
    });
  });   
});
</script>
<!-- //script for close -->

</head>
<?php
 error_reporting(0);
 include "config/koneksi.php";
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form
   $id_admin                 = $_POST['id_admin'];
  $username                  = $_POST['username'];
  $password                 = $_POST['password'];
  $level                 = $_POST['level'];
     
  $myQry = $mysqli->query("INSERT INTO admin (id_admin,username,password,level)
  VALUES ('$id_admin','$username','$password','$level')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='index.php'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
    
   
} // Penutup POST
  
  
 

?>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PEMBAYARAN SPP | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
  
      <section id="services">
        <div class="container">
            <div class="box first">
           
                <div class="row">
                 <header class="panel-heading">
                              <h3 align="center">Input Data User </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-right"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    <h3 align="center" > <div class="item form-group">
               <h3 align="center" > <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">user_id: <span class="required"></span></label></h3>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <h3 align="center" ><input  class="form-control col-md-8 col-xs-12"   name="id_admin"  required type="text">
                </div>
            </div></h3>
            
            <div class="item form-group">
              <h3 align="center" >  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Username: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="username"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                 <h3 align="center" > <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">password: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="password"  required type="text">
                </div>
            </div>
             <div class="item form-group">
                  <h3 align="center" ><label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Level : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <select  class="form-control col-md-8 col-xs-12"   name="level"  required  >
                    <option>Pilih :</option>
                   
                    <option value="user">user</option>
                  </select>
                </div>
            </div>
            <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="center">                                            
                  <h3 align="center" >  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnSimpan">Simpan..</button>  
                </div>
            </div>
        </div>   
        
                                                                                        
  </div>
</form>
 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>

</body>
</html>
