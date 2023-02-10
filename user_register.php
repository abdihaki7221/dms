<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>
    <title></title>
    <style >
    .body{
      background-image: url('logo.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    .navbar{
      background-color: #36454F;
      color: #fff;
    }

    </style>
  </head>
  <body class="body">
    <div class="row">
      <div class="col-3">

      </div>

          <div class="col-md-4 offset-md-4 form mt-3" style="background-color: #36454F; color: #fff; border-radius:5px;">
              <form action="user_register.php" method="POST" autocomplete="">
                  <h2 class="text-center">Signup Form</h2>
                  <p class="text-center">It's quick and easy.</p>
                  <?php
                  if(count($errors) == 1){
                      ?>
                      <div class="alert alert-danger text-center">
                          <?php
                          foreach($errors as $showerror){
                              echo $showerror;
                          }
                          ?>
                      </div>
                      <?php
                  }elseif(count($errors) > 1){
                      ?>
                      <div class="alert alert-danger">
                          <?php
                          foreach($errors as $showerror){
                              ?>
                              <li><?php echo $showerror; ?></li>
                              <?php
                          }
                          ?>
                      </div>
                      <?php
                  }
                  ?>
                  <div class="form-group">
                      <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="text" name="national_id" placeholder="National ID" required value="<?php echo $name ?>">
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control button" type="submit" name="signup" value="Signup">
                  </div>
                  <div class="link login-link text-center">Already a member? <a href="user_login.php">Login here</a></div>
              </form>
          </div>
      </div>
  </div>


          <script type="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
