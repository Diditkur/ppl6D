<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
  <meta charset="utf-8">
  <style type="text/css">
    .login {
        margin: 50px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
    </style>
</head>
<body>

	<h2><a href="#">iPlus</a></h2>
	<h3>Tambah Data Tanaman</h3>

	<a href="/172410102011/nat/public/admin/tanaman"> Kembali</a>

	<br/>
	<br/>
  <div class="login">
	<form action="simpan" method="post">
		<?php echo e(csrf_field()); ?>

    Kode <input type="text" name="kode" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Curah <input type="text" name="curah" required="required"> <br/>
    Kelembapan <input type="text" name="kelembapan" required="required"> <br/>
    Suhu <input type="text" name="suhu" required="required"> <br/>
		<br> Gambar <input type="file" name="Gambar"> <br/>
    <br> Harga <input type="text" name="Harga" required="required"> <br/>
    Jangka <input type="text" name="jangka" required="required"> <br/>
    Inflasi1 <input type="text" name="inflasi1" required="required"> <br/>
    Inflasi2 <input type="text" name="inflasi2" required="required"> <br/>
    Inflasi3 <input type="text" name="inflasi3" required="required"> <br/>
    Pilihan <input type="text" name="pilihan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  </div>

</body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/tambah1.blade.php ENDPATH**/ ?>