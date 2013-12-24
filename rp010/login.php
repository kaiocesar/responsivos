<?php 
/**
 *  Login
 *  @todo Tela inicial de login
 *  @author Kaio Cesar <programador.kaio@gmail.com>
 *
 */

  include 'app/configs/config.php';

  if ($auth->CheckLog($_SERVER['REMOTE_ADDR'])>0):
    header("Location: blacklist.php");
    exit();
  endif;


  if ($_POST) :
    if ($auth->login($_POST)===true):
      header("Location: dash.php");
    else:
      $auth->logsAttempts();

    endif;
  endif;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cerberus - Authentication</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="login.php" method="post" >
        <h2 class="form-signin-heading">Cerberus Authentication</h2>
        <input type="text" class="form-control" placeholder="Username" required autofocus name="username" />
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" id="bto-login" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>
