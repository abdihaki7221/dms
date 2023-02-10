<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: user_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style >
    .body{
            background-image: url('logo.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

            font-family: "Georgia",  serif;
            font-size: 20px;
          }


</style>
</head>
<body class="body">
    <div class="container">
        <div class="row">
          
            <div class="col-md-4 offset-md-4 mt-3 form login-form" style="background-color: #36454F; color: #fff; border-radius:5px;">
            <?php
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center mt-1">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="user_login.php" method="POST">
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
