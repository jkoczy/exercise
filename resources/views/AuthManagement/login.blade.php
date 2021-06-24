<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
  
      
      <!-- Custom styles for this template -->
      <link href="{{URL::asset('resources/css')}}/signin.css" rel="stylesheet">
    <title>Sign in</title>
  </head>
  <body class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <form class="form-signin" method="POST">
                        @csrf
                      <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                      <div class="mb-4">
                          @if(session('alert'))
                            <div class="alert alert-danger">
                                    {{session('alert')}}
                            </div>
                          @endif
                      </div>
                      <h1 class="h3 mb-3 font-weight-normal">Đăng nhập</h1>
                      <label for="inputEmail" class="sr-only">Email</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputPassword" class="sr-only">Điện thoại</label>
                      <input type="password" id="dien_thoai" name="dien_thoai" class="form-control" placeholder="Password" required>
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="ghi_nho"> Ghi nhớ
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
                      <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
                    </form>
                     
            </div>
        </div>
    </div>
</body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>