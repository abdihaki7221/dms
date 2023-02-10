<?php

include ('head.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibe" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/26250a0a21.js" crossorigin="anonymous"></script>




  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" />


  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- Add jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<title></title>
<style>
* {
    box-sizing: border-box;
  }

  body {
    margin: 0px;
    font-family: 'segoe ui';

  }
  .container-fluid{
    color: #fff;
    height: 400px;
    width: 100%;
    display: flex;

  }
  .text-center{
    font-family: "Georgia",  serif;
    font-size: 20px;
    font-weight: bold;
  }
.door{
  font-family: "Georgia",  serif;
  font-size: 18px;
  font-weight: bold;
}




  .nav {
    top: 0px;
    height: 90px;
    width: 100%;
    background-color: #fff;
    position: relative;
    margin-bottom: 10px;
  }

  .nav > .nav-header {
    display: inline;
  }

  .nav > .nav-header > .nav-title {
    display: inline-block;
    font-family: "Georgia",  serif;
    padding: 10px 10px 10px 10px;
    font-size: 22px;
    color: #000;
    font-weight: 550;
  }
  .nav > .nav-links {
    font-size: 18px;
    display: inline;
    float: right;

  }
  .nav > .nav-links > ul li a{
    color: #000;
    line-height: 40px;
    font-size: 18px;
    display: block;
    padding: 0 8px;
    text-decoration: none;
    font-family: "Georgia",  serif;

  }
  .nav > .nav-links > ul li a:hover{
    color: #fff;
    font-family: "Georgia",  serif;
    line-height: 40px;
    font-size: 18px;
    display: block;
    padding: 0 8px;
    text-decoration: none;

  }
  .nav > .nav-links > ul{
    list-style: none;
    position: relative;
    padding: 0;
    margin-top: 5px;
    margin-left: 200px;

  }
  .nav > .nav-links > ul li{
    display: inline-block;



  }
  .nav > .nav-links > ul li:hover{

      color: #fff;
      border-radius: 5px;
  }



  .nav > .nav-btn {
     display: none; /*Hide toggle button for desktop*/
   }
    .nav > #nav-check {
     display: none;
   }
   .nav .nav-links ul a.icon{
 margin-left: 80px;
 margin-right: 10px;
 }




  @media (max-width:750px) {
      .nav > .nav-btn {
        display: inline-block;
        position: absolute;
        right: 0px;
        top: 0px;
      }
      .nav > .nav-btn > label {
        height: 50px;
        padding: 13px;
        display: inline-block;
        width: 50px;

      }
      .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
        background-color: rgba(0, 0, 0.5, 0.5);
      }
      .nav > .nav-btn > label > span {
        height: 10px;
        border-top: 2px ;
        display: block;
        width: 25px;

      }

      .nav > .nav-links {
        position: absolute;
        height: 30px;
        transition: all 0.3s ease-in;
        overflow-y: hidden;
        top: 50px;
        display: block;
        width: 100%;


        left: 0px;
      }
      .nav > .nav-links > ul li a {
        display: block;
        width: 100%;
      }

      /*   */



        .nav > .nav-links > ul li{
          padding: 0;
          background-color: #fff;
          display: block;
          margin-bottom: 20px;

        }
        .nav > .nav-links > ul li a{
            margin-left: 40%;
        }
        .nav .nav-links ul a.icon{
          margin-left: 33%;
        }

      /*   */
      .nav > #nav-check:not(:checked) ~ .nav-links {
        height: 0px;
      }
      .nav > #nav-check:checked ~ .nav-links {
        height: calc(100vh - 10px);
        overflow-y: auto;
      }
    }

  .location{
      font-family: "Georgia",  serif;
  }
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#36454F; color: #fff;">
      <img src="cert_logo.png" alt="" style="width: 90px; height: 70px;position:relative; object-fit:contain;">
  <a class="navbar-brand text-light" href="#" style="font-size:18px; font-weight:bold;">DMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav" style="font-size:18px; font-weight:bold;">
      <li class="nav-item">
        <a class="nav-link" href="#Home" style=" color: #fff;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About" style=" color: #fff;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Services" style=" color: #fff;">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contact" style=" color: #fff;">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="user_login.php">User</a>
          <a class="dropdown-item" href="org_login.php">Organization</a>
          <a class="dropdown-item" href="admin_login.php">Admin</a>
        </div>
      </li>
    </ul>
  </div>
