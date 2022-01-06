<?php session_start();

?>

<?php
  if(isset($_SESSION['username'])){
    if(isset($_SESSION['role'])){
      if($_SESSION['role'] == "user"){
        //header("Location: welcome.php");
      } else {
        header("Location: admin/welcome.php");
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require_once("include/header.php") ?>
    <?php if(!isset($_SESSION['username'])){header('Location: login.php');} ?>
    <title>LiFECLiCK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style media="screen">
        .block-weighted {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: horizontal;
          -webkit-box-direction: normal;
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        .weight-50 {
          -webkit-box-flex: 0;
          -webkit-flex: 0 50%;
          -ms-flex: 0 50%;
          flex: 0 50%;
        }
        .weight-70 {
          -webkit-box-flex: 0;
          -webkit-flex: 0 70%;
          -ms-flex: 0 50%;
          flex: 0 70%;
        }
        .weight-30 {
          -webkit-box-flex: 0;
          -webkit-flex: 0 30%;
          -ms-flex: 0 50%;
          flex: 0 30%;
        }

        .dual-content-left {
          margin-right: 3rem;
        }

        .content-center {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
          -webkit-box-pack: center;
          -webkit-justify-content: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-align: center;
          -webkit-align-items: center;
          -ms-flex-align: center;
          align-items: center;
        }
        .w-layout-grid {
          display: -ms-grid;
          display: grid;
          grid-auto-columns: 1fr;
          -ms-grid-columns: 1fr 1fr;
          grid-template-columns: 1fr 1fr;
          -ms-grid-rows: auto auto;
          grid-template-rows: auto auto;
          grid-row-gap: 16px;
          grid-column-gap: 16px;
        }

        .grid-3 {
          -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
          grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
          -ms-grid-rows: auto;
          grid-template-rows: auto;
        }

        .flex-v {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;

        }

        @media screen and (max-width: 991px) {
          .block-weighted {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
          }
          .dual-content-left {
            margin-right: 0rem;
            margin-bottom: 1.5rem;
          }
          .grid-3 {
            -ms-grid-columns: 1fr;
            grid-template-columns: 1fr;
          }
        }

    </style>
  </head>
  <body>
    <div class="navbar-area">
    <nav class="navbar navbar-expand-lg navbar-light top-nav" style="background-color: #43609C;  ">
      <div style="flex-basis: 50%;">
        <a class="navbar-brand text-light" href="index.php" style="font-weight:600; font-size:40px"><img width="70px" src="assets/logooooo.png" alt="logo">&nbsp;LiFECLiCK</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-basis: 50%; justify-content: flex-end;">
        <div style="display:flex; justify-content: flex-end;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link active-nav text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="medical_clock.php">Medical Clock</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="about_us.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="contact_us.php">Contact Us</a>
            </li>
            <li class="nav-item">
            <?php
              if(isset($_SESSION['username'])){
                if(isset($_SESSION['role'])){
                  if($_SESSION['role'] == 'admin'){
                    ?>
                      <a class="nav-link text-light" href="admin/welcome.php"><?php echo $_SESSION['username'] ?></a>
                    <?php
                  } else {
                    ?>
                      <a class="nav-link text-light" href="welcome.php"><?php echo $_SESSION['username'] ?></a>
                    <?php
                  }
                }

              } else {
              ?>
                <a class="nav-link text-light" href="login.php">Log In</a>
              <?php
              }
            ?>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <section>
      <img src="assets/homepagee.jpg" alt="homepage" style="width:100%;">
    </section>
    <section style="padding:5rem;">
      <div class="block-weighted">
        <div class="weight-70 dual-content-left" "col-lg-6">

          <h1 class="title h1 font-weight-bold">Welcome to LiFECLiCK's Medical Clock</h1>
          <h3 class="h3" style="font-style:italic;font-weight:normal;color: #0399f5;">"Find your companion in your Medical Treatment"</h3>
          <p class="h4">
            <br>Medical Clock an Android App Project is a native android application meant
            <br> to aid the patients of Covid - 19 most preferably the Asymptomatic to remember
            <br>to take their daily medications.
            <br><br> It is also designed for users who need a little help
            <br> keeping track of their medication schedule and who are dedicated to keeping the
            <br>schedule. The application allows the user to store pill objects and multiple alarms
            <br> for those pills.
            <br><br> Alarms have one time of day and can occur on multiple days of the week.
            <br>The user is able to view their pills in a today view and can select date to view medicines.
            <br>In addition, the application stores the history of when each medication was taken;
            <br> this will aid the user in keeping track of their medication usage.
          </p>
        </div>
        <div class="weight-20">
          <img src="assets/App-image.png" alt="" height="75%">
        </div>

      </div>
      <br><br>
      <div class="d-flex justify-content-center ">
        <a href="contact_us.php">
          <button class="btn btn-light text-primary" type="button" name="button" style="border-radius:50px; background-color: #f5f5f5; font-size: 25px; ">Get in touch</button>
        </a>
      </div>

      <section class="about-area pt-70 pb-120" data-scroll-index="2">
      <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-image wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.5s">
            <div class="about-shape"></div>
            <img src="assets/App-image.png" alt="" class="app">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content mt-50 wow fadeInRightBig" data-wow-duration="3s" data-wow-delay="0.5s">
            <div class="section-title">
              <h1 class="title"><span>Comes With All You Need!</span> Download Your's Now</h1>
              <p class="text">Add Medicine, set the alarm and wait :> <br>
              You have the freedom to add any medication you want to take and it's free.</p>
            </div>
            <a href="medical_clock.php" class="main-btn">Get The App</a>
          </div>
        </div>
      </div>
      </div>
      </section>

    </section>
    <?php include("include/design.php") ?>
      <?php include("include/footer.php") ?>
  </body>
</html>
