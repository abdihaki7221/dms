<?php
session_start();

include 'db_connect.php';

if (!isset($_SESSION['USER_ID'])) {
     header("location:org_login.php");
    die();
}




 ?>


<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css\bootstrap.min.css">


    <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" />


    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Add jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-file-doc '></i>

      <span class="logo_name">DMS</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-file-blank' ></i>
            <span class="link_name">Certificates</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Certificates</a></li>

          <li><a href="org_dashboard.php?upload_doc">Upload</a></li>

          <li><a href="org_dashboard.php?manage_doc=<?php $sql = "SELECT * FROM org_users";
          $result = mysqli_query($conn,$sql);
       $raw_data = mysqli_fetch_assoc($result);
                  $user_id  = $raw_data['org_id'];
                   $org_name = $raw_data['org_name'];

                   echo "$user_id";
                  ?>">Manage</a></li>

                 <!--active-->
          <li><a href="org_dashboard.php?Active=<?php $sql = "SELECT * FROM org_users";
          $result = mysqli_query($conn,$sql);
       $raw_data = mysqli_fetch_assoc($result);
                  $user_id  = $raw_data['org_id'];
                   $org_name = $raw_data['org_name'];

                   echo "$user_id";
                  ?>">Active</a></li>

                  <!--locked-->
          <li><a href="org_dashboard.php?Locked=<?php $sql = "SELECT * FROM org_users";
          $result = mysqli_query($conn,$sql);
       $raw_data = mysqli_fetch_assoc($result);
                  $user_id  = $raw_data['org_id'];
                   $org_name = $raw_data['org_name'];

                   echo "$user_id";
                  ?>">Locked </a></li>
          <li><a href="org_dashboard.php?In-Active=<?php $sql = "SELECT * FROM org_users";
          $result = mysqli_query($conn,$sql);
       $raw_data = mysqli_fetch_assoc($result);
                  $user_id  = $raw_data['org_id'];
                   $org_name = $raw_data['org_name'];

                   echo "$user_id";
                  ?>">In-Active </a></li>

        </ul>
      </li>

      <li>
        <a href="org_dashboard.php?change=<?php $sql = "SELECT * FROM org_users";
        $result = mysqli_query($conn,$sql);
     $raw_data = mysqli_fetch_assoc($result);
                $user_id  = $raw_data['org_id'];
                 $org_name = $raw_data['org_name'];

                 echo "$user_id";
                ?>">
          <i class='bx bx-lock'></i>
          <span class="link_name">Change Password</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="org_dashboard.php?change=<?php $sql = "SELECT * FROM org_users";
          $result = mysqli_query($conn,$sql);
       $raw_data = mysqli_fetch_assoc($result);
                  $user_id  = $raw_data['org_id'];
                   $org_name = $raw_data['org_name'];

                   echo "$user_id";
                  ?>">Change Password</a></li>
        </ul>
      </li>

      <li>
        <a href="org_login.php">
          <i class='bx bx-log-out'></i>
          <span class="link_name">Log Out</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="org_login.php">Log Out</a></li>
        </ul>
      </li>





</ul>
  </div>
  <section class="home-section mt-2" id="dash_section" >
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Offering Org Dashboard</span>
    </div>
  </section>
  <div class="row">


  <div class="col-6">

  </div>

  <div class="col-sm-5 my-2 col-md-9 offset-md-0 mt-3">


    <?php



    if (isset($_GET['upload_doc'])) {

      include ('org_upload_doc.php');
      // code...
    }

    if (isset($_GET['manage_doc'])) {

      include ('org_manage_doc.php');
      // code...
    }
    if (isset($_GET['Active'])) {

      include ('org_active.php');
      // code...
    }
    if (isset($_GET['Locked'])) {

      include ('org_locked.php');
      // code...
    }
    if (isset($_GET['In-Active'])) {

      include ('org_inActive.php');
      // code...
    }

    if (isset($_GET['change'])) {

      include ('change_pass.php');
      // code...
    }







     ?>
       </div>
         </div>

  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>


  <script type="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>
