<!DOCTYPE html><html><head><meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>BigWing</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet"/>
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.php"><span>PSYCHOZ</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gestion1.html">gestion1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gestion2.html">egstion2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gestion3.html">gestion3</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="forum.php">forum</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
    <form class="container" action="add_q.php" method="POST">

<div >
    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
    <input type="text" class="form-control" name="titre" minlength="15" required>
</div>
<div >
    <label for="exampleInputEmail1" class="form-label">Description de la question</label>
    <textarea class="form-control" name="descriptionn" minlength="10" maxlength="30" required></textarea>
</div>
<div>
    <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
    <textarea type="text" class="form-control" name="contenu" minlength="75" maxlength="500"required></textarea>
</div>

<!--<button type="submit" class="btn-box slider_detail-box" name="validate">Publier la question</button>-->
<input type="submit" value="publier">

</form>
    </section>
    <!-- end slider section -->
  </div>
  <!-- end service section -->
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h2>Contact Us</h2>
      <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
    </div>
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">Name</label>
            <input type="text" class="form-control" id="inputName4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4"/>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber4">Phone number</label>
            <input type="tel" class="form-control" id="inputNumber4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Select Service</label>
            <select id="inputState" class="form-control">
              <option selected=""></option>
              <option>...</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputMessage">Message</label>
          <input type="text" class="form-control" id="inputMessage" placeholder=""/>
        </div>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="">Send</button>
    </div>
    </form>
  </section>
  <!-- end contact section -->
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">BigWing</h3>
      </div>
      <div class="container info_content">
        <div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>Useful Link</h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">About Us</a>
                  </li>
                  <li>
                    <a href="">About services</a>
                  </li>
                  <li>
                    <a href="">About Departments</a>
                  </li>
                  <li>
                    <a href="">Services</a>
                  </li>
                  <li>
                    <a href="">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>The Services</h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">About Us</a>
                  </li>
                  <li>
                    <a href="">About services</a>
                  </li>
                  <li>
                    <a href="">About Departments</a>
                  </li>
                  <li>
                    <a href="">Services</a>
                  </li>
                  <li>
                    <a href="">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>Contact Us</h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">About Us</a>
                  </li>
                  <li>
                    <a href="">About services</a>
                  </li>
                  <li>
                    <a href="">About Departments</a>
                  </li>
                  <li>
                    <a href="">Services</a>
                  </li>
                  <li>
                    <a href="">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href=""><img src="images/fb.png" alt=""/></a>
            <a href=""><img src="images/twitter.png" alt=""/></a>
            <a href=""><img src="images/linkedin1.png" alt=""/></a>
            <a href=""><img src="images/instagram1.png" alt=""/></a>
          </div>
        </div>
      </div>
    </section>
    <!-- end info_section -->
    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>© 2019 All Rights Reserved By<a href="https://html.design/">Free Html Templates</a></p>
    </section>
    <!-- footer section -->
  </div>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
