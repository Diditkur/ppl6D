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
	<h3>Edit Data Tanaman</h3>

	<a href="/172410102011/nat/public/admin/tanaman"> Kembali</a>

	<br/>
	<br/>
  <div class="login">

    @foreach($Petani as $baru)
	<form action="update/{{$baru->id}}" method="post">
		{{ csrf_field() }}
		{{method_field('PUT')}}
    Nama <input type="text" name="nama" value="{{ $baru->name}}"> <br/>
    Email <input type="text" name="email" value="{{ $baru->email}}"> <br/>
    Password <input type="password" name="password" value="{{ $baru->password}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  @endforeach
  </div>

</body>
</html>
