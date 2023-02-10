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
          <th scope='col'>verification</th>
          <th scope='col'>View</th>
            <th scope='col'>Edit</th>






        </tr>
      </thead>

        <?php





                $select_cert = "SELECT * FROM user_certificates WHERE verify ='Verified' ";
                 $result_parcel_select = mysqli_query($conn,$select_cert);
                 while ($row_items = mysqli_fetch_assoc($result_parcel_select)) {
                   $inst_id = $row_items['cert_id'];
                   $org_name = $row_items['org_cert'];
                   $cert_title = $row_items['cert_title'];
                   $doc_status = $row_items['verify'];
                   $product_image=$row_items['cert_doc'];



                    echo "
                  <tbody>
                  <tr>
                    <th scope='row'>$inst_id</th>
                    <td>$cert_title</td>
                    <td>$org_name</td>
                    <td>$doc_status</td>

                    <td>
                    <a href = 'product_images/$product_image'><i class='fa-solid fa-eye-slash text-dark' style='font-size:22px;'></i>

                    </a>
                    </td>

                    <td>
                    <a href = 'verify_doc_edit.php?cert_id= $inst_id''><i class='fa-solid fa-file-pen' style='font-size:22px;'></i></a>
                    </td>






                  </tr>

                </tbody>



                      ";
                       }





         ?>
         </table>
         </form>



      </div>
    </div>

  </body>
</html>
