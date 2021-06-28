
<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-google-map"></i> A108 Adam Street, NY
    </div>
    <div class="social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html">Medilab</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="<?= base_url()?>">Home</a></li>
        <li class=""><a href="<?= base_url('Admin')?>">Data PPDB</a></li>
        
      </ul>
    </nav><!-- .nav-menu -->

    <a href="<?= base_url('Register/') ?>" class="appointment-btn scrollto">Registrasi</a>

  </div>
</header><!-- End Header -->
