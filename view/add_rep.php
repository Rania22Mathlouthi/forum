<?php
include('C:\xampp\htdocs\forum\controller\reponseC.php');
include('C:\xampp\htdocs\forum\model\reponse.php');

$questionc = new questionC();
$id = $_GET['id'];
$question = $questionc->getById($id);

$rep = new reponseC();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_POST["contenu_rep"]) && !empty($_POST['contenu_rep'])) {

    $q = new reponse($_POST['contenu_rep']);
    $rep->addreponse($id, $q);
  }

  if (isset($_POST['delete']) && isset($_POST['id_rep'])) {
    $rep->deletereponse($_POST['id_rep'], $id);

  }

  if (isset($_POST['modify']) && isset($_POST['id_rep']) && !empty($_POST['contenu_rep_updated'])) {
    $q1 = new reponse($_POST['contenu_rep_updated']);
    $rep->updatereponse($_POST['id_rep'], $q1);

}}

$liste = $rep->listereponses($id);

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
                    <li class="nav-item ">
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
          <hr>

          <div class="media forum-item">
            <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50"
                alt="User" /></a>
            <div class="media-body">
              <h3 style="font-size: 20px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                  data-target=".forum-content" class="text-body"><?= $question->username; ?></a></h3>
              <br>
              <h5 style="font-size: 16px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                  data-target=".forum-content" class="text-body"><?= $question->titre; ?></a></h5>

              <h6 style="font-size: 14px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                  data-target=".forum-content" class="text-body"><?= $question->descriptionn; ?></a></h6>

              <p class="text-secondary">
                <?= $question->contenu; ?>
              </p>
              <!-- Contenu de la troisième partie -->

              <div class="text-muted small text-right align-self-right">

                <a href="modifier.php?id=<?= $id; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path style="color:#dedede"
                      d="M13.853 0.146a.5.5 0 0 1 0 .708l-9 9a.5.5 0 0 1-.148.336L3.5 11.5l1.5.5.146-.148a.5.5 0 0 1 .337-.147l9-3a.5.5 0 0 1 .337.938l-9 3a.5.5 0 0 1-.148.047l-1.5.5a.5.5 0 0 1-.648-.648l.5-1.5a.5.5 0 0 1 .047-.148l3-3a.5.5 0 0 1 .708 0zM3.793 11.207l-1.5.5.5-1.5 9-9 .793.793-9 9z" />
                  </svg>
                </a>

                <a href="supprimer.php?id=<?= $id; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path style="color:#dedede"
                      d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                    </path>
                  </svg>
                </a>

                </br>
                <span class="d-none d-sm-inline-block">
                  <?= $question->date_publication; ?>
                </span>
              </div>


              <form method="POST">

                <div>
                  <textarea type="text" class="form-control" name="contenu_rep" required></textarea>

                  <input type="submit" id="publier" value="publier">
                </div>
              </form>

            </div>





          </div>
          <?php foreach ($liste as $r) { ?>

            <div class="card-body p-2 p-sm-3">
              <hr>

              <div class="media forum-item">
                <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                    src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50"
                    alt="User" /></a>
                <div class="media-body">
                  <h3 style="font-size: 20px; font-family: Arial, sans-serif;"><a href="#" data-toggle="collapse"
                      data-target=".forum-content" class="text-body">
                      <?= $r['username']; ?>
                    </a></h3>
                  <br>

                  <p class="text-secondary">
                    <?= $r['contenu_rep']; ?>
                  </p>
                  <?php if ($r['username'] == "rannnnia") { ?>
                    <!-- Contenu de la troisième partie -->

                    <div class="text-muted small text-right align-self-right">

                      <form method="POST">
                        <input type="hidden" name="id_rep" value="<?= $r['id_rep'] ?>">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                          stroke-linejoin="round" class="h-4 w-4" height="2em" width="2em"
                          xmlns="http://www.w3.org/2000/svg">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                        <input type="submit" name="delete" value="delete">
                        </a>


                        <div>
                          <textarea type="text" class="form-control" name="contenu_rep_updated">
                            <?php echo $r['contenu_rep']; ?></textarea>

                          <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                            stroke-linejoin="round" class="h-4 w-4" height="2em" width="2em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                          </svg>

                          <input type="submit" name="modify" value="modify">

                        </div>
                      </form>

                      <span class="d-none d-sm-inline-block">
                        <?= $r['date_publication1']; ?>
                      </span>
                    </div>
                    </br>

                  <?php } ?>





                </div>


              </div>

            </div>
          <?php } ?>




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