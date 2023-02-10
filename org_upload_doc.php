<?php

if (isset($_POST['add_products'])) {
  $cert_title=$_POST['cert_title'];
  $org_name=$_POST['org_name'];
  $owner_id=$_POST['owner_id'];
  $doc_status=$_POST['doc_status'];

  //product image
  $product_image = $_FILES['product_image']['name'];


  //access tmp
  $tmp_image = $_FILES['product_image']['tmp_name'];



if ($cert_title =='' or $org_name =='' or $owner_id == '') {
    echo "<script>alert ('ERROR! please fill the certificate details')</script>";
  // code...
}else{
  move_uploaded_file($tmp_image,"./product_images/$product_image");
  $sql = "INSERT INTO `org_certificates` (cert_title,org_name,owner_id,
 cert_file,doc_status)
  VALUES ('$cert_title','$org_name','$owner_id','$product_image','$doc_status')";

    if(mysqli_query($conn, $sql)){

        echo "<script>alert ('Certicates added successfully')</script>";
    }
    else {
      echo "failed";
    }
}


  // code...
}
 ?>

<div class="row">
  <div class="col-3">

  </div>


<div class="col-8 sm-4 shadow mx-2 mt-5 ms-5">
  <form action="" method="post" enctype="multipart/form-data">
    <h6 class="ms-2 me-2">Upload Certicates</h6>
              <!--product name-->
           <div class="input-group mb-3" id="inputGroup-sizing-default">


              <input type="text text-dark" class="form-control ms-2 me-2" name="cert_title"  placeholder="Enter certificate title" aria-label="Username" aria-describedby="basic-addon1" required ="required">

           </div>


           <!--offering org-->
           <div class="input-group mb-3 mt-3" id="inputGroup-sizing-default">
             <select class="form-select" name="org_name" aria-label="select example" required ="required">
               <option value="">Select Organization</option>
               <?php
               $select_query = "SELECT * FROM org_users";
               $result_select = mysqli_query($conn,$select_query);
               while ($raw_data = mysqli_fetch_assoc($result_select)) {

                 $org_name = $raw_data['org_name'];
                 $org_id = $raw_data['org_id'];
                    echo "<option value='$org_name'>$org_name</option>";

                  }

                ?>

             </select>

           </div>

           <!--status-->
           <div class="input-group mb-3 mt-3" id="inputGroup-sizing-default">
             <select class="form-select" name="doc_status" aria-label="select example" required ="required">
               <option value="">Select Status</option>
               <option value="Active">Active</option>
               <option value="Locked">Locked</option>
               <option value="In Active">In Active</option>
             </select>

           </div>

           <!--owner id-->
           <div class="input-group mb-3 mt-3 " id="inputGroup-sizing-default">

              <input type="text " class="form-control ms-2 me-2" name="owner_id"  placeholder="Enter owner id" aria-label="Username" aria-describedby="basic-addon1" required ="required">


           </div>








           <!--product image-->
          <div class="me-2 ms-2">
             <label for="formFile"  class="form-label p-1 ms-1" id="product image">upload certificate</label>
             <input class="form-control" type="file" name="product_image" id="product_image" id="formFile" required ="required">
           </div>









            <div class="d-flex justify-content-center mt-1">
              <input type="submit" name="add_products" class="btn btn-dark text-white p-1 my-2" value="upload">
            </div>




</form>
</div>
</div>
