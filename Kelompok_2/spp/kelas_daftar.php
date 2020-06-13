<?php
if( empty( $_SESSION['iduser'] ) ){
	//session_destroy();
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	if( isset( $_REQUEST['submit'] )){
        $idkelas=$_REQUEST['idkelas'];
		$tkelas = $_REQUEST['tkelas'];
		
		$sql = mysql_query("INSERT INTO kelas VALUES('idkelas','$tkelas')");
		
		if($sql > 0){
			header('Location: ./admin.php?hlm=master&sub=kelas');
			die();
		} else {
			echo 'ada ERROR dg query';
		}
	} else {
?>
<h2>Tambah Kelas</h2>
<hr>
<form method="post" action="admin.php?hlm=master&sub=kelas&aksi=tambah" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="idkelas" class="col-sm-2 control-label">ID Kelas</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="idkelas" name="idkelas" placeholder="Kode Kelas" required autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="tkelas" class="col-sm-2 control-label">Kelas</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="tkelas" name="tkelas" placeholder="Nama Kelas" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" name="submit" class="btn btn-default">Simpan</button>
			<a href="./admin.php?hlm=master&sub=kelas" class="btn btn-link">Batal</a>
		</div>
	</div>
</form>
<?php
	}
}
?>