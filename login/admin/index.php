<?php
session_start();
if (isset($_SESSION['user']) && !isset($_SESSION['user']['email'])) {
  header('Location: ../../user.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <link href="../../css/bootstrap.admin.min.css" rel="stylesheet" />

  <link href="../../css/styleAdminLogin.css" rel="stylesheet" />
  <style>
    * {
      font-family: "Oswald", sans-serif !important;
    }
  </style>
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="adminLogin.js" defer></script>
</head>

<body>
  <div class="container-fluid position-relative d-flex p-0">
    <div id="spinner"
      class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <form id="form" method="post" action="login.php" class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3 js-form">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <a href="../../index.html" class="">
                <h3 class="text-primary">
                  <img src="../../img/logo.png" alt="Gym Logo" style="width: 75%" />
                </h3>
              </a>
              <h3>Sign In</h3>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="name" name="name" />
              <label for="name">Username</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" />
              <label for="password">Password</label>
            </div>
            <button type="submit" class="btn py-3 w-100 mb-4 text-dark" style="background-color: rgb(186, 81, 0)">
              Sign In
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    var spinner = function () {
      setTimeout(function () {
        if ($("#spinner").length > 0) {
          $("#spinner").removeClass("show");
        }
      }, 1);
    };
    spinner();
  </script>
</body>

</html>