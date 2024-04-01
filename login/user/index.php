<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: ../../user.php');
  exit();
} ?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log In</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/mdb.dark.min.css" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>
<style>
  * {
    font-family: "Oswald", sans-serif !important;
  }

  .form-check-input[type="checkbox"]:checked {
    background-color: orangered;
  }

  .form-check-input[type="checkbox"]:checked:focus {
    background-color: orangered;
    box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25);
    /* Adjust color as needed */
  }

  .form-control:focus,
  #validationCustomUsername:focus {
    border-color: orangered;
    box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25);
  }

  .btn {
    background-color: orangered;
    color: white;

    &:hover {
      background-color: orangered;
      color: white;
    }
  }
</style>
<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
<script src="userLogin.js" defer></script>

<body>
  <section class="vh-100 bg-image" style="
        background-image: url(&quot;../../img/login/pexels-victor-freitas-703016.jpg&quot;);
        background-size: cover;
      ">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3">Log In</h2>

                <form class="needs-validation js-form" action="./login.php" method="post" novalidate>
                  <div class="col form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
                    <label for="email">Email</label>
                  </div>
                  <div class="col mb-3 form-floating">
                    <input type="password" class="form-control" id="password" placeholder="blablalba" required
                      name="password" />
                    <label for="password">Password</label>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="remember" required />
                      <label class="form-check-label text-secondary" for="remember">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <div class="col d-flex justify-content-center">
                    <button class="btn" type="submit">Log In</button>
                  </div>
                  <p class="text-center" style="margin-top: 1rem; margin-bottom: -5px">
                    Not yet a member ?
                    <a href="../../signup/index.html" style="text-decoration: none; color: orangered">Sign Up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>