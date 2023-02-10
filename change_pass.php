<?php

include 'db_connect.php';

$org_id = $_GET['change'];

  $msg="";
  $sql = "SELECT * FROM org_users WHERE org_id= '$org_id'";
  $sql_result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_assoc($sql_result);
  $org_email = $rows['org_email'];
  $org_id = $rows['org_id'];



  if (isset($_POST['change_password'])) {
    $org_email = $_POST['org_email'];

    $pass_key = md5($_POST['org_password']);


    $sql_update = "UPDATE org_users set org_email = '$org_email',
    org_password = '$pass_key' WHERE org_id = '$org_id';
    ";

    $update_result = mysqli_query($conn,$sql_update);
    if ($update_result) {
      $msg="password changed successfully";
      }else {
      echo "failed";
      }
  }




?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  </head>
  <body class="body">
    <div class="container">
      <div class="row mt-5">
        <div class="col-1">

        </div>
        <div class="col-8">
          <div class="card shadow-lg" style="">
            <div class="card-body">
              <h5 class="card-title">Change Password</h5>
              <?php
              if ($msg) {
                echo "<div class='alert alert-success' role='alert'>
                  $msg
                </div>";
              }

               ?>
              <form method="post">


                        <!--org name-->
                     <div class="input-group mb-3" id="inputGroup-sizing-default">


                        <input type="text text-dark" class="form-control" name="org_email"  value="<?php echo "$org_email";?>" aria-label="Username" aria-describedby="basic-addon1" required ="required">

                     </div>


                  <!--org-password-->
               <div class="input-group mb-3" id="inputGroup-sizing-default">


                  <input type="password" class="form-control" id="exampleFormControlInput1" name="org_password"  placeholder="enter new password" aria-label="Username" aria-describedby="basic-addon1" required ="required">

               </div>














                    <div class="mt-2">
                      <a href="org_dashboard.php?dashboard=<?php $sql = "SELECT * FROM org_users";
                      $result = mysqli_query($conn,$sql);
                      $raw_data = mysqli_fetch_assoc($result);
                              $user_id  = $raw_data['org_id'];
                               $org_email = $raw_data['org_email'];

                               echo $user_id;
                              ?>" class="btn" style="background-color: #F88379; color: #fff;">Close</a>
                      <a href=""><input type="submit" name ="change_password" class="btn btn-primary" value = "Update"></a>
                    </div>

                </form>

            </div>
          </div>
        </div>
        <div class="col-2">

        </div>
      </div>
    </div>



  </body>
</html>
