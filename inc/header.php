<!DOCTYPE >
<html lang="en">
 
<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Dynamic Title & Description -->
  <title><?php echo isset($page_title) ? $page_title : "Default Site Title"; ?></title>
  <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "Default description here"; ?>">
  <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : "default, keywords, here"; ?>">

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo isset($canonical_url) ? $canonical_url : "https://gulfbookpublishers.com"; ?>" />

  <!-- Site Verification -->
  <meta name="google-site-verification" content="nAJDykdg_owF6kxwIz3GKw0XtKuuApB3W3UJM5Gg1zM" />

  <!-- Robots -->
  <meta name="robots" content="<?php echo isset($meta_robots) ? $meta_robots : 'index, follow'; ?>">
  <meta name="googlebot" content="<?php echo isset($meta_googlebot) ? $meta_googlebot : 'index, follow'; ?>">
  <meta name="bingbot" content="<?php echo isset($meta_bingbot) ? $meta_bingbot : 'index, follow'; ?>">

  <!-- Favicons -->
  <link rel="icon" href="/assets/images/favicon.png" type="image/png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">

<!-- Fonts & CSS -->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Delius&family=Playwrite+AU+QLD:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://gulfbookpublishers.com/cdn.gulfbookpublisher.com/assets/frontend/css/homeb6e3.css">

<!-- Extra tweaks -->
<style>
  /* Ensure main-header uses Roboto */
  .main-header * {
    font-family: 'Roboto', sans-serif;
  }

  /* Banner h1 fix */
  section.main-banner h1.h1::after {
    background: none !important;
    content: none !important;
    display: none !important;
  }
</style>

</head>


  <body>
    <header class="main-header pt-0 pb-0" id="scroll-control">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://gulfbookpublishers.com/">
              <img src="assets/images/Gulf-book-publisher.png" class="img-fluid   order-page-none" alt="Gulf Book Publishers" title="Gulf Book Publishers" loading="lazy" width=251 height=76 />
              <img src="assets/images/Gulf-book-publisher.png" class="img-fluid   order-page-show d-none" alt="Gulf Book Publishers" title="Gulf Book Publishers" loading="lazy" width=251 height=76 />
            </a>
            <button class="navbar-toggler" type=button data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="order-page-show d-none">
                <a href="https://gulfbookpublishers.com/" class="btn-back">
                  <i class="fa-solid fa-arrow-left"></i> Go Back </a>
                <button class="btn-chat" onclick="if (!window.__cfRLUnblockHandlers) return false; openLiveChat()" data-cf-modified-9b4d7f62c18db9fd06d0b09e-="">Need Help</button>
              </div>
              <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                  <span class="nav-link dropdown-toggle" id="navbarDropdownMenuLinkCompany" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Company </span>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkCompany">
                    <a class="dropdown-item " href="about-us.php"> About us </a>
                    <a class="dropdown-item " href="how-to-become-author.php"> How to Become An Author </a>
                  </div>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link " href="books.php"> Books </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="showcased-author.php"> Authors </a>
                </li> -->
                <li class="nav-item dropdown">
                  <span class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Locations </span>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <!-- UAE -->
                  <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/ae.svg" title="uae" alt="uae" class=" " width=25 height=25 loading="lazy" /> UAE 
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-uae.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-uae.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                    <!-- Saudia   -->
                     <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/sa.svg" title="saudi" alt="saudi" class=" " width=25 height=25 loading="lazy" />Saudi Arabia 
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-saudi-arabia.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-saudi-arabia.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                    <!-- Qatar -->
                     <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/qa.svg" title="qatar" alt="qatar" class=" " width=25 height=25 loading="lazy" />Qatar 
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-qatar.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-qatar.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                    <!-- oman -->
                         <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/om.svg" title="oman" alt="oman" class=" " width=25 height=25 loading="lazy" />Oman 
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-oman.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-oman.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                    <!-- Bahrain -->
                  <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/bh.svg" title="BH" alt="BH" class=" " width=25 height=25 loading="lazy" /> Bahrain 
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-bahrain.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-bahrain.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                    <!-- Iraq -->
                     <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/iq.svg" title="iraq" alt="iraq" class=" " width=25 height=25 loading="lazy" /> Iraq 
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-iraq.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-iraq.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                    <!-- Kuwait -->
                     <div class="dropend">
                      <a class="dropdown-item dropdown-toggle " href="#">
                        <img src="assets/images/kw.svg" title="kuwait" alt="kuwait" class=" " width=25 height=25 loading="lazy" /> Kuwait
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="book-publishing-kuwait.php"> Book Publishing </a>
                          <a class="dropdown-item" href="book-printing-kuwait.php"> Book Printing </a>
                        </li>
                      </ul>
                    </div>
                   
                   
                   
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="user/reviews.html">Reviews</a>
                </li>
                <li class="nav-item">
                  <button onclick="if (!window.__cfRLUnblockHandlers) return false; openLiveChat()" class="btn-order" data-cf-modified-9b4d7f62c18db9fd06d0b09e-="">
                    <i class="fa-solid fa-comment"></i> Live Chat </button>
                </li>
                <li class="nav-item">
                  <a href="user/get-free-quote.html" class="btn-live">Get a FREE Quote </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>


    
    <script>
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 10) {
      header.classList.add("fixed-top");
    } else {
      header.classList.remove("fixed-top");
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
