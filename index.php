<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Website Design | OnDemand IT</title>";
include_once 'header-bottom.inc';
?>

<body id="toTop">
    <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

    <nav class="navbar navbar-expand-lg mcf-navbar-light" aria-label="main menu">
    <div class="container-xxl">
      <a class="navbar-brand" href="/">
        <p class="mcf-logo-title h4"><img src="../images/heart-infinity.png" alt="Heart wreath with infinity through the middle." class="pe-2">Millie's Crazy Flowers</p>

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

  <header id="main-content">
    <div class="container hero-content">
      <div class="row">
        <div class="col-md-6">
          <section aria-label="Website Intro">
            <h1 class="bswash-font h1-ls text-black">Millie's Crazy Flowers</h1>
            <p class="h4 f-italics pe-5">Legacy of love, caring, and lasting friendship towards one another.</p>
            <span class="sr-only">(The above without italics: Legacy of love, caring, and lasting friendship towards one another.)</span>

            <p class="pt-2"> Our artist hand crafts every beautiful flower that no two are alike.</p>
            <p class="h4 f-italics pe-5">Stay tuned for our next "Spring Craft Bazaar", June of 2025!</p>
          </section>
          <div class="pb-5">
            <a href="#discover" class="btn mcf-button p-3 fs-5">Discover</a>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="../images/mcf-wreath.png" class="img-fluid mx-auto" alt="Gorgeous floral wreath shaped like a heart.">
        </div>
      </div>
    </div>
  </header>

  <main>
    More Content Incoming.
  </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>




</html>