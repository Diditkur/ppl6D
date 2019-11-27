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
	<h3>Tambah Data Cuaca</h3>

	<a href="/172410102011/nat/public/admin/cuaca"> Kembali</a>

	<br/>
	<br/>
  <div class="login">
	<form action="simpan" method="post">
		{{ csrf_field() }}
    ID Kuartal <input type="text" name="ID_KUARTAL" required="required"> <br/>
    Kuartal <input type="text" name="kuartal" required="required"> <br/>
    Curah <input type="text" name="curah_hujan" required="required"> <br/>
    Kelembapan <input type="text" name="kelembapan" required="required"> <br/>
    Suhu <input type="text" name="suhu" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  </div>

</body>
</html>
