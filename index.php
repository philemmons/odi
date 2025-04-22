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
        <section aria-label="Hero banner">
          <h1 class="py-1 text-white">Website Design | OnDemand IT</h1>
          <div class="h-bar-light"></div>
          <p class="col-lg-8 mx-auto fs-4 py-2 text-white">Whether you need a one-time update, or ongoing support, we want your website to stay competitive and effective.
          </p>
        </section>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 call="fw-bold text-uppercase">Website Services</h2>
        </div>

        <div class="col-sm-8">
          <p class="fw-bold">Maximize Your Online Impact</p>
          <p>Your website is more than just an online presence—it's a vital tool for branding, customer engagement, and business growth. Our website design, branding, and maintenance services ensure your site is visually compelling, secure, and optimized for performance.
          </p>
        </div>
        <div class="col-sm-4">
          <img class="img-thumbnail" src="/images/zero-one-graph.jpg" alt="">
        </div>

        <div class="col-sm-12 fw-bold text-center">.
          <p>We specialize in SEO-driven, accessible web sites designed for small businesses, entrepreneurs, and freelancers. Whether you need one-time updates or ongoing support, we help your website stay competitive and effective.
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="fw-bold fs-3">Custom Website Design & Branding
          </p>
          <ul>
            <li>A professional, mobile-friendly design that strengthens your brand identity and attracts conversions.</li>
            <li>Optimized layouts improve user experience, ensuring customers stay longer and engage more.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">Content Updates & Suppor</p>
          <ul>
            <li>Regularly refreshed, high-quality content keeps your website relevant and engaging.</li>
            <li>Enhances credibility and strengthens customer trust in your brand.</li>
          </ul>
        </div>

        <div class="col-sm-6">
          <p class="fw-bold fs-3">Website Maintenance & Security
          </p>
          <ul>
            <li>Enhances credibility and strengthens customer trust in your brand.</li>
            <li>Keeps your website running smoothly, ensuring reliability for your customers.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">WCAG 2.1 Compliance & Accessibility</p>
          <ul>
            <li>Ensures inclusivity by making your website usable for all visitors, including those with disabilities.</li>
            <li>Helps meet legal requirements and improves overall user experience.</li>
          </ul>
        </div>

        <div class="col-sm-6">
          <p class="fw-bold fs-3">E-Commerce Solutions</p>
          <ul>
            <li>Secure, user-friendly online store setup with seamless checkout experiences.</li>
            <li>Optimized for conversions to increase sales and customer retention.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">Plugin & Software Updates</p>
          <ul>
            <li>Regular maintenance ensures your website remains functional, secure, and compatible with the latest technologies.</li>
            <li>Reduces risks of crashes, broken features, or security vulnerabilities.</li>
          </ul>
        </div>

        <div class="col-sm-6">
          <p class="fw-bold fs-3">SEO & Performance Optimization</p>
          <ul>
            <li>Faster load times, structured data, and keyword strategies improve search rankings.</li>
            <li>Drives organic traffic, making it easier for potential customers to find you.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">Hosting, Domain, and DNS Support</p>
          <ul>
            <li>Reliable hosting solutions ensure speed, uptime, and security for your website.</li>
            <li>Domain and email setup provide a professional and credible online presence.</li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <article>
    <div class="p-1 bg-img-hero">
      <div class="container-fluid py-2">
        <section aria-label="More about us">
          <h3 class="text-white fw-bold text-uppercase">Why Choose Us?</h1>
        </section>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-sm-6">
          <p class="fw-bold fs-3">Brand-Focused Design & Strategy
          </p>
          <ul>
            <li>Your website is crafted to reflect your unique identity, ensuring consistency across all digital platforms.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">SEO-Optimized & Accessible Websites</p>
          <ul>
            <li>Maximizes visibility on search engines while ensuring an inclusive experience for all users.</li>
          </ul>
        </div>

        <div class="col-sm-6">
          <p class="fw-bold fs-3">Flexible Support Options</p>
          <ul>
            <li>Choose between one-time fixes or long-term maintenance plans tailored to your business needs.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">Fast Turnaround Time</p>
          <ul>
            <li>We prioritize efficiency, ensuring your website is up and running without unnecessary delays.</li>
          </ul>
        </div>

        <div class="col-sm-6">
          <p class="fw-bold fs-3">Dedicated Ongoing Support Option</p>
          <ul>
            <li>We provide continuous assistance and improvements, keeping your website modern and competitive.</li>
          </ul>
        </div>
        <div class="col-sm-6">
          <p class="fw-bold fs-3">Competitive Services</p>
          <ul>
            <li>We match or exceed those available in the Monterey area.</li>
          </ul>
        </div>

      </div>
    </div>
  </article>

  <!--
  <aside>
    <div class="py-1 px-1 bg-img-hero">
      <div class="container-fluid py-1">
        <h1 class="py-1 text-white fw-bold text-uppercase">Why Choose Us?</h1>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-6">
        <p class="fw-bold fs-3"></p>
        <ul>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="col-sm-6">
        <p class="fw-bold fs-3"></p>
        <ul>
          <li></li>
          <li></li>
        </ul>
      </div>

      <div class="col-sm-6">
        <p class="fw-bold fs-3"></p>
        <ul>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="col-sm-6">
        <p class="fw-bold fs-3"></p>
        <ul>
          <li></li>
          <li></li>
        </ul>
      </div>

      <div class="col-sm-6">
        <p class="fw-bold fs-3"></p>
        <ul>
          <li></li>
          <li></li>
        </ul>
      </div>
      <div class="col-sm-6">
        <p class="fw-bold fs-3"></p>
        <ul>
          <li></li>
          <li></li>
        </ul>
      </div>
      
    </div>
  </aside>
-->

  <div class="h-bar-dark"></div>

  <aside>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <section aria-label="Call to Action">
            <h3 call="fw-bold">Let's create a website that enhances your brand, engages your audience, and supports your business growth.</h3>
          </section>
        </div>
      </div>
    </div>
  </aside>

  <?php include_once "footer.inc"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>




</html>