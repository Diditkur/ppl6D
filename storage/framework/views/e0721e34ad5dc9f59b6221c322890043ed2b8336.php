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

	<a href="/172410102011/nat/public/admin/pemilik"> Kembali</a>

	<br/>
	<br/>
  <div class="login">

    <?php $__currentLoopData = $Pemilik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="update/<?php echo e($baru->id); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('PUT')); ?>

    Nama <input type="text" name="nama" value="<?php echo e($baru->name); ?>"> <br/>
    Email <input type="text" name="email" value="<?php echo e($baru->email); ?>"> <br/>
    Password <input type="password" name="password" value="<?php echo e($baru->password); ?>"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

</body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/edit4.blade.php ENDPATH**/ ?>