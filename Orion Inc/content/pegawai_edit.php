
<?php
	if (!defined("INDEX")) die("");

	$query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'");
	$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Pegawai</h2>
<form method="post" action="?hal=pegawai_update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

   <div class="form-group">
      <label for="foto">Foto</label>
      <div class="input"value="<?= $data['foto'] ?>">
				<input type="file" id="foto" name="foto" >
				<img src="images/<?= $data['foto'] ?>" width="100">
			</div>
   </div>
   <div class="form-group">
      <label for="nama">Nama</label>
      <div class="input"><input type="text" id="nama" name="nama" value="<?= $data['nama_pegawai'] ?>"></div>
   </div>
   <div class="form-group">
      <label for="jk">Jenis Kelamin</label>
			<?php
				if($data['jenis_kelamin'] == 'L') {
					$l = "checked";
					$p = "";
				} else {
					$l = "";
					$p = "checked";
				}
			?>
      <input type="radio" id="jk" name="jk" value="L" <?= $l ?>>Laki-laki
      <input type="radio" id="jk" name="jk" value="P" <?= $p ?>>Perempuan
   </div>
   <div class="form-group">
      <label for="tanggal">Tanggal</label>
      <div class="input"><input type="date" id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>" ></div>
   </div>
   <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <div class="input">
         <select id="jabatan" name="jabatan">
            <?php
            $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
            while ($j = mysqli_fetch_array($queryjabatan)) {
               echo "<option value={$j['id_jabatan']}>{$j['nama_jabatan'] }</option>";
							 if($j['id_jabatan'] == $data['id_jabatan']) {
								echo "selected";
							 }
							 echo ">$j[nama_jabatan]</option>";
            }
            ?>
         </select>
      </div>
   </div>
   <div class="form-group">
      <label for="keterangan">Keterangan</label>
      <div class="input"><textarea name="keterangan" id="keterangan" rows="5" style="width: 100%"><?= $data['keterangan'] ?></textarea></div>
   </div>
   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>