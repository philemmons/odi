<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Website Design | OnDemand IT</title>";
include_once 'header-bottom.inc';
?>

<body id="toTop">
  <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

  <!-- Hero Section -->
  <header id="main-content">
    <div class="py-6 px-5 text-center bg-img-hero">
      <div class="container-fluid py-5">
        <h1 class="py-1 text-white">Website Design | OnDemand IT</h1>
        <div class="h-bar"></div>
        <p class="col-lg-8 mx-auto lead text-white">Whether you need a one-time update, or ongoing support, we want your website to stay competitive and effective.
        </p>
      </div>
    </div>
  </header>


  <nav class="navbar navbar-expand-lg sticky-top" aria-label="main menu">
    <div class="container-xxl">
      <a class="navbar-brand" href="/">
        <p class="odit-logo-title"><img src="/images/icons/favicon-32x32.png" alt="Flip-flop circuit token" class="pe-2">OnDemand IT</p>

      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="pe-2">MENU</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-2" href="index.php" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="our_story.php">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="purchase.php">Purchase</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="newsletter-april-2024.php">Newsletter</a>
          </li>
          <li class="nav-item" style="border-right: none;">
            <a class="nav-link px-2" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <main>
    More Content Incoming.
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>




</html>