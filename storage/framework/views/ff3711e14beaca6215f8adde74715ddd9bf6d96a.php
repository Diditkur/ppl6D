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
	<h3>Update Data Tanaman</h3>

	<a href="/172410102011/nat/public/admin/tanaman"> Kembali</a>

	<br/>
	<br/>
  <div class="login">

    <?php $__currentLoopData = $tanaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="update/<?php echo e($baru->id_tanam); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('PUT')); ?>

    <input type="hidden" name="id" value="<?php echo e($baru->id_tanam); ?>"> <br/>
    Kode <input type="text" name="kode" value="<?php echo e($baru->kode); ?>"> <br/>
		Nama <input type="text" name="nama" value="<?php echo e($baru->nama); ?>"> <br/>
		Curah <input type="text" name="curah" value="<?php echo e($baru->curah); ?>"> <br/>
    Kelembapan <input type="text" name="kelembapan" value="<?php echo e($baru->kelembapan); ?>"> <br/>
    Suhu <input type="text" name="suhu" value="<?php echo e($baru->suhu); ?>"> <br/>
    <br> Gambar <input type="file" name="Gambar" value="<?php echo e($baru->Gambar); ?>"> <br>
    <br> Harga <input type="text" name="Harga" value="<?php echo e($baru->Harga); ?>"> <br/>
    Jangka <input type="text" name="jangka" value="<?php echo e($baru->jangka); ?>"> <br/>
    Inflasi1 <input type="text" name="inflasi1" value="<?php echo e($baru->inflasi1); ?>"> <br/>
    Inflasi2 <input type="text" name="inflasi2" value="<?php echo e($baru->inflasi2); ?>"> <br/>
    Inflasi3 <input type="text" name="inflasi3" value="<?php echo e($baru->inflasi3); ?>"> <br/>
    Pilihan <input type="text" name="pilihan" value="<?php echo e($baru->pilihan); ?>"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

</body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/edit1.blade.php ENDPATH**/ ?>