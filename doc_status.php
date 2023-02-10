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
          <th scope='col'>certificate Number</th>
          <th scope='col'>Certicate Title</th>
          <th scope='col'>Offering Organization</th>




        </tr>
      </thead>

        <?php



                $select_cert = "SELECT * FROM user_certificates";
                 $result_parcel_select = mysqli_query($conn,$select_cert);
                 while ($row_items = mysqli_fetch_assoc($result_parcel_select)) {
                   $cert_id = $row_items['cert_id'];
                   $cert_title = $row_items['cert_title'];
                   $org_cert = $row_items['org_cert'];
                




                    echo "
                  <tbody>
                  <tr>
                    <th scope='row'>$cert_id</th>
                    <td>$cert_title</td>
                    <td>$org_cert</td>





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
