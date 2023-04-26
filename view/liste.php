<?php
include('C:\xampp\htdocs\forum\controller\reponseC.php');

$pc = new questionC();
$liste = $pc->listequestions();
$num_replies = 0; 
$rep = new reponseC();

$num_replies = $rep->num_rep($p['id']);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />


  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>BigWing</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.html">
                <span>
                  BigWing
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">Services </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Login</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- welcome section -->
  <section>

    <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
      <div class="card mb-2">

        <div class="card-body p-2 p-sm-3">
          <?php foreach ($liste as $p) { ?>
            <hr>

            <div class="media forum-item">
              <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                  src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50"
                  alt="User" /></a>
              <div class="media-body">
                <h3 style="font-size: 20px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                    data-target=".forum-content" class="text-body">
                    <?= $p['username']; ?>
                  </a></h3>
                <br>
                <h5 style="font-size: 16px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                    data-target=".forum-content" class="text-body">
                    <?= $p['titre']; ?>
                  </a></h5>
                <div class="text-muted small text-right align-self-right">
                  <a href="add_rep.php?id=<?= $p['id']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                      viewBox="0 0 576 512">
                      <path
                        d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z" />
                    </svg>
                </div>

                <h6 style="font-size: 14px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                    data-target=".forum-content" class="text-body">
                    <?= $p['descriptionn']; ?>
                  </a></h6>

                <p class="text-secondary">
                  <?= $p['contenu']; ?>
                </p>
                <?php if ($p['username'] == "rannnnia") { ?>
                  <!-- Contenu de la troisième partie -->

                  <div class="text-muted small text-right align-self-right">
                  <span><?= $num_replies ?></span>

                    <a href="modifier.php?id=<?= $p['id']; ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path style="color:#dedede"
                          d="M13.853 0.146a.5.5 0 0 1 0 .708l-9 9a.5.5 0 0 1-.148.336L3.5 11.5l1.5.5.146-.148a.5.5 0 0 1 .337-.147l9-3a.5.5 0 0 1 .337.938l-9 3a.5.5 0 0 1-.148.047l-1.5.5a.5.5 0 0 1-.648-.648l.5-1.5a.5.5 0 0 1 .047-.148l3-3a.5.5 0 0 1 .708 0zM3.793 11.207l-1.5.5.5-1.5 9-9 .793.793-9 9z" />
                      </svg>
                    </a>

                    <a href="supprimer.php?id=<?= $p['id']; ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path style="color:#dedede"
                          d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                        </path>
                      </svg>
                    </a>

                    </br>
                    <span class="d-none d-sm-inline-block">
                      <?= $p['date_publication']; ?>
                    </span>
                  </div>





                <?php } else { 
                  

?>
                  <form action="add_rep.php" method="post">

                    <a class="reply-link">
                    <input type="text" name="id" value="<?php echo $p['id'];?>" hidden>

                      <span><?= $num_replies ?></span>
                    </a>
                    <div class="reply-form" style="display: none;">
                      <textarea id="reply-textarea"></textarea>
                      <input type="submit" value="publier">
                    </div>
                </div>
                </form>

              </div>


            <?php } ?>


          </div>

        </div>
      <?php } ?>

    </div>



  </section>


  <!-- end welcome section -->



  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">
          BigWing
        </h3>
      </div>
      <div class="container info_content">

        <div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Useful Link
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  The Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum dolor
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sit amet, consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing elit,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sed do eiusmod
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tempor incididunt
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Contact Us
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum
                    </a>
                  </li>
                  <li>
                    <a href="">
                      dolor sit amet,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing
                    </a>
                  </li>
                  <li>
                    <a href="">
                      elit, sed do eiusmod
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="../images/fb.png" alt="" />
            </a>

            <a href="">
              <img src="../images/twitter.png" alt="" />
            </a>
            <a href="">
              <img src="../images/linkedin1.png" alt="" />
            </a>
            <a href="">
              <img src="../images/instagram1.png" alt="" />
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input type="email" placeholder="Enter Your email" id="subscribeMail" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        © 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->
  </div>


  <script type="../text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="../text/javascript" src="../js/bootstrap.js"></script>
</body>

</html>