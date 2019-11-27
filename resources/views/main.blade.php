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
                <a class="d" href="#">Laporan<span class="sr-only"></span></a> <link rel="stylesheet">
                &nbsp;
                &nbsp;
                <a class="d" href="bosque">Tanaman<span class="sr-only"></span></a> <link rel="stylesheet">
                &nbsp;
                &nbsp;
                <a class="d" href="beranda">Logout<span class="sr-only"></span></a> <link rel="stylesheet">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpGuXKr6bOua1u4J_XBX2bMKioGuKAeEP-avmTJh5Ty0MepoZw" width="25px" height="25px" alt="dropdown image" class="img-responsive">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                </ul>
              </div>
      </nav>
            <div class="container">

              <header class="jumbotron my-4">
                <h1 class="display-3">Selamat Datang!</h1>
              </header>



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

  </body>
</html>
