<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="row">
      <div class="col-10 mt-3">


        <table class='table'>
      <thead class='thead text-white' style='background-color: #36454F;'>
        <tr>
          <th scope='col'>#Number:</th>
          <th scope='col'>Organization  Name</th>
          <th scope='col'>Organization email</th>
          <th scope='col'>Contact</th>
          <th scope='col'>Edit</th>
          <th scope='col'>Remove</th>
        </tr>
      </thead>

        <?php

        $sql = "SELECT * FROM org_users";
        $result = mysqli_query($conn,$sql);
        while ($raw_data = mysqli_fetch_assoc($result)) {
                $org_id  = $raw_data['org_id'];
                 $org_name = $raw_data['org_name'];
                 $org_email = $raw_data['org_email'];
                  $org_tel = $raw_data['org_tel'];


                    echo "
                  <tbody>
                  <tr>
                    <th scope='row'>$org_id</th>
                    <td>$org_name</td>
                    <td>$org_email</td>
                    <td>$org_tel</td>
                    <td>
                    <a href = 'user_edit.php?user_id= $org_id''><i class='fa-solid fa-user-pen' style='font-size: 22px;'></i></a>

                    </a>
                    </td>
                    <td>
                    <div class='text-center'>
                 <a href='delete.php?delete_id=$org_id'>
                  <i class='fa-solid fa-user-xmark text-danger' style='font-size: 22px;'></i></a>
                  </div>


                    </td>
                  </tr>

                </tbody>



                      ";

                  }
         ?>
         </table>

      </div>
    </div>

  </body>
</html>
