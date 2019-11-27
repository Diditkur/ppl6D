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

    @foreach($Cuaca as $baru)
	<form action="update/{{$baru->id}}" method="post">
		{{ csrf_field() }}
		{{method_field('PUT')}}
    ID Kuartal <input type="text" name="ID_KUARTAL" value="{{ $baru->ID_KUARTAL}}"> <br/>
    Kuartal <input type="text" name="kuartal" value="{{ $baru->kuartal}}"> <br/>
    Curah <input type="text" name="curah_hujan" value="{{ $baru->curah_hujan}}"> <br/>
    Kelembapan <input type="text" name="kelembapan" value="{{ $baru->kelembapan}}"> <br/>
    Suhu <input type="text" name="suhu" value="{{ $baru->suhu}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  @endforeach
  </div>

</body>
</html>