</nav>




        <section class="sec-02" id="About">
          <div class="container bg-light">
          <div class="text-center">
              <h4 class="about-us mt-2" >About Us</h4>
          </div>
            <div class="row mt-1">
              <div class="col-4">
                <div class="card-1 shadow-lg" style="width: 19rem;">
                <img class="card-img-top" src="logo.jpg"  style="border-radius:5px;" alt="Card image cap">

              </div>
              </div>
              <div class="col-md-6 px-5 about-info mt-1 mb-1 shadow-lg" style="border-radius: 5px;">
                <p class="">We are a leading platform for managing certificates and documents for organizations and individuals. Our platform enables issuing organizations to easily issue certificates and for verifying organizations to easily verify the authenticity of certificates. The platform also provides a user-friendly dashboard for certificate owners to access their certificates and keep them secure.

With our platform, organizations and individuals can streamline their certificate management processes and ensure the security of their important certificates and documents. We are committed to providing our users with the best possible experience and ensuring that their certificates and documents are always accessible and secure
</p>
              </div>
            </div>
          </div>
        </section>

        <section class="sec-03 mt-3" id="Services">
          <div class="container bg-light">
            <div class="text-center">
              <h4 class="services mt-2 mb-3">Services</h4>
            </div>
            <div class="row mt-1">
              <div class="col-md-6 px-5 door-to-door mt-1 mb-1 shadow-lg" style="border-radius: 5px;">
                <h4 class="">Certicate authentication</h4>
                <p class="">Welcome to our Services section. We are proud to offer a secure and reliable platform for certificate authentication. Our platform is verified by government organizations, ensuring that the certificates you receive through our platform are legitimate and trustworthy. From individual certificates to organizational certificates,
                   we have the resources to help you authenticate your certificates with ease

                  </p>


              </div>
              <div class="col-3 mt-1">
                <div class="card-2 shadow-lg " style="width: 19rem;">
                <img class="card-img-top" src="auth.jpg" alt="Card image cap" style="width:19rem;height:19rem; object-fit: cover; border-radius: 6px;">

              </div>
              </div>

            </div>
          </div>
        </section>
        <section class="sec-04 mt-3">
          <div class="container bg-light">

            <div class="row mt-1 mb-4">

              <div class="col-3">
                <div class="card-3 shadow-lg" style="width: 19rem; ">
                <img class="card-img-top" src="upload.jpg" alt="Card image cap" style="width:19rem;height:19rem; object-fit: cover;">

              </div>
              </div>
              <div class="col-md-6 px-5 parcel-info mt-1  ms-3 shadow-lg" style="border-radius: 5px;">
                <h4 class="">Certicate Storage and Access</h4>
                <p class="">We are dedicated to making the process of certificate storage easy and secure. Our platform offers a one-stop-shop solution for certificate owners,
                  allowing them to store all of their certificates in one place. Our platform is used by leading institutions, ensuring that your certificates are kept safe and
                  accessible whenever you need them.
                  Let us help you simplify your certificate storage process today

</p>


              </div>

            </div>
          </div>
        </section>

        <section class="sec-02" id="Contact">
          <div class="container bg-light">
          <div class="text-center">
              <h4 class="about-us mt-2 " >Contact Us</h4>
          </div>
            <div class="row mt-1 mb-4">
              <div class="col-4">
                <div class="text-start">
                  <h6>Email: dms@gmail.co.ke</h6>

                </div>
                <div class="text-start">
                  <h6>Tel No: 0712345679</h6>
                </div>
              </div>
              <div class="col-md-6 px-5 about-info mt-1 mb-1 shadow-lg" style="border-radius: 5px;">
                <div class="text-start">
                  <h6>Head-Quarters: Nairobi</h6>
                </div>
                <div class="text-start">
                  <h6>Address: P.O BOX 00100</h6>
                </div>
            </div>
          </div>
        </section>






        <script type="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      </body>

  </body>
</html>
