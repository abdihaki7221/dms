<?php





 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="row">
      <div class="col-3">

      </div>
      <div class="col-9 mt-4" >
    <form action='' method='post'  enctype="multipart/form-data">
        <table class='table'>
      <thead class='thead text-white' style='background-color: #36454F;'>
        <tr>
          <th scope='col'>Organization Number</th>
          <th scope='col'>Certicate Title</th>
          <th scope='col'>Organization Name</th>
          <th scope='col'>Status</th>
          <th scope='col'>View</th>

              <th scope='col'>Download</th>




        </tr>
      </thead>

        <?php

        $user_id = $_GET['active'];

        $sql = "SELECT * FROM usertable WHERE id = '$user_id'";
        $result = mysqli_query($conn,$sql);
        while ($raw_data = mysqli_fetch_assoc($result)) {

                 $owner_id = $raw_data['national_id'];

                $select_cert = "SELECT * FROM org_certificates WHERE owner_id = '$owner_id' AND doc_status ='Active' ";
                 $result_parcel_select = mysqli_query($conn,$select_cert);
                 while ($row_items = mysqli_fetch_assoc($result_parcel_select)) {
                   $inst_id = $row_items['cert_id'];
                   $org_name = $row_items['org_name'];
                   $cert_title = $row_items['cert_title'];
                   $doc_status = $row_items['doc_status'];
                   $product_image=$row_items['cert_file'];



                    echo "
                  <tbody>
                  <tr>
                    <th scope='row'>$inst_id</th>
                    <td>$cert_title</td>
                    <td>$org_name</td>
                    <td>$doc_status</td>

                    <td>
                    <a href = 'product_images/$product_image'><i class='fa-solid fa-eye text-dark' style='font-size:22px;'></i>

                    </a>
                    </td>



                    <td>
                    <div class='text-center'>
                    <a href = 'download_cert.php?file=$product_image'><i class='fa-solid fa-download text-success' style='font-size:22px; '></i>

                    </a>
                    </div>
                    </td>





                  </tr>

                </tbody>



                      ";
                       }
                  }




         ?>
         </table>
         </form>



      </div>
    </div>

  </body>
</html>
