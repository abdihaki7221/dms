<?php
include 'db_connect.php';
$select_sql = "SELECT * FROM users";
$result_sql = mysqli_query($conn,$select_sql);
$raw_data = mysqli_fetch_assoc($result_sql);
        $user_id  = $raw_data['user_id'];
         $national_id = $raw_data['national_id'];




if (isset($_GET['delete_cert'])) {
  $delete_cert= $_GET['delete_cert'];
  $select_sql = "SELECT * FROM users";
  $result = mysqli_query($conn,$select_sql);

$sql = "DELETE  FROM user_certificates WHERE cert_id= '$delete_cert'";
$sql_result=mysqli_query($conn,$sql);
if ($sql_result) {
  header('location:user_dashboard.php?dashboard');
}else {
  echo "error occurred";
}

}

 ?>
