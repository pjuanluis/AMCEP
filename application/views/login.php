<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url()?>img/fav.png">

    <title>AMCEP - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="col-lg-12 text-center"><img height="150" width="150" src="<?=base_url()?>img/amcepmain.png"></div>
      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
          <form method="post" action="<?=base_url()?>index.php/App/login">
            <div class="form-group">
              <div class="form-label-group">
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required="required" autofocus="autofocus">
                <label for="inputEmail">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Recordar Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </form>
          <div class="text-center">
            <br>
            <a class="d-block small" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?=base_url()?>js/vendor/bootstrap.bundle.js"></script>
    <script src="<?=base_url()?>js/jquery.easing.min.js"></script>

  </body>

</html>
