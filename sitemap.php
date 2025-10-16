<?php
// Dynamic Meta Variables for SEO
$page_title = "Site Map | Gulf Book Publishers";
$meta_description = "Publish your book with us! We offer print-on-demand for authors in GCCwith reliability. Publish your masterpiece today! ";
$meta_keywords = "self publishing UAE, self publishing Saudi Arabia, self publish Qatar, self publishing Oman, self publishing Bahrain, self publishing Kuwait, Gulf book publishers, affordable book publishing GCC, editing and printing books, distribution for authors Gulf, publish your book UAE, publish your book KSA, Gulf authors publishing, book publishing services GCC, UAE book publishing services";
$canonical_url = "https://gulfbookpublishers.com/sitemap.php";

// Robots for this page
$meta_robots = "noindex, nofollow"; 
$meta_googlebot = "noindex, nofollow";
$meta_bingbot = "noindex, nofollow";

// Include header.php
include('inc/header.php');
?>
  <style>
    h1 {
      text-align: center;
      margin:  0;
font-family: "DM Serif Display";
    }

    h2 {
      background-color: #8268f0;
      color: #fff;
      margin: 0px;
      font-size: 1.5rem;
      border-radius: 8px;
      padding: 0;
      padding: 10px;font-family: "DM Serif Display";
    }

    .sitemap-list {
      list-style: none;
      padding-left: 0;
      margin-top: 20px;
      display: grid;
      grid-template-columns: repeat(4, minmax(200px, 1fr));
      gap: 10px 30px;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
      .sitemap-list {
        grid-template-columns: repeat(3, minmax(180px, 1fr));
      }
    }

    @media (max-width: 992px) {
      .sitemap-list {
        grid-template-columns: repeat(2, minmax(150px, 1fr));
      }
    }

    @media (max-width: 576px) {
      .sitemap-list {
        grid-template-columns: repeat(1, minmax(100%, 1fr));
      }
    }

    .sitemap-list li {
      display: flex;
      align-items: center;
    }

    .sitemap-list li::before {
      content: "✔";
      display: inline-block;
      width: 24px;
      height: 24px;
      background-color: #8268f0;
      color: #fff;
      border-radius: 50%;
      text-align: center;
      line-height: 24px;
      margin-right: 10px;
      flex-shrink: 0;
    }

    .sitemap-list a {
      color: black;
      text-decoration: none;
      font-weight:600;
      font-size:16px;
      font-family: Roboto, sans-serif;
      white-space: nowrap;
    }

    .sitemap-list a:hover {
      text-decoration: underline;
    }
    #sitemap-container {
    all: unset;
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* padding-top: 100px; */
    padding: 10px 50px;
    padding-top: 150px;
}
  </style>
</head>
<body>

<div class="container" id='sitemap-container'>
  <h1>SITEMAP OUR AGENCY</h1>

  <!-- OUR COMPANY Section -->
  <h2>OUR COMPANY</h2>
  <ul class="sitemap-list">
    <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About Us</a></li>
    <li><a href="how-to-become-author.php">Author</a></li>
    <li><a href="user/reviews.html">Reviews</a></li>
    <li><a href="user/get-free-quote.html">Get Free Quote</a></li>
    <li><a href="contact-us.php">Contact Us</a></li>
    <li><a href="terms.php">Terms And Conditions</a></li>
    <li><a href="privacy-policy.php">Privacy Policy</a></li>
  </ul>

  <!-- SERVICES PAGES Section -->
  <h2>Services Pages</h2>
  <ul class="sitemap-list">
    <li><a href="book-publishing-uae.php">Book Publishing UAE</a></li>
    <li><a href="book-publishing-saudi-arabia.php">Book Publishing Saudi Arabia</a></li>
    <li><a href="book-publishing-qatar.php">Book Publishing Qatar</a></li>
    <li><a href="book-publishing-oman.php">Book Publishing Oman</a></li>
    <li><a href="book-publishing-bahrain.php">Book Publishing Bahrain</a></li>
    <li><a href="book-publishing-iraq.php">Book Publishing Iraq</a></li>
    <li><a href="book-publishing-kuwait.php">Book Publishing Kuwait</a></li>
    <li><a href="book-printing-uae.php">Book Printing UAE</a></li>
    <li><a href="book-printing-saudi-arabia.php">Book Printing Saudi Arabia</a></li>
    <li><a href="book-printing-qatar.php">Book Printing Qatar</a></li>
    <li><a href="book-printing-oman.php">Book Printing Oman</a></li>
    <li><a href="book-printing-bahrain.php">Book Printing Bahrain</a></li>
    <li><a href="book-printing-iraq.php">Book Printing Iraq</a></li>
    <li><a href="book-printing-kuwait.php">Book Printing Kuwait</a></li>
    <li><a href="wikipedia-page-creation.php">Wikipedia Page Creation</a></li>
  </ul>
</div>


<?php include('inc/footer.php'); ?>