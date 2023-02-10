<?php
include 'head.php';
include 'db_connect.php';

$user_id = $_GET['user_id'];

  $msg="";
  $sql = "SELECT * FROM org_users WHERE org_id= '$user_id'";
  $sql_result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_assoc($sql_result);
  $org_name = $rows['org_name'];
  $org_id = $rows['org_id'];
  $org_tel = $rows['org_tel'];
  $org_email = $rows['org_email'];


  if (isset($_POST['update'])) {
    $org_name = $_POST['org_name'];
    $org_tel = $_POST['org_tel'];
    $org_email = $_POST['org_email'];


    $sql_update = "UPDATE org_users set org_name = '$org_name',org_tel = '$org_tel',
    org_email = '$org_email'
    WHERE org_id = '$user_id'
    ";

    $update_result = mysqli_query($conn,$sql_update);
    if ($update_result) {
      $msg="Records updated successfully";
    }else {
      echo "failed";
    }

  }



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="css\bootstrap.min.css">

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" />


       <!-- Place your kit's code here -->
       <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>
  </head>
  <body class="body">
    <div class="container">
      <div class="row mt-5">
        <div class="col-2">

        </div>
        <div class="col-8">
          <div class="card" style="">
            <div class="card-body">
              <h5 class="card-title">Update delivery status</h5>
              <?php
              if ($msg) {
                echo "<div class='alert alert-success' role='alert'>
                  $msg
                </div>";
              }

               ?>
              <form method="post">


                        <!--org name-->
                        <label for="formGroupExampleInput " class="text-primary">Organization Name</label>
                     <div class="input-group mb-3" id="inputGroup-sizing-default">


                        <input type="text text-dark" class="form-control" name="org_name"  value="<?php echo "$org_name";?>" aria-label="Username" aria-describedby="basic-addon1" required ="required">

                     </div>
                     <!--email-->
                     <label for="formGroupExampleInput " class="text-primary">Organization Email</label>
                  <div class="input-group mb-3" id="inputGroup-sizing-default">


                     <input type="text text-dark" class="form-control" name="org_email"  value="<?php echo "$org_email";?>"  aria-label="Username" aria-describedby="basic-addon1" required ="required">

                  </div>

                  <!--org contact-->
                  <label for="formGroupExampleInput " class="text-primary">Organization Contact</label>
                  <div class="input-group mb-3" id="inputGroup-sizing-default">


                     <input type="text text-dark" class="form-control" name="org_tel"  value="<?php echo "$org_tel";?>"  aria-label="Username" aria-describedby="basic-addon1" required ="required">

                  </div>










                    <div class="mt-2">
                      <a href="admin_dashboard.php?manage_users" class="btn" style="background-color: #F88379; color: #fff;">Close</a>
                      <a href=""><input type="submit" name ="update" class="btn btn-primary" value = "Update"></a>
                    </div>

                </form>

            </div>
          </div>
        </div>
        <div class="col-2">

        </div>
      </div>
    </div>


<script type="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </body>
</html>
