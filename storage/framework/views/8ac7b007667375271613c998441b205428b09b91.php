<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style media="screen">
    a.b {
      font: italic bold 12px/30px Georgia, serif;
      }
    a.d{
      font: bold 12px/30px Georgia, serif;
      color: black;
    }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>iPlus</title>
  </head>
  <body id="page-top" bgcolor="#C0C0C0">
    <nav class="navbar navbar-expand-lg navbar-primary bg-light fixed-top" id="mainNav">
      <div class="container">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="">
            <img alt="Brand" src="https://cdn1.iconfinder.com/data/icons/fruit-14/512/11-128.png" width="25px" height="25px">
          </a>
          <a class="b">iPlus</a>
        </div>
        </div>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav  mt-5 mt-lg-2">
                <a class="d" href="beranda">Logout<span class="sr-only"></span></a> <link rel="stylesheet">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpGuXKr6bOua1u4J_XBX2bMKioGuKAeEP-avmTJh5Ty0MepoZw" width="25px" height="25px" alt="dropdown image" class="img-responsive">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                </ul>
              </div>
      </nav>
            <div class="container">

              <header class="jumbotron my-4">
                <h1 class="display-3">Selamat Datang!</h1>
                <p class="lead">Pilihlah waktu periode tanam yang anda inginkan.</p>
              </header>

              <div class="row text-center">
                <div class="dropdown show">
                <a class="btn btn-light dropdown-toggle" role="button" id="dropdownMenuLink" backgr data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img alt="Brand" src="data:image/png;base64,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" width="25px" height="25px"> Periode Tanam</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="kuartal1">Januari - April</a>
                  <a class="dropdown-item" href="kuartal2">Mei - Agustus</a>
                  <a class="dropdown-item" href="kuartal3">September - Desember</a>
                  <!--<a class="dropdown-item" href="kuartal4">Oktober - Desember</a> -->
                </div>
              </div>
              </div>
              <!-- /.row -->
            <!-- /.container -->

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

    <script type="text/javascript">
  	function disableButton(submitButton){
  		document.getElementById(submitButton).disabled = true;
  		alert("Button has been disabled.");
  	}
  </script>

  </body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/beranda.blade.php ENDPATH**/ ?>