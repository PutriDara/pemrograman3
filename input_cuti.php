<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into cuti(id_karyawan, departemen, nama, jabatan, sisa_cuti, tgl_pengajuan, tgl_masuk, alasan, alamat_cuti)
	values(
	'".$_POST['id_karyawan']."',
	'".$_POST['departemen']."',
	'".$_POST['nama']."',
	'".$_POST['jabatan']."',
	'".$_POST['sisa_cuti']."',
	'".$_POST['tgl_pengajuan']."',
	'".$_POST['tgl_masuk']."',
	'".$_POST['alasan']."',
	'".$_POST['alamat_cuti']."')");

if($query_input) {
header('location:view_cuti.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
	<table class="table table-bordered" border="1">
		<tr>
			<td>ID Karyawan</td>
			<td><input type="number" name="id_karyawan"></td>
		</tr>
		<tr>
			<td>Departemen</td>
			<td><input type="text" name="departemen"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td><input type="text" name="jabatan"></td>
		</tr>
		<tr>
			<td>Sisa Cuti</td>
			<td><input type="number" name="sisa_cuti"></td>
		</tr>
		<tr>
			<td>Tanggal Pengajuan</td>
			<td><input type="date" name="tgl_pengajuan"></td>
		</tr>
		<tr>
			<td>Tanggal Masuk</td>
			<td><input type="date" name="tgl_masuk"></td>
		</tr>
		<tr>
			<td>Alasan</td>
			<td><input type="text" name="alasan"></td>
		</tr>
		<tr>
			<td>Alamat Selama Cuti</td>
			<td><input type="text" name="alamat_cuti"></td>
		</tr>
			<tr>
				<td><input type="submit" name="save"></td>
	        </tr>
	</table>
</form>
