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
      <div class="col-8 sm-4  mx-2 ms-2 mt-4">
    <form action='' method='post'  enctype="multipart/form-data">
        <table class='table'>
      <thead class='thead text-white' style='background-color: #36454F;'>
        <tr>
          <th scope='col'>certificate Number</th>
          <th scope='col'>Certicate Title</th>
          <th scope='col'>Offering Organization</th>
          <th scope='col'>Verification</th>
          <th scope='col'>View</th>
            <th scope='col'>Edit</th>
              <th scope='col'>Download</th>
            <th scope='col'>Delete</th>



        </tr>
      </thead>

        <?php

        $user_id = $_GET['manage_doc'];

        $sql = "SELECT * FROM usertable WHERE id = '$user_id'";
        $result = mysqli_query($conn,$sql);
        while ($raw_data = mysqli_fetch_assoc($result)) {

                 $national_id = $raw_data['national_id'];
                $select_cert = "SELECT * FROM user_certificates WHERE owner_id = '$national_id'";
                 $result_parcel_select = mysqli_query($conn,$select_cert);
                 while ($row_items = mysqli_fetch_assoc($result_parcel_select)) {
                   $cert_id = $row_items['cert_id'];
                   $cert_title = $row_items['cert_title'];
                   $org_cert = $row_items['org_cert'];
                   $product_image=$row_items['cert_doc'];
                   $verify=$row_items['verify'];



                    echo "
                  <tbody>
                  <tr>
                    <th scope='row'>$cert_id</th>
                    <td>$cert_title</td>
                    <td>$org_cert</td>
                    <td>$verify</td>
                    <td>
                    <a href = 'product_images/$product_image'><i class='fa-solid fa-eye text-dark' style='font-size:22px;'></i>

                    </a>
                    </td>

                    <td>
                    <a href = 'user_doc_edit.php?cert_id= $cert_id''><i class='fa-solid fa-file-pen' style='font-size:22px;'></i></a>
                    </td>


                    <td>
                    <div class='text-center'>
                    <a href = 'download_cert.php?file=$product_image'><i class='fa-solid fa-download text-success' style='font-size:22px; '></i>

                    </a>
                    </div>
                    </td>

                    <td>
                    <a href = 'delete_cert.php?delete_cert=$cert_id'><i class='fa-solid fa-trash text-danger' style='font-size:22px;'></i>

                    </a>
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
