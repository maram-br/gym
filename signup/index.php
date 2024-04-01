<?php
session_start();
if(isset($_SESSION['user'])){
    header('Location: ../user.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/mdb.dark.min.css" />
    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
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
      box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25); /* Adjust color as needed */
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
  <script
    src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"
    defer
  ></script>
  <script src="signup.js" defer></script>
  <body>
    <section
      class="vh-100 bg-image"
      style="
        background-image: url('../img/login/pexels-pixabay-260352.jpg');
        background-size: cover;
      "
    >
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div
            class="row d-flex justify-content-center align-items-center h-100"
          >
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px">
                <div class="card-body px-5 py-3">
                  <h2 class="text-uppercase text-center mb-3">
                    Create an account
                  </h2>

                  <form
                    class="needs-validation"
                    action="signup.php"
                    method="post"
                    id="signup-form"
                    novalidate
                  >
                    <div class="col form-floating mb-3">
                      <input
                        type="text"
                        name="name"
                        class="form-control"
                        id="validationCustom01"
                        placeholder="name@example.com"
                      />
                      <label for="validationCustom01">Name</label>
                    </div>
                    <div class="col input-group">
                      <span class="input-group-text h-auto">@</span>
                      <div class="form-floating">
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          id="validationCustomUsername"
                          placeholder="email"
                        />
                        <label for="validationCustomUsername">Email</label>
                      </div>
                    </div>
                    <div id="error-email" class="mb-3"></div>
                    <div class="col mb-3 form-floating">
                      <input
                        type="number"
                        class="form-control"
                        id="phonenumber"
                        required
                        name="phonenumber"
                        placeholder="blablalba"
                      />
                      <label for="phonenumber">Phone Number</label>
                    </div>
                    <div class="col mb-3 form-floating">
                      <input
                        type="password"
                        class="form-control"
                        id="validationCustom03"
                        placeholder="blablalba"
                        name="password"
                        required
                      />
                      <label for="validationCustom03">Password</label>
                    </div>
                    <div class="col mb-3 form-floating">
                      <input
                        type="password"
                        name="password2"
                        class="form-control"
                        id="validationCustom05"
                        required
                        placeholder="blablalba"
                      />
                      <label for="validationCustom05">Confirm Password</label>
                    </div>
                    <div class="col mb-3">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="invalidCheck"
                          required
                          name="terms"
                        />
                        <label
                          class="form-check-label text-secondary"
                          for="invalidCheck"
                        >
                          Agree to terms and conditions
                        </label>
                      </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                      <button class="btn" type="submit">Submit form</button>
                    </div>
                    <p
                      class="text-center"
                      style="margin-top: 1rem; margin-bottom: -5px"
                    >
                      Already have an Account?
                      <a
                        style="text-decoration: none; color: orangered"
                        href="../login/user/index.php"
                        >Sign In</a
                      >
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
