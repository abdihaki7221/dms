<?php
include 'db_connect.php';
$select_sql = "SELECT * FROM org_users";
$result_sql = mysqli_query($conn,$select_sql);
$raw_data = mysqli_fetch_assoc($result_sql);
        $user_id  = $raw_data['org_id'];
         $org_email = $raw_data['org_email'];




if (isset($_GET['delete_cert'])) {
  $delete_cert= $_GET['delete_cert'];
  $select_sql = "SELECT * FROM org_users";
  $result = mysqli_query($conn,$select_sql);

$sql = "DELETE  FROM org_certificates WHERE cert_id= '$delete_cert'";
$sql_result=mysqli_query($conn,$sql);
if ($sql_result) {
  header('location:org_dashboard.php?dashboard');
}else {
  echo "error occurred";
}

}

 ?>
