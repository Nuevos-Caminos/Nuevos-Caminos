<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NC-Foro</title>
  <link rel="icon" href="../images/logo.png" type="image/x-icon" />

  <?php include('./header.php'); ?>
  <?php
  if (isset($_SESSION['login_id']))
    header("location:index.php?page=home");
  ?>

</head>
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
  }
  main#main {
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(assets/img/login.jpg) no-repeat center center fixed;
    background-size: cover;
    z-index: 1;
  }
  #login-left {
    display: none;
  }
  #login-right {
    position: relative;
    width: 100%;
    max-width: 400px;
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    z-index: 2;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  .card {
    width: 100%;
    border: none;
    background: transparent;
}
  .form-group {
    margin-bottom: 15px;
  }

  .control-label {
    font-weight: bold;
  }

  .form-control {
    border-radius: 25px;
    padding: 12px;
    border: none;
    background-color: #c2c2c2;
    color: #fff;
    outline: none;
  }

  .btn-sm.btn-block.btn-wave {
    background-color: #827e96;
    border: none;
    padding: 12px 20px;
    border-radius: 25px;
    color: white;
  }

  .btn.btn-link {
    color: #5d5a6b;
    text-decoration: none;
  }

  /*Responsividade*/
  @media (max-width: 768px) {
    #login-right {
      width: 90%;
      padding: 20px;
    }

    main#main {
      background-position: center;
      background-size: cover;
    }

    .btn-sm.btn-block.btn-wave {
      width: 100%;
    }

    .d-flex {
      flex-direction: column;
    }

    .d-flex .btn-sm {
      margin-bottom: 10px;
    }
  }
</style>

<body>

  <main id="main" class="bg-dark">
    <div id="login-right">
      <div class="card">
        <div class="card-body">
          <form id="login-form">
            <div class="form-group">
              <label for="username" class="control-label">Nombre de usuario</label>
              <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Contraseña</label>
              <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="d-flex align-items-center">
              <button class="btn-sm btn-block btn-wave">Iniciar sesión</button>
              <a href="cadastre.php" class="btn btn-link">Registro</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script>
    $('#login-form').submit(function (e) {
      e.preventDefault()
      $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
      if ($(this).find('.alert-danger').length > 0)
        $(this).find('.alert-danger').remove();
      $.ajax({
        url: 'ajax.php?action=login',
        method: 'POST',
        data: $(this).serialize(),
        error: err => {
          console.log(err)
          $('#login-form button[type="button"]').removeAttr('disabled').html('Login');

        },
        success: function (resp) {
          if (resp == 1) {
            location.href = 'index.php?page=home';
          } else {
            $('#login-form').prepend('<div class="alert alert-danger">El nombre de usuario o la contraseña son incorrectos.</div>')
            $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
          }
        }
      })
    })
  </script>

</body>

</html>
