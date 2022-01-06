<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require_once("include/header.php") ?>
    <?php if(!isset($_SESSION['username'])){header('Location: login.php');} ?>
    <?php if(isset($_SESSION['role'])){if($_SESSION['role']=='admin'){header('Location: admin/welcome.php');}} ?>
    <title>LiFECLiCK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <nav class="navbar navbar-expand-lg navbar-light top-nav" style="background-color: #43609C;  ">
      <div style="flex-basis: 50%;">
        <a class="navbar-brand text-light" href="index.php" style="font-weight:600; font-size:40px"><img width="70px" src="assets/logooooo.png" alt="logo">&nbsp;LiFECLiCK</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-basis: 50%; justify-content: flex-end;">
        <div style="display:flex; justify-content:flex-end;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="medical_clock.php">Medical Clock</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active-nav text-light" href="about_us.php">About</a>
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
    <section class="our_team" style="padding:2rem;">
      <div class="block-weighted">
        <div class="weight-50 dual-content-left content-center p-1">
          <img src="assets/logooooo.png" loading="lazy" alt="">
        </div>
        <div class="weight-50 content-center p-1">
          <h1 class="h1">Our Company</h1>
          <p class="text-center h5 ">
            LiFECLiCK & Co. is a new start company in the Philippines known for its <br>
            Medical Clock brand of Digital Alarm Clock.<br>
            The company began launching Medical Clock in September 2021.
          </p>
        </div>
      </div>
    </section>
    <section class="our_team" style="padding:2rem;">
      <div class="block-weighted">
        <div class="weight-50 dual-content-left content-center p-1">
          <img src="assets/vvission.png" loading="lazy" width="35%">
        </div>
        <div class="weight-50 content-center p-1">
          <h1 class="h1">Mission and Vission</h1>
          <p class="text-center h5 ">
            Our Mission is to make your medications as efficient as possible, no matter how stressful it is,<br>
            and to enlighten you to adapt to the demands of your very own healthcare.<br>
            <br>
            Our Vision is to make significant contribution to humanity by improving global health.
          </p>
        </div>
      </div>
    </section>
    <section style="padding:2rem;">
      <div class="w-layout-grid grid-3">
        <div class="flex-v">
          <div class="content-center">
            <img src="assets/ter.png" loading="lazy" alt="" width="150px;" style="border-radius: 50%; border: 5px solid gray  ;">
          </div>
          <div class="content-center" style="padding: 2rem; padding-top:0.5rem;">
            <div class="h3 fw-bold text-center">JESTER KYLE SERCEDILLO</div>
            <div class="h5 fw-normal">BACKEND</div>
            <br>
            <p class="text-center">Jester is the one assigned  to the server side of development where you are primarily focused on how the site works.
              Making updates and changes in addition to monitoring functionality of the site will be your primary responsibility.
              This type of web development usually consists of three parts: a server, an application, and a database.</p>
          </div>
        </div>
        <div class="flex-v">
          <div class="content-center">
            <img src="assets/aye.png" loading="lazy" alt="" width="150px;" style="border-radius: 50%; border: 5px solid gray  ;">
          </div>
          <div class="content-center" style="padding: 2rem; padding-top:0.5rem;">
            <div class="h3 fw-bold text-center">AYEZZA SALVAE DUTERTE</div>
            <div class="h5 fw-normal">FRONTEND</div>
            <br>
            <p class="text-center">Ayezza is responsible to ensure that website visitors can easily interact with the page.
              She do this through the combination of design, technology and programming to code a website's appearance, as well as taking care of debugging.
              As a front end developer she is responsible for the look, feel and ultimately design of the site.</p>
          </div>
        </div>
        <div class="flex-v">
          <div class="content-center">
            <img src="assets/tine.png" loading="lazy" alt="" width="150px;" style="border-radius: 50%; border: 5px solid gray ;">
          </div>
          <div class="content-center" style="padding: 2rem; padding-top:0.5rem;">
            <div class="h3 fw-bold text-center">CHRISTINE JANE CERDINA</div>
            <div class="h5 fw-normal">MARKETING STRATEGIST</div>
            <br>
            <p class="text-center">Christine plan to reach a goal based on what our website is already doing well, and what it's lacking.
              She have to master a wide range of skills and tools in order to stay on top of the ever-growing digital media channels they use to create, deploy, manage, and track campaigns.</p>
          </div>
        </div>
        <div class="flex-v">
          <div class="content-center">
            <img src="assets/ish.png" loading="lazy" alt="" width="150px;" style="border-radius: 50%; border: 5px solid gray  ;">
          </div>
          <div class="content-center" style="padding: 2rem; padding-top:0.5rem;">
            <div class="h3 fw-bold text-center">TRISHA ABELLO</div>
            <div class="h5 fw-normal">CONTENT SPECIALIST</div>
            <br>
            <p class="text-center"><br>Trisha is tasked with creating the content that promotes a brand.
              Content specialist research content and consumer trends, develop content strategies, and create content for a variety of businesses in both print and digital media.</p>
          </div>
        </div>
        <div class="flex-v">
          <div class="content-center">
            <img src="assets/mats.png" loading="lazy" alt="" width="150px;" style="border-radius: 50%; border: 5px solid gray ;">
          </div>
          <div class="content-center" style="padding: 2rem; padding-top:0.5rem;">
            <div class="h4 fw-bold text-center">JOHN CEDRICK MATA</div>
            <div class="h5 fw-normal">DESIGNER</div>
            <br>
            <p class="text-center"><br>John plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips.
              He is responsible for creating the design and layout of a website or web pages. It and can mean working on a brand new website or updating an already existing site.</p>
          </div>
        </div>
      </div>
    </section>
    
      <?php include("include/footer.php") ?>
</html>
