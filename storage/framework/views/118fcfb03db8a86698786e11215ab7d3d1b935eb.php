
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>iPlus</title>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top" id="mainNav">
      <div class="container">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="">
            <img alt="Brand" src="https://cdn1.iconfinder.com/data/icons/fruit-14/512/11-128.png" width="25px" height="25px">
          </a>
          <a class="navbar-brand" href="#">iPlus</a>
            <button class="navbar-toggler navbar-toggler-righ-top" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </div>
      </nav>
            <div class="container">
            <br> <br> <br>
            <h3>Daftar Tanaman Pada Sistem Ini</h3>
              <div class="row">
                <div class="col-md-12">
                  <div class="box">
                      <div class="box-header with-border">
                      </div>
                      <div class="col-md">
                          <?php foreach ($main as $key => $data): ?>
                                <div class="col-md-3" style="float:left; padding-bottom:3rem">
                                  <div class="card h-100">
                                    <img class="card-img-top" src="data:image/jpg;base64,<?php echo e(chunk_split(base64_encode($data->Gambar))); ?>" >
                                    <div class="card-body">
                                      <h4 class="card-title"><?php echo e($data->nama); ?></h4>
                                    <!--  <p class="card-text">Prakiraan harga Rp=<?php echo e($data->Harga*$data->inflasi1+$data->Harga); ?></p> -->
                                      <p class="card-text">Jangka Waktu Tanam = <?php echo e($data->jangka); ?> hari</p>
                                    </div>
                                  </div>
                                </div>
                              <?php endforeach; ?>
                        </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.container -->

            <!-- Footer -->
            <footer class="py-5 bg-dark">
              <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; iPlus_2019</p>
              </div>
              <!-- /.container -->
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/home.blade.php ENDPATH**/ ?>