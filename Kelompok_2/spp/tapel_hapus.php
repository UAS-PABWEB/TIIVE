<?php
if( empty( $_SESSION['iduser'] ) ){
	//session_destroy();
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	if( isset( $_REQUEST['submit'] )){
		$idtapel = $_REQUEST['idtapel'];
		$sql = mysql_query("DELETE FROM tapel WHERE idtapel='$idtapel'");
		if($sql > 0){
			header('Location: ./admin.php?hlm=master&sub=tapel');
			die();
		} else {
			echo 'ada ERROR dengan query';
		}
	} else {
		$idtapel = $_REQUEST['idtapel'];
		$sql = mysql_query("SELECT * FROM tapel WHERE idtapel='$tapel'");
		list($idtapel,$tapel) = mysql_fetch_array($sql);
		
		echo '<div class="alert alert-danger">Yakin akan menghapus Siswa:';
		echo '<br>idtapel  : <strong>'.$idtapel.'</strong>';
		echo '<br>tapel   : '.$tapel;
		
		$qtapel = mysql_query("SELECT tapel FROM tapel WHERE idtapel='$idtapel'");
		list($tapel) = mysql_fetch_array($qtapel);
		
		echo '<br>tapel : '.$tapel.' ('.$idtapel.')<br><br>';
		echo '<a href="./admin.php?hlm=master&sub=tapel&aksi=hapus&submit=ya&idtapel='.$idtapel.'" class="btn btn-sm btn-success">Ya, Hapus</a> ';
		echo '<a href="./admin.php?hlm=master&sub=tapel" class="btn btn-sm btn-default">Tidak</a>';
		echo '</div>';
	}
}
?>