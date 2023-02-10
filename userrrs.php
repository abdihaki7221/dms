<?php
//session_start();
include ('head.php');
include 'db_connect.php';

//if (!isset($_SESSION['USER_ID'])) {
    // header("location:admin_login.php");
    // die();
//}




 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">



 <head>





   <link rel="stylesheet" href="css\bootstrap.min.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" />


   <!-- Place your kit's code here -->
   <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>
 </head>
  <body class="body">
    <nav class="navbar fixed-top navbar-expand-md mb-5 ">

          <div class="container-lg">



            <div class="collapse navbar-collapse justify-content-center  align-center" id="main-nav">

              <ul class="navbar-nav ">
                <nav class="navbar fixed-top navbar-expand-md mb-5 " style="background-color:#36454F;">
                  <div class="col-lg-1 mt-1 mb-1 ms-2" style=" height:60px;">
                    <div class="text-center">
                      <img src="cert_logo.png" alt="" style="object-fit: contain; width: 80px; height:60px;">
                  </div>
                  </div>
                      <div class="container-lg">

                        <a href="#intro" class="navbar-brand">

                          <span class="fw-bold text-white" style="font-size: 16px;">User Dashboard</span>

                        </a>
                        <div class="collapse navbar-collapse justify-content-center  align-center" id="main-nav">
                          <ul class="navbar-nav ">





                            </div>
                            <li class="nav-item align-items-right">
                            <div class="dropdown-center" style="">
                            <button class="btn  dropdown-toggle" type="button" style="width:10rem; color: #fff;" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user "></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="user_login.php">Logout</a></li>

                            </ul>
                            </div>
                          </li>

                          </ul>


                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon "></span>




                          </button>

                          </ul>
                      </div>

                    </nav>





            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>




              </button>

              </div>
          </div>

        </nav>

        <div class="container-flex ms-2 mt-5">
        <div class="row">
          <div class="col-sm-6 col-md-3 mt-3 ">



            <div class="card  shadow card-left" style="width:200px; background-color: #36454F;">
                <div class="card-body  " >
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white" href="user_dashboard.php?dashboard=<?php $sql = "SELECT * FROM users";
                      $result = mysqli_query($conn,$sql);
                      while ($raw_data = mysqli_fetch_assoc($result)) {
                              $user_id  = $raw_data['user_id'];
                               $national_id = $raw_data['national_id'];

                               echo "$user_id";
                             } ?>"><i class="fa-solid fa-gauge me-1"></i>Dashboard</a>
                    </li>




                <!--riders-->
                <li>
              <div class="dropdown " style="background-color: #36454F; ">
              <button class="btn " type="button" style="width:10rem; background-color: #36454F; color: #fff;"data-bs-toggle="dropdown" aria-expanded="false">
              <div class="text-start ms-1">
               <i class="fa-solid fa-file me-1"></i>Documents
              </div>

              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="user_dashboard.php?upload_doc">Upload Documents</a></li>
                <li><a class="dropdown-item" href="user_dashboard.php?manage_doc=<?php $sql = "SELECT * FROM users";
                $result = mysqli_query($conn,$sql);
                while ($raw_data = mysqli_fetch_assoc($result)) {
                        $user_id  = $raw_data['user_id'];
                         $national_id = $raw_data['national_id'];

                         echo "$user_id";
                       } ?>">Manage Document</a></li>
              </ul>
            </div>

            <li class="nav-item">
              <a class="nav-link text-white" href="user_dashboard.php?inActive=<?php $sql = "SELECT * FROM users";
              $result = mysqli_query($conn,$sql);
              while ($raw_data = mysqli_fetch_assoc($result)) {
                      $user_id  = $raw_data['user_id'];
                       $national_id = $raw_data['national_id'];

                       echo "$user_id";
                     } ?>"><i class="fa-solid fa-file-excel me-1"></i>In Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="user_dashboard.php?locked=<?php $sql = "SELECT * FROM users";
              $result = mysqli_query($conn,$sql);
              while ($raw_data = mysqli_fetch_assoc($result)) {
                      $user_id  = $raw_data['user_id'];
                       $national_id = $raw_data['national_id'];

                       echo "$user_id";
                     } ?>"><i class="fa-solid fa-file"></i><i class="fa-solid fa-lock me-1" style="font-size:9px;"></i>Locked</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="user_dashboard.php?active=<?php $sql = "SELECT * FROM users";
              $result = mysqli_query($conn,$sql);
              while ($raw_data = mysqli_fetch_assoc($result)) {
                      $user_id  = $raw_data['user_id'];
                       $national_id = $raw_data['national_id'];

                       echo "$user_id";
                     } ?>"><i class="fa-solid fa-file-circle-check me-1"></i>Active</a>
            </li>


                      </ul>

                </div>

            </div>


          </div>

              <div class="col-sm-6 my-2 col-md-9 offset-md-0 ">


                <?php

                if (isset($_GET['dashboard'])) {

                  include ('owner_dashboard.php');
                  // code...
                }



                if (isset($_GET['upload_doc'])) {

                  include ('upload_doc.php');
                  // code...
                }
                if (isset($_GET['manage_doc'])) {

                  include ('manage_doc.php');
                  // code...
                }
                if (isset($_GET['inActive'])) {

                  include ('user_inActive.php');
                  // code...
                }
                if (isset($_GET['locked'])) {

                  include ('user_locked.php');
                  // code...
                }
                if (isset($_GET['active'])) {

                  include ('user_active.php');
                  // code...
                }






                 ?>
                   </div>

          </div>

      </div>

    </div>









<script type="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


  </body>
</html>
