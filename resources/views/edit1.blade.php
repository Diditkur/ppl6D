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

    @foreach($tanaman as $baru)
	<form action="update/{{$baru->id_tanam}}" method="post">
		{{ csrf_field() }}
		{{method_field('PUT')}}
    <input type="hidden" name="id" value="{{ $baru->id_tanam }}"> <br/>
    Kode <input type="text" name="kode" value="{{ $baru->kode}}"> <br/>
		Nama <input type="text" name="nama" value="{{ $baru->nama}}"> <br/>
		Curah <input type="text" name="curah" value="{{ $baru->curah}}"> <br/>
    Kelembapan <input type="text" name="kelembapan" value="{{ $baru->kelembapan}}"> <br/>
    Suhu <input type="text" name="suhu" value="{{ $baru->suhu}}"> <br/>
    <br> Gambar <input type="file" name="Gambar" value="{{ $baru->Gambar}}"> <br>
    <br> Harga <input type="text" name="Harga" value="{{ $baru->Harga}}"> <br/>
    Jangka <input type="text" name="jangka" value="{{ $baru->jangka}}"> <br/>
    Inflasi1 <input type="text" name="inflasi1" value="{{ $baru->inflasi1}}"> <br/>
    Inflasi2 <input type="text" name="inflasi2" value="{{ $baru->inflasi2}}"> <br/>
    Inflasi3 <input type="text" name="inflasi3" value="{{ $baru->inflasi3}}"> <br/>
    Pilihan <input type="text" name="pilihan" value="{{ $baru->pilihan}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  @endforeach
  </div>

</body>
</html>
