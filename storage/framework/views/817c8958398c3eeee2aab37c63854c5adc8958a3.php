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
	<h3>Tambah Pemilik</h3>

	<a href="/172410102011/nat/public/admin/pemilik"> Kembali</a>

	<br/>
	<br/>
  <div class="login">
	<form action="simpan" method="post">
		<?php echo e(csrf_field()); ?>

    Nama <input type="text" name="nama" required="required"> <br/>
    Email <input type="text" name="email" required="required"> <br/>
    Password <input type="password" name="password" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  </div>

</body>
</html>
Pemilik
pemilik
<?php /**PATH /home/172410102011/nat/resources/views/tambah4.blade.php ENDPATH**/ ?>