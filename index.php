<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Website Design | OnDemand IT</title>";
include_once 'header-bottom.inc';
?>

<body id="toTop">
  <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

  <header id="main-content">
    <!-- Hero Section -->
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 bg-img-hero">
        <div class="col-xl-6 col-lg-7 col-md-9">
          <section class="text-center text-white text-underline align-middle">
            <h1 >Website Design | OnDemand IT</h1>
          </section>
        </div>
      </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg odit-navbar-light" aria-label="main menu">
    <div class="container-xxl">
      <a class="navbar-brand" href="/">
        <p class="odit-logo-title h4"><img src="images\icons\favicon-32x32.png" alt="Flip flop circuit logo" class="pe-2">OnDemand IT</p>

      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="pe-2">Main Menu</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-2" href="/" aria-current="page"><span class="visually-hidden">(current)</span>Website Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="#survey">Survey Coding</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="#about">About Us</a>
          </li>
          <li class="nav-item" style="border-right: none;">
            <a class="nav-link px-2" href="#message">Message</a>
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