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

    <?php $__currentLoopData = $Cuaca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="update/<?php echo e($baru->id); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('PUT')); ?>

    ID Kuartal <input type="text" name="ID_KUARTAL" value="<?php echo e($baru->ID_KUARTAL); ?>"> <br/>
    Kuartal <input type="text" name="kuartal" value="<?php echo e($baru->kuartal); ?>"> <br/>
    Curah <input type="text" name="curah_hujan" value="<?php echo e($baru->curah_hujan); ?>"> <br/>
    Kelembapan <input type="text" name="kelembapan" value="<?php echo e($baru->kelembapan); ?>"> <br/>
    Suhu <input type="text" name="suhu" value="<?php echo e($baru->suhu); ?>"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

</body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/edit2.blade.php ENDPATH**/ ?>