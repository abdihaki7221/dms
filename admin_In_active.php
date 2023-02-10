

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
      <div class="col-11 mt-2">
    <form action='' method='post'  enctype="multipart/form-data">
        <table class='table'>
      <thead class='thead text-white' style='background-color: #36454F;'>
        <tr>
          <th scope='col'>Organization Number</th>
          <th scope='col'>Certicate Title</th>
          <th scope='col'>Organization Name</th>
          <th scope='col'>Status</th>




        </tr>
      </thead>

        <?php





                $select_cert = "SELECT * FROM org_certificates WHERE doc_status ='In Active' ";
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
