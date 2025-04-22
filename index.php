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

  <div class="p-5 text-center bg-body-tertiary">
    <div class="container py-5">
      <h1 class="text-body-emphasis">Full-width jumbotron</h1>
      <p class="col-lg-8 mx-auto lead">
        This takes the basic jumbotron above and makes its background edge-to-edge with a <code>.container</code> inside to align content. Similar to above, it's been recreated with built-in grid and utility classes.
      </p>
    </div>
  </div>


  <main>
    More Content Incoming.
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>




</html>