<?php
if(!isset($_SESSION)) {
        session_start();
      }
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/Senpi.ico">
    <title>Login</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/signin.css" rel="stylesheet">
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
       
    <div class="container">
        <div class="panel panel-default">
			 <div class="panel-heading">
			     <h3 class="panel-title">Please sign in</h3>
			 </div>
			 <div class="panel-body">
              <form class="form-signin" action="proses.php?i=login" method="POST">
                <label for="inputEmail" class="sr-only">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required><br>

                <label>Captcha</label>
                    <img src="gambar.php" alt="gambar"><br><br>
                      <input name="nilaiCaptcha" value="" maxlength="6" style="width: 300px; height: 30px">


                 <p align="center"><b>Akses</b><br>
                  <select name="domain" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
              </form>
            </div>
        </div>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>