//membuat form tabel atribut untuk melakukan penambahan data
<form action="" method="post">
<div class="form.group">
<label>Nim</label>
<input type="number" name="nim" class="form-control" required>
</div>
<div class="form.group">
<label>Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>
<div class="form.group">
<label>Gender (L/P)</label>
<input type="text" name="jkel" class="form-control" required>
</div>
<div class="form.group">
<label>Alamat</label>
<input type="text" name="alamat" class="form-control" required>
</div>
<div class="form.group">
<label>Tgl Lahir</label>
<input type="date" name="tgllhr" class="form-control" required>
</div>
<td><input type="submit" name="Submit" class="btn btn-success btn-sm m-2"
value="Tambah"></td>
</form>
</div>
</tr>
<?php
// cek jika form dikirimkan, masukkan data formulir ke dalam tabel pengguna
if(isset($_POST['Submit'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$alamat = $_POST['alamat'];
$tgllhr = $_POST['tgllhr'];
// masuk ke file koneksi database
include_once("koneksi.php");
// perintah untuk memsukkan data ke dalam tabel
$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr)
VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");
// Tampilkan pesan saat pengguna menambahkan
echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>