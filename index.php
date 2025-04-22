<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Website Design | OnDemand IT</title>";
include_once 'header-bottom.inc';
?>

<body id="toTop">
  <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

  <nav class="navbar navbar-expand-lg odit-navbar" aria-label="Offcanvas main menu">
    <div class="container-fluid">

      <a class="navbar-brand" href="/">
        <p class="odit-logo-title"><img src="/images/icons/favicon-32x32.png" alt="Flip-flop circuit token" class="pe-2">OnDemand IT</p>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Main Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link px-3 active" aria-current="page" href="/">Home<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#service">Services & Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#maintenance">Maintenance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#survey">Survey Coding</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#contact">Contact Us</a>
            </li>
          </ul>
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
        <p class="col-lg-8 mx-auto fs-4 py-2 text-white">Whether you need a one-time update, or ongoing support, we want your website to stay competitive and effective.
        </p>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-12">.col-9</div>

        <div class="col-8">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
        <div class="col-4">.col-6<br>Subsequent columns continue along the new line.</div>

        <div class="col-12">.col-9</div>
      </div>
    </div>

    <div class="grid text-center">
      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>
    </div>
  </main>

  <aside>
    <div class="py-6 px-5 bg-img-hero">
      <div class="container-fluid py-5">
        <h1 class="py-1 text-white">Why Choose Us?</h1>
      </div>
    </div>

    <div class="grid text-center">
      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>
    </div>
  </aside>

  <aside>
    <div class="container">
      <div class="row">
        <div class="col-12">.col-9</div>
      </div>
    </div>
  </aside>

  <aside>
    <div class="py-6 px-5 bg-img-hero">
      <div class="container-fluid py-5">
        <h1 class="py-1 text-white">Why Choose Us?</h1>
      </div>
    </div>

    <div class="grid text-center">
      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>
    </div>
  </aside>

  <aside>
    <div class="py-6 px-5 bg-img-hero">
      <div class="container-fluid py-5">
        <h1 class="py-1 text-white">Why Choose Us?</h1>
      </div>
    </div>

    <div class="grid text-center">
      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>

      <div class="g-col-6">.g-col-6</div>
      <div class="g-col-6">.g-col-6</div>
    </div>
  </aside>

  <div class="h-bar-black"></div>

  <?php include_once "footer.inc"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>




</html>