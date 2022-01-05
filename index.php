<?php
	//koneksi database
	$host = "db4free.net";
	$user = "mikhael";
	$pass = "mikhael1905016";
	$database = "doubles";
	$koneksi = mysql_connect($host, $user, $pass, $database) or die (mysqli_error($koneksi));
	
<!DOCTYPE html>
<html>
<head>
	<title>UAS CRUD MIKHAEL VICKTORIO MASALAMATE</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1 class="text-center">MIKHAEL VICKTORIO MASALAMATE</h1>
<h2 class="text-center">RHIO WEB</h2>

<!-- Awal Card Form -->
<div class="card mt-3">
  <div class="card-header bg-dark text-white">
    Form Input Data Pekerjaan
  </div>
  <div class="card-body">
   <form method="post" action="">
   	<div class="form-group">
   			<label>Nama</label>
   			<input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama Anda Di Sini!" required>
   		</div>


	<div class="form-group">
   			<label>TTL</label>
   			<input type="text" name="tttl" value="<?=@$vttl?>" class="form-control" placeholder="Input TTL Anda Di Sini!" required>
   		</div>


	<div class="form-group">
   			<label>Alamat</label>
   			<textarea class="form-control" name="talamat" placeholder=" Input Alamat Anda Di Sini!"><?=@$valamat?></textarea>
   		</div>

   	<div class="form-group">
   			<label>Jenis Kelamin</label>
   			<select class="form-control" name="tjeniskelamin"> 
   				<option value="<?=@$vjeniskelamin?>"><?=@$vjeniskelamin?></option>
   				<option value="Pria">Pria</option>
   				<option value="Wanita">Wanita</option>
   				</select>

	<div class="form-group">
   			<label>Umur</label>
   			<select class="form-control" name="tumur">
   				<option value="<?=@$vumur?>"><?=@$vumur?></option>>
   			</select>

	<div class="form-group">
   			<label>Agama</label>
   			<input type="text" name="tagama" value="<?=@$vagama?>" class="form-control" placeholder="Input Agama Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Status</label>
   			<input type="text" name="tstatus" value="<?=@$vstatus?>" class="form-control" placeholder="Input Status Anda Di Sini!" required>
   		</div>

   		</div>
       <div class="form-group">
   			<label>Pekerjaan</label>
   			<input type="text" name="tpekerjaan" value="<?=@$vpekerjaan?>" class="form-control" placeholder="Input Pekerjaan Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>No.Handphone</label>
   			<input type="text" name="tnohp" value="<?=@$vnohp?>" class="form-control" placeholder="Input No.Handphone Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>NIK</label>
   			<input type="text" name="tnik" value="<?=@$vnik?>" class="form-control" placeholder="Input NIK Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Nama Ayah</label>
   			<input type="text" name="tnamaayah" value="<?=@$vnamaayah?>" class="form-control" placeholder="Input Nama Ayah Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Pekerjaan Ayah</label>
   			<input type="text" name="tpekerjaanayah" value="<?=@$vpekerjaanayah?>" class="form-control" placeholder="Input Pekerjaan Ayah Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Alamat Ayah</label>
   			<input type="text" name="talamatayah" value="<?=@$valamatayah?>" class="form-control" placeholder="Input Alamat Ayah Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Pendidikan Ayah</label>
   			<input type="text" name="tpendidikanayah" value="<?=@$vpendidikanayah?>" class="form-control" placeholder="Input Pendidikan Ayah Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>No.Handphone Ayah</label>
   			<input type="text" name="tnohpayah" value="<?=@$vnohpayah?>" class="form-control" placeholder="Input No.Handphone Ayah Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Nama Ibu</label>
   			<input type="text" name="tnamaibu" value="<?=@$vnamaibu?>" class="form-control" placeholder="Input Nama Ibu Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Pekerjaan Ibu</label>
   			<input type="text" name="tpekerjaanibu" value="<?=@$vpekerjaanibu?>" class="form-control" placeholder="Input Pekerjaan Ibu Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Alamat Ibu</label>
   			<input type="text" name="talamatibu" value="<?=@$valamatibu?>" class="form-control" placeholder="Input Alamat Ibu Anda Di Sini!" required>
   		</div>
       <div class="form-group">
   			<label>Pendidikan Ibu</label>
   			<input type="text" name="tpendidikanibu" value="<?=@$vpendidikanibu?>" class="form-control" placeholder="Input Pendidikan Ibu Anda Di Sini!" required>
   		</div>
        <div class="form-group">
   			<label>No.Handphone Ibu</label>
   			<input type="text" name="tnohpibu" value="<?=@$vnohpibu?>" class="form-control" placeholder="Input No.Handphone Ibu Anda Di Sini!" required>
   		</div>


      <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
      <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
   </form>
  </div>
</div>
<!-- Akhir Card Form -->

<!-- Awal Card Tabel -->
<div class="card mt-3">
  <div class="card-header bg-dark text-white ">
    Daftar Pekerjaan
  </div>
  <div class="card-body">

  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>No.</th>
  			<th>Nama</th>
  			<th>TTL</th>
  			<th>Alamat</th>
  			<th>Jenis Kelamin</th>
  			<th>Umur</th>
			<th>Agama</th>
			<th>Status</th>
			<th>Pekerjaan</th>
			<th>No.Handphone</th>
			<th>NIK</th>
			<th>Nama Ayah</th>
			<th>Pekerjaan Ayah</th>
			<th>Alamat Ayah</th>
			<th>Pendidikan Ayah</th>
			<th>No.Handphone Ayah</th>
			<th>Nama Ibu</th>
			<th>Pekerjaan Ibu</th>
			<th>Alamat Ibu</th>
			<th>Pendidikan Ibu</th>
			<th>No.Handphone Ibu</th>
			<th>Aksi</th>
			</tr>
      <?php
          $no=1;
          $tampil = mysqli_query($koneksi, "SELECT * from pekerjaan order by id_pekerjaan asc");
          while ($data = mysqli_fetch_array($tampil)):

      ?>
  		<tr>
  			<td><?=$no++?></td>
  			<td><?=$data['nama']?></td>
  			<td><?=$data['ttl']?></td>
  			<td><?=$data['alamat']?></td>
  			<td><?=$data['jenis_kelamin']?></td>
  			<td><?=$data['umur']?></td>
  			<td><?=$data['agama']?></td>
			<td><?=$data['status']?></td>
			<td><?=$data['pekerjaan']?></td>
			<td><?=$data['no_handphone']?></td>
			<td><?=$data['nik']?></td>
			<td><?=$data['nama_ayah']?></td>
			<td><?=$data['pekerjaan_ayah']?></td>
			<td><?=$data['alamat_ayah']?></td>
			<td><?=$data['pendidikan_ayah']?></td>
			<td><?=$data['no_handphone_ayah']?></td>
			<td><?=$data['nama_ibu']?></td>
			<td><?=$data['pekerjaan_ibu']?></td>
			<td><?=$data['alamat_ibu']?></td>
			<td><?=$data['pendidikan_ibu']?></td>
			<td><?=$data['no_handphone_ibu']?></td>
        <td>
          <a href="index.php?hal=edit&id=<?=$data['id_pekerjaan']?>" class="btn btn-success"> Edit </a>
          <a href="index.php?hal=hapus&id=<?$data['id_pekerjaan']?>" 
            onclick ="return confirm('Apakah Yakin Data ini akan dihapus?')" class="btn btn-danger"> Hapus </a>
        </td>

  		</tr>
    <?php endwhile; // penutup perulangan while?>
  	</table>

  </div>
</div>
<!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>