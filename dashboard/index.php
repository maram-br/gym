<?php
require_once '../utilities/autoloader.php';
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: ../login/user/index.php');
} else {
  $user = $_SESSION['user'];
  $id = $user['id'];
  $cl = new client();
  $client = ($cl->findById($id))->getData();
  $client = $client[0];
  $offre_cl = new offreClient();
  $test = $offre_cl->exist("$id")->getStatus();
  if ($test === true) {
    $offcl = $offre_cl->findById("$id")->getData();
  }
}

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome </title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="dashboard.js" defer></script>
  <style>
    * {
      font-family: "Muli", sans-serif !important;
    }

    .form-control:focus {
      border-color: orangered;
      box-shadow: 0 0 0 0.2rem rgba(255, 69, 0, 0.25);
    }

    .h2 {

      font-family: "Muli", sans-serif !important;
    }

    .progress {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .suivie {
      margin-top: 50px;
    }
  </style>
</head>

<body class="container">
  <div class="container w-75 mt-3">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Welcome
        <?= $client->NAME ?>
      </h1>
      <button type="button" class="btn" style="background-color: dimgray">
        <a href="../logout/index.php" style="text-decoration: none; color: white">Logout</a>
      </button>
    </div>

    <hr />
    <form id="user-form" method="post" action="./save.php" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required value=<?= $client->EMAIL ?> />
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required value=<?= $client->NAME ?> />
      </div>
      <div class="mb-3">
        <label for="phonenumber" class="form-label">Phone Number:</label>
        <input type="number" class="form-control" id="phonenumber" name="phonenumber" value=<?= $client->PHONE_NUMBER ?>
          required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <div class="col-auto">
          <span id="passwordHelpInline" class="form-text">
            If you don't want to update the password let it blank.
          </span>
        </div>
        <input type="password" class="form-control" id="password" name="password" required />
      </div>
      <div><button type="submit" class="btn btn-primary"
          style="background-color: orangered; border-color: orangered;">Save</button></div>

    </form>
  </div>
  <?php
  if ($test === true): ?>
    <div class="suivie">
      <h2>Suivre abonnement </h2>
      <?php
      foreach ($offcl as $offclient):
        $id_offre = $offclient->ID_OFFRE;
        $off = new offre();
        $offre = $off->findById($id_offre)->getData()[0];
        $dateDebut = new DateTime($offclient->DATE_DEBUT);
        $dateFin = new DateTime($offclient->DATE_FIN);
        $dureeTotale = $dateDebut->diff($dateFin)->days;
        $dateActuelle = new DateTime();
        $dureeEcoulee = $dateDebut->diff($dateActuelle)->days;
        $d = ($dureeEcoulee / $dureeTotale) * 100;
        ?>
        <span> Abonnement :
          <?= $offre->NAME ?> <br>
          date expiration :
          <?= $offclient->DATE_FIN ?>
        </span>
        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?= $d ?>"
          aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar progress-bar-striped progress-bar-animated"
            style="width: <?= $d ?>%;background-color:orangered">
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

</body>


</html>