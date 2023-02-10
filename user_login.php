<?php require_once "controllerUserData.php"; ?>
 <!DOCTYPE html>
 <html>
 <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>
      <title>Login Page</title>

      <style >
      .body{
              background-image: url('logo.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;

              font-family: "Georgia",  serif;
              font-size: 20px;
            }

            .welcome{
              font-family: "Georgia",  serif;
            }
  </style>

 </head>
 <body class="body">
   <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#36454F; color: #fff;">
     <img src="cert_logo.png" alt="" style="width: 90px; height: 70px;position:relative; object-fit:contain;">
 <a class="navbar-brand text-light" href="#" style="font-size:18px; font-weight:bold;">DMS</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
   <ul class="navbar-nav" style="font-size:18px; font-weight:bold;">
     <li class="nav-item">
       <a class="nav-link" href="index.php" style=" color: #fff;">Home</a>
     </li>

     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Login
       </a>
       <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="user_login.php">User</a>
         <a class="dropdown-item" href="login-org-user.php">Organization</a>
         <a class="dropdown-item" href="login-admin.php">Admin</a>
       </div>
     </li>
   </ul>
 </div>
</nav>
   <div class="container">
        <div class="row mt-3">
          <div class="col-3">

          </div>

            <div class="col-md-5 offset-md-4 form login-form " style="background-color: #36454F; color: #fff; border-radius:5px;">
                <form action="user_login.php" method="POST" autocomplete="">
                    <h5 class="text-center">Welcome Back</h5>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="user_register.php">Signup now</a></div>
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
