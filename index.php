<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Website Design | OnDemand IT</title>";
include_once 'header-bottom.inc';
?>

<body id="toTop">
  <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>
  <!--
  <nav class="navbar navbar-expand-lg odit-navbar" aria-label="main menu">
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
            <a class="nav-link active px-3" href="/" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="#service">Website Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="#maintenance">Website Maintenance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="#survey">Survey Coding</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
-->

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <a class="navbar-brand" href="#">Offcanvas navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
   
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3 mt-lg-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

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

  <main>
    More Content Incoming.
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>




</html>