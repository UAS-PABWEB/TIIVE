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
		
		$sql = mysql_query("UPDATE tapel SET tapel='$tapel' WHERE idtapel='$idtapel'");
		
		if($sql > 0){
			header('Location: ./admin.php?hlm=master&sub=tapel');
			die();
		} else {
			echo 'ada ERROR dengan query';
		}
	} else {
		$idtapel = $_REQUEST['idtapel'];
		$sql = mysql_query("SELECT * FROM tapel WHERE idtapel='$idtapel'");
		list($idtapel,$tapel) = mysql_fetch_array($sql);
?>
<h2>Edit Tahun Ajaran</h2>
<hr>
<form method="post" action="admin.php?hlm=master&sub=tapel&aksi=edit" class="form-horizontal" role="form">
	<div class="form-group">
<label for="idtapel" class="col-sm-2 control-label">Id Tapel</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" id="idtapel" name="idtapel" placeholder="Idtapel" required autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="tapel" class="col-sm-2 control-label">Tahun Ajaran</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="tapel" name="tapel" value="<?php echo $tapel; ?>">
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