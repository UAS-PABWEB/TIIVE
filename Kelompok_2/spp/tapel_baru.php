<?php
if( empty( $_SESSION['iduser'] ) ){
	//session_destroy();
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	if( isset( $_REQUEST['submit'] )){
		$idtapel = $_REQUEST['idtapel'];
		$tapel = $_REQUEST['tapel'];
		
		$sql = mysql_query("INSERT INTO tapel VALUES('$idtapel','$tapel')");
		
		if($sql > 0){
			header('Location: ./admin.php?hlm=master&sub=tapel');
			die();
		} else {
			echo 'ada ERROR dg query';
		}
	} else {
?>
<h2>Tambah Tahun Ajaran</h2>
<hr>
<form method="post" action="admin.php?hlm=master&sub=tapel&aksi=baru" class="form-horizontal" role="form">
	<div class="form-group">
		<label for="idtapel" class="col-sm-2 control-label">Id Tapel</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="idtapel" name="idtapel" placeholder="Idtapel" required autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="tapel" class="col-sm-2 control-label">Tapel</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="tapel" name="tapel" placeholder="tapel" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" name="submit" class="btn btn-default">Simpan</button>
			<a href="./admin.php?hlm=master&sub=tapel" class="btn btn-link">Batal</a>
		</div>
	</div>
</form>
<?php
	}
}
?>