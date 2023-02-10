<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
      .certificate{
        color: #FF00FF;
      }

      .locked{
        color: #00FFFF;
      }
      .cert{
        color: #FF00FF;
      }
      .body{
        font-family: "Georgia",  serif;
      }

    </style>
  </head>
  <body class="body" style="overflow-x: hidden;">

    <div class="row mt-2">
      <div class="col-lg-8  me-4 " style="border-radius:6px; height: 250px;">
        <div class="row">
          <div class="col-sm-6 ">

            <div class='card m-1 shadow' style=' background-color: #36454F;'>
              <div class='card-body '>
                <h5 class='card-title text-light'></i><i class="fa-solid fa-file cert"><i class="fa-solid fa-certificate certificate me-1" style="font-size:12px;"></i></i> Certificates</h5>


                <p class='card-text text-light'><?php

                $user_id = $_GET['dashboard'];

                $sql = "SELECT * FROM org_users WHERE org_id = '$user_id'";
                $result = mysqli_query($conn,$sql);
                while ($raw_data = mysqli_fetch_assoc($result)) {

                         $org_name = $raw_data['org_name'];
                        $select_cert = "SELECT * FROM org_certificates WHERE org_name = '$org_name' ";
                         $result_parcel_select = mysqli_query($conn,$select_cert);
                         $num_rows= mysqli_num_rows($result_parcel_select);




                            echo $num_rows;
                          }


                 ?></p>
              </div>
            </div>
          </div>




          <!--col-2-->
          <div class="col-sm-6">
            <div class="card m-1 shadow" style="background-color: #36454F;">
              <div class="card-body ">
                <h5 class="card-title text-light"><i class="fa-solid fa-file locked"></i><i class="fa-solid fa-lock me-1 locked" style="font-size:9px;"></i></i>Locked</h5>
                <p class="card-text text-light"><?php

                $user_id = $_GET['dashboard'];

                $sql = "SELECT * FROM org_users WHERE org_id = '$user_id'";
                $result = mysqli_query($conn,$sql);
                while ($raw_data = mysqli_fetch_assoc($result)) {

                         $org_name = $raw_data['org_name'];
                        $select_cert = "SELECT * FROM org_certificates WHERE org_name = '$org_name' AND doc_status = 'Locked'";
                         $result_parcel_select = mysqli_query($conn,$select_cert);
                         $num_rows= mysqli_num_rows($result_parcel_select);




                            echo $num_rows;
                          }


                 ?></p>
              </div>
            </div>
          </div>
          </div>

          <div class="row">


          <!--col-3-->
          <div class=" col-sm-6 ">
            <div class="card m-1 shadow" style="background-color: #36454F;">
              <div class="card-body ">
                <h5 class="card-title text-light"><i class="fa-solid fa-file-excel me-1 text-danger"></i>In Active</h5>
                <p class="card-text text-light"><?php

                $user_id = $_GET['dashboard'];

                $sql = "SELECT * FROM org_users WHERE org_id = '$user_id'";
                $result = mysqli_query($conn,$sql);
                while ($raw_data = mysqli_fetch_assoc($result)) {

                         $org_name = $raw_data['org_name'];
                        $select_cert = "SELECT * FROM org_certificates WHERE org_name = '$org_name' AND doc_status = 'In Active'";
                         $result_parcel_select = mysqli_query($conn,$select_cert);
                         $num_rows= mysqli_num_rows($result_parcel_select);




                            echo $num_rows;
                          }


                 ?></p>
              </div>
            </div>
          </div>

          <!--col-4-->
          <div class="col-sm-6 ">
            <div class="card m-1 shadow" style="background-color: #36454F;">
              <div class="card-body ">
                <h5 class="card-title text-light"><i class="fa-solid fa-file-circle-check text-success me-1"></i>Active</h5>
                <p class="card-text text-light"><?php

                $user_id = $_GET['dashboard'];

                $sql = "SELECT * FROM org_users WHERE org_id = '$user_id'";
                $result = mysqli_query($conn,$sql);
                while ($raw_data = mysqli_fetch_assoc($result)) {

                         $org_name = $raw_data['org_name'];
                        $select_cert = "SELECT * FROM org_certificates WHERE org_name = '$org_name' AND doc_status = 'Active'";
                         $result_parcel_select = mysqli_query($conn,$select_cert);
                         $num_rows= mysqli_num_rows($result_parcel_select);




                            echo $num_rows;
                          }


                 ?></p>
              </div>
            </div>
          </div>
            </div>
            </div>

      </div>
    </div>

  </body>
</html>
