<?php
if (isset($_POST['add_org'])) {
  $org_name = $_POST['org_name'];
  $org_email = $_POST['org_email'];
  $org_tel = $_POST['org_tel'];
  $org_password =md5($_POST['org_password']);
  $login_as = $_POST['login_as'];




  $sql = "SELECT * FROM org_users WHERE  org_email= '$org_email'";
  $result = mysqli_query($conn,$sql);
  $num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) {
  echo "<script>alert ('ERROR!! Organization already exists')</script>";
}else {
  $insert_sql = "INSERT INTO org_users(org_name,org_email,org_tel,org_password,login_as)
  VALUES('$org_name','$org_email','$org_tel','$org_password','$login_as')";
  $result_insert = mysqli_query($conn,$insert_sql);
  if ($result_insert) {
    echo "<script>alert ('Organization registered successfully ')</script>";
  }
}
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="body">
    <div class="col-8  sm-4 shadow p-2 mt-3">
      <form action="" method="post" enctype="multipart/form-data">

          <h4>Add Organization</h4>
                  <!--org name-->
               <div class="input-group mb-3" id="inputGroup-sizing-default">


                  <input type="text text-dark" class="form-control" name="org_name"  placeholder="Enter Organization name" aria-label="Username" aria-describedby="basic-addon1" required ="required">

               </div>
               <!--org email -->
            <div class="input-group mb-3" id="inputGroup-sizing-default">


               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="org_email" required="required">

            </div>


               <!--org telephone-->
               <div class="input-group mb-3 mt-3" id="inputGroup-sizing-default">

                  <input type="text" class="form-control text-dark" name="org_tel"  placeholder="Enter contact numbers" aria-label="Username" aria-describedby="basic-addon1" required ="required">

               </div>

               <!--login as-->

               <div class="">
                 <select class="custom-select" name="login_as">
               <option selected>Register Organization As:</option>
               <option value="offering">Offering Org</option>
               <option value="verifying">Verifying Org</option>

               </select>

               </div>






               <!--password -->
               <div class="input-group mb-3 mt-3 " id="inputGroup-sizing-default">

                <input type="password" name="org_password" class="form-control" id="exampleInputPassword1" placeholder="Password">


               </div>









                 <div class="d-flex justify-content-center mt-1">
                     <input type="submit" name="add_org" class="btn btn-dark text-white p-1 my-2" value="Register">
                   </div>


    </div>

    </form>

    </div>
  </body>
</html>
