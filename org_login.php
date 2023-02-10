<?php
 session_start();
 include 'db_connect.php';


 $msg="";
 if (isset($_POST['login'])) {
      //echo "<pre>";
      //print_r($_POST);
      $username=mysqli_real_escape_string($conn,$_POST['username']);
        $login_as=mysqli_real_escape_string($conn,$_POST['login_as']);
      $password=mysqli_real_escape_string($conn,$_POST['password']);
      $pass = md5($password);

      $sql=mysqli_query($conn,"select * from org_users where org_email='$username' && org_password='$pass' && login_as='$login_as' && login_as='offering'");
      $num=mysqli_num_rows($sql);
      if ($num>0) {
           //echo "found";
           $row=mysqli_fetch_assoc($sql);
           $_SESSION['USER_ID']=$row['org_id'];
           $_SESSION['USER_NAME']=$row['org_email'];
           header("location:org_dashboard.php?dashboard");
      }else{
        $sql_query=mysqli_query($conn,"select * from org_users where org_email='$username' && org_password='$pass' && login_as='$login_as' && login_as='verifying'");
        $num_row=mysqli_num_rows($sql_query);
        if($num_row>0) {
          header("location:verify_dashboard.php");
        }
        $msg = "Incorrect Credentials";
      }
 }
 ?>
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
   <div class="row mt-5">


          <div class="col-lg-6 col-sm-6 mt-5 ">

            </div>

        <div class="col-lg-5 col-sm-6 mt-5   rounded  mt-3 border-dark  "style="--bs-border-opacity: 0.4; background-color: #36454F; color: #fff;" >
          <div class="row">
            <div class="col-4">

            </div>
            <div class="col-lg-2 mt-1 bg-light" style="border-radius: 50%;">

            </div>
          </div>
          <div class="text-center">
            <h4 class="p-2 fw-bolder text-light text-align-center fs-3 welcome">Welcome Back <i class="fa-solid fa-user text-danger"></i></h4>
            </div>

            <div class="text-center alert-danger ms-5" style="border-radius:5px;" >
                 <?php echo $msg ?>
            </div>


          <form action="" class="form"  method="post" >

            <div class="col-md-12">







              <div class="p-1 me-1">


            <label for="exampleFormControlInput1" class="form-label text-light fs-5 fw-bold">Email/Username</label>
            <input type="name" class="form-control opacity-50 border-dark" id="exampleFormControlInput1" name="username" required ="required">

          </div>

          <div class="p-1 me-1">

            <select class="custom-select" name="login_as">
          <option selected>Login As</option>
          <option value="offering">Offering Org</option>
          <option value="verifying">Verifying Org</option>

          </select>
      </div>




          <div class=" mb-2 p-1 me-1">
        <label for="exampleFormControlInput1" class="form-label text-light fs-5 fw-bold">Password</label>

        <input type="password" class="form-control opacity-50 border-dark" id="exampleFormControlInput1" name="password" required ="required">

      </div>

      <div class="vertical-center " >
        <input type="submit" class="btn btn-primary mb-4" name="login" value="login">

      </div>



  </form>
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
