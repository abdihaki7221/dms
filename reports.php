<?php include('head.php');
include('db_connect.php') ;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body onload="print()">
    <div class="text-center">
      <img src="cert_logo.png" alt="" style="object-fit: contain; width: 80px; height:60px;">
  </div>
  <div class="text-center mt-2" style="font-weight:200;">
    <h6>User reports</h6>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10 mt-2">
          <table class="table border">
    <thead>
      <tr>

        <th scope="col">Number of users</th>
        <th scope="col">Number of User Certicates</th>
        <th scope="col">Number of Org Certificates</th>
        <th scope="col">Number of Organizations</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td><?php $select_sql = "SELECT * FROM users";
        $execute_sql = mysqli_query($conn,$select_sql);
        $num_users = mysqli_num_rows($execute_sql);
        echo $num_users;
         ?></td>
        <td><?php $select_sql = "SELECT * FROM user_certificates";
        $execute_sql = mysqli_query($conn,$select_sql);
        $num_users = mysqli_num_rows($execute_sql);
        echo $num_users;
         ?></td>
        <td><?php $select_sql = "SELECT * FROM org_certificates";
        $execute_sql = mysqli_query($conn,$select_sql);
        $num_users = mysqli_num_rows($execute_sql);
        echo $num_users;
         ?></td>
        <td><?php $select_sql = "SELECT * FROM org_users";
        $execute_sql = mysqli_query($conn,$select_sql);
        $num_users = mysqli_num_rows($execute_sql);
        echo $num_users;
         ?></td>

      </tr>

    </tbody>
  </table>
        </div>
        <div class="col-1">

        </div>
      </div>
    </div>

    <div class="text-center mt-2">
      <h6>Certificate Report status</h6>
    </div>
    <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6 mt-2">
        <table class="table border">
  <thead>
    <tr>

      <th scope="col">Active</th>
      <th scope="col">Locked</th>
      <th scope="col">In Active</th>

    </tr>
  </thead>
  <tbody>
    <tr>

      <td><?php $select_sql = "SELECT * FROM org_certificates WHERE doc_status = 'Active'";
      $execute_sql = mysqli_query($conn,$select_sql);
      $num_users = mysqli_num_rows($execute_sql);
      echo $num_users;
       ?></td>
      <td><?php $select_sql = "SELECT * FROM org_certificates WHERE doc_status = 'Locked'";
      $execute_sql = mysqli_query($conn,$select_sql);
      $num_users = mysqli_num_rows($execute_sql);
      echo $num_users;
       ?></td>
      <td><?php $select_sql = "SELECT * FROM org_certificates WHERE doc_status = 'In Active'";
      $execute_sql = mysqli_query($conn,$select_sql);
      $num_users = mysqli_num_rows($execute_sql);
      echo $num_users;
       ?></td>


    </tr>

  </tbody>
</table>
      </div>
      <div class="col-3">

      </div>
    </div>
  </div>
  </body>
</html>
