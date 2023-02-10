<?php
include 'head.php';
include 'db_connect.php';

$cert_id = $_GET['cert_id'];

  $msg="";
  $sql = "SELECT * FROM user_certificates WHERE cert_id= '$cert_id'";
  $sql_result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_assoc($sql_result);
  $cert_title = $rows['cert_title'];
  $cert_id = $rows['cert_id'];
  $org_cert = $rows['org_cert'];
  $cert_doc = $rows['cert_doc'];



  if (isset($_POST['update'])) {
    $cert_title = $_POST['cert_title'];

    $org_cert = $_POST['org_cert'];
    //product image
    $product_image = $_FILES['product_image']['name'];


    //access tmp
    $tmp_image = $_FILES['product_image']['tmp_name'];

      move_uploaded_file($tmp_image,"./product_images/$product_image");
    $sql_update = "UPDATE user_certificates set cert_title = '$cert_title',
    org_cert = '$org_cert',cert_doc='$product_image'
    WHERE cert_id = '$cert_id'
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
              <h5 class="card-title">Update Certicate Details</h5>
              <?php
              if ($msg) {
                echo "<div class='alert alert-success' role='alert'>
                  $msg
                </div>";
              }

               ?>
              <form method="post" enctype="multipart/form-data">


                        <!--org name-->
                        <label for="formGroupExampleInput " class="text-primary">certificate Title</label>
                     <div class="input-group mb-3" id="inputGroup-sizing-default">


                        <input type="text text-dark" class="form-control" name="cert_title"  value="<?php echo "$cert_title";?>" aria-label="Username" aria-describedby="basic-addon1" required ="required">

                     </div>
                     <!--email-->
                     <label for="formGroupExampleInput " class="text-primary">Offering Organization </label>
                  <div class="input-group mb-3" id="inputGroup-sizing-default">


                     <input type="text text-dark" class="form-control" name="org_cert"  value="<?php echo "$org_cert";?>"  aria-label="Username" aria-describedby="basic-addon1" required ="required">

                  </div>

                  <!--product image-->
                 <div class="me-1 ms-1">
                    <label for="formFile"  class="form-label p-1 ms-1" id="product image">Update Certificate</label>
                    <input class="form-control" type="file" name="product_image" id="product_image"  id="formFile" required ="required">
                  </div>





                    <div class="mt-2">
                      <a href="user_dashboard.php?manage_doc=<?php  $sql = "SELECT * FROM users";
                      $result = mysqli_query($conn,$sql);
                      while ($raw_data = mysqli_fetch_assoc($result)) {
                              $user_id  = $raw_data['user_id'];
                               $national_id = $raw_data['national_id'];

                               echo "$user_id";
                             } ?>" class="btn" style="background-color: #F88379; color: #fff;">Close</a>
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
