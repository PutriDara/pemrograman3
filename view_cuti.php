<?php
include("koneksi.php");

	$query_view=mysqli_query($koneksi, "select * from cuti");
?>
<a href="input_cuti.php" class="btn btn-danger">Tambah Pengajuan Cuti</a>
<table class="table-bordered" border="1">
		<tr>
			<td>ID Karyawan</td>
			<td>Departemen</td>
			<td>Nama</td>
			<td>Jabatan</td>
			<td>Sisa Cuti</td>
			<td>Tanggal Pengajuan</td>
			<td>Tanggal Masuk</td>
			<td>Alasan</td>
			<td>Alamat Selama Cuti</td>
		</tr>


<?php 
while ($tampil=mysqli_fetch_array($query_view)) {?>
 	

		<tr>
 			<td><?php echo $tampil['id_karyawan']?></td>
 			<td><?php echo $tampil['departemen']?></td>
 			<td><?php echo $tampil['nama']?></td>
 			<td><?php echo $tampil['jabatan']?></td>
 			<td><?php echo $tampil['sisa_cuti']?></td>
 			<td><?php echo $tampil['tgl_pengajuan']?></td>
 			<td><?php echo $tampil['tgl_masuk']?></td>
 			<td><?php echo $tampil['alasan']?></td>
 			<td><?php echo $tampil['alamat_cuti']?></td>		
 		</tr>
 		 
 <?php } ?>
</table>