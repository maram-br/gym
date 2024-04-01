<?php
session_start();


if(!isset($_SESSION['admin'])){
  header('location:../login/admin/index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>planning</title>
    <link rel="stylesheet" href="css/maj_planning.css" />
  </head>
  <body>
    <form
      class="file-upload"
      enctype="multipart/form-data"
      action="process.php"
      method="post"
    >
      <div class="container">
        <table>
          <tbody>
            <tr>
              <td>Titre</td>
              <td>drop</td>
              <td>emploi</td>
            </tr>
            <tr>
              <td>All event</td>
              <td>
                <div class="image-upload-wrap">
                  <input
                    class="file-upload-input"
                    type="file"
                    onchange="readURL(this,1);"
                    accept="image/*"
                    name="emploi1"
                  />
                  <div class="drag-text">
                    <h3>Drop an Image</h3>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Fitness Tips</td>
              <td>
                <div class="image-upload-wrap">
                  <input
                    class="file-upload-input"
                    type="file"
                    onchange="readURL(this,2);"
                    accept="image/*"
                    name="emploi2"
                  />
                  <div class="drag-text">
                    <h3>Drop an Image</h3>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Motivation</td>
              <td>
                <div class="image-upload-wrap">
                  <input
                    class="file-upload-input"
                    type="file"
                    onchange="readURL(this,3);"
                    accept="image/*"
                    name="emploi3"
                  />
                  <div class="drag-text">
                    <h3>Drop an Image</h3>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Workout</td>
              <td>
                <div class="image-upload-wrap">
                  <input
                    class="file-upload-input"
                    type="file"
                    onchange="readURL(this,4);"
                    accept="image/*"
                    name="emploi4"
                  />
                  <div class="drag-text">
                    <h3>Drop an Image</h3>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <button
          type="submit"
          style="
            background-color: coral;
            margin-top: 30px;
            margin-left: 150px;
            width: 80px;
            height: 30px;
          "
        >
          save
        </button>
      </div>
    </form>
    <script src="js/maj_planning.js"></script>
  </body>
</html>
