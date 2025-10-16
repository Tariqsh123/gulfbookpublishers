<?php
// Dynamic Meta Variables for SEO
$page_title = "Contact Us | Gulf Book Publishers";
$meta_description = "Get in touch with Gulf Book Publishers. We're here to help with your publishing needs. Contact us today! ";
$meta_keywords = "self publishing UAE, self publishing Saudi Arabia, self publish Qatar, self publishing Oman, self publishing Bahrain, self publishing Kuwait, Gulf book publishers, affordable book publishing GCC, editing and printing books, distribution for authors Gulf, publish your book UAE, publish your book KSA, Gulf authors publishing, book publishing services GCC, UAE book publishing services";
$canonical_url = "https://gulfbookpublishers.com/contact-us.php";

// Robots for this page
$meta_robots = "noindex, nofollow"; 
$meta_googlebot = "noindex, nofollow";
$meta_bingbot = "noindex, nofollow";

// Include header.php
include('inc/header.php');
?>
    <section class="main-banner text-center">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-lg-6 mx-auto">
                    <h1 class="h1" > Talk to Our <span class="text-highlight"> Publishing </span> Team  </h1>
                    <p >Always here to answer your questions and guide you every step of the way. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info">
      <div class="container">
        <div class="row gy-5 gx-5">
          <div class="col-lg-6">
            <img src="assets/images/contact-us.jpg" class="img-fluid d-block mx-auto" alt="Our Publishing Pros" title="Our Publishing Pros" loading="lazy" width=714 height=707 />
          <div class="contact-box">
            <div class="contact-area">
              <i class="fa-solid fa-envelope"></i>
              <span> Email 
                <a class="cont-link" target="_blank" rel="noopener noreferrer" href="mailto:info@gulfbookpublishers.com"> info@gulfbookpublishers.com </a>
              </span>
            </div>
            <div class="contact-area">
              <i class="fa-solid fa-phone"></i>
              <span> Phone 
                <a class="cont-link" target="_blank" rel="noopener noreferrer" href="tel:00971567701024"> 00971526735118 </a>
              </span>
            </div>
          </div>
        </div>

        <style>
          .contact-box{
            margin:20px 0;
            display:flex;
            flex-direction:column;
            gap:30px ;
            border: 10px solid #ffecde;
            padding:10px;
            border-radius:20px;
          }
          .contact-area{
            display:flex;
            flex-direction:row;
            border: 1px solid #gray;
            padding:20px;
            gap:20px;
            background:#ffecde;
            justify-content:left;
            align-item:flex-start;
            border-radius:10px;
            }
          .contact-area i {
    color: #8268f0;
    font-size: 45px;
    background-color: white;
    height: 70px;
    border-radius: 50%;
    width: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
}
          .contact-area span{
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 30px;
            font-weight: 900;
          }
          .contact-area span a{
    color: #8268f0;
            font-size: 20px;
            font-weight: 500;
          } 
          @media (max-width: 600px) {
            section.contact-info {
    padding: 70px 10px;
}
  .contact-area i {
    font-size: 30px;
    height: 50px;
    width: 50px;
  }
  .contact-area span {
    font-size: 20px;
}
.contact-area span a {
    font-size: 15px;
  }       
}  
        </style>


        <!-- Form -->
        <div class="col-lg-6" id="app">
          <form class="quote-form" method="POST" action="submit.php" enctype="multipart/form-data">
            <h5 class="text-center" >
              Gulf's Best <span class="text-highlight" >eBook Publishers</span> Are A Click Away
            </h5>

          
          <div class="row gy-3">
            <!-- Full Name -->
            <div class="col-sm-6">
              <input type="text" name="name" class="form-control" placeholder="Enter your Full Name" required />
            </div>

            <!-- Email -->
            <div class="col-sm-6">
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required />
            </div>

            <!-- Phone Number -->
            <div class="col-sm-6">
             <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone No." required />
            </div>

            <!-- Country Selection -->
            <div class="col-sm-6">
              <!-- <select class="form-control" aria-label="Select Country" required> -->
                <select name="country" class="form-control" required>
                <!-- <option>USA</option> -->
                <option>UAE</option>
                <option>Saudi Arabia</option>
                <option>Qatar</option>
                <option>Oman</option>
                <option>Behrein</option>
                <option>Iraq</option>
                <option>Kuwait</option>
                <!-- Add other countries as needed -->
              </select>
            </div>

            <!-- Genre Selection -->
            <div class="col-sm-6">
              <!-- <select class="form-control" required> -->
                <select name="genre" class="form-control" required>
                <option value="">Select Genre</option>
                <option value="Action-Adventure">Action-Adventure</option>
                <option value="Celebrity Biographies">Celebrity Biographies</option>
                <option value="Classical Drama">Classical Drama</option>
                <option value="Comparative Religion">Comparative Religion</option>
                <option value="Contemporary Romance">Contemporary Romance</option>
                <option value="Cookbooks">Cookbooks</option>
                <option value="Crime">Crime</option>
                <option value="Cyberpunk">Cyberpunk</option>
                <option value="Dystopian">Dystopian</option>
                <option value="Fairy Tale Retellings">Fairy Tale Retellings</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Gothic Horror">Gothic Horror</option>
                <option value="Historical Fiction">Historical Fiction</option>
                <option value="Historical Romance">Historical Romance</option>
                <option value="Horror">Horror</option>
                <option value="Literary Fiction">Literary Fiction</option>
                <option value="Manga">Manga</option>
                <option value="Memoir">Memoir</option>
                <option value="Motivational">Motivational</option>
                <option value="Mystery/Thriller">Mystery/Thriller</option>
                <option value="Paranormal">Paranormal</option>
                <option value="Personal Development">Personal Development</option>
                <option value="Philosophy">Philosophy</option>
                <option value="Picture Books">Picture Books</option>
                <option value="Political Biographies">Political Biographies</option>
                <option value="Psychological Horror">Psychological Horror</option>
                <option value="Psychological Thriller">Psychological Thriller</option>
                <option value="Psychology">Psychology</option>
                <option value="Religion/Spirituality">Religion/Spirituality</option>
                <option value="Romance">Romance</option>
                <option value="Science Fiction">Science Fiction</option>
                <option value="Self-Help">Self-Help</option>
                <option value="Slam Poetry">Slam Poetry</option>
                <option value="Spiritual Guides">Spiritual Guides</option>
                <option value="Superhero Comics">Superhero Comics</option>
                <option value="Survival">Survival</option>
                <option value="Suspense">Suspense</option>
                <option value="Traditional Poetry">Traditional Poetry</option>
                <option value="Travel">Travel</option>
                <option value="Urban Fantasy">Urban Fantasy</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <!-- Artwork Upload -->
            <div class="col-sm-6">
              <label for="artwork" class="label-file">
                <!-- <input type="file" class="form-control" name="artwork[]" id="artwork" multiple /> -->
            <input type="file" name="artwork[]" class="form-control" id="artwork" multiple /> 
            </label>
            </div>

            <!-- Book Title -->
            <div class="col-sm-12">
              <!-- <input type="text" class="form-control" id="book_title" placeholder="Write Your Book Title" required /> -->
               <input type="text" name="book_title" class="form-control" placeholder="Write Your Book Title" required />
            </div>

            <!-- Message -->
            <div class="col-12">
              <!-- <textarea class="form-control" rows="4" maxlength="1500" placeholder="Details" required></textarea> -->
               <textarea name="details" class="form-control" rows="4" maxlength="1500" placeholder="Details" required></textarea>
            </div>

            <!-- Terms and Conditions Checkbox -->
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkBox" name="terms" />
                
                <label class="form-check-label" for="checkBox">
                  By accepting T&C, I'm open to receiving offers and updates
                </label>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12">
            <button type="submit" class="btn-order btn-md send" >
      Submit
    </button>
            </div>
          </div>
        </form>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-banner-two text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9 mx-auto">
                <h2 class="h2">Just a Few Steps to Publish Your Book</h2>
                <p>Share your manuscript with our team, and we’ll shape it for release on today’s leading eBook platforms.</p>
                <a href="user/get-free-quote.html" class="btn-order">Publish My Book</a>
                <a href="tel:00971567701024" class="btn-call">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span><small>Place Your Order</small> 00971526735118</span>
                </a>
            </div>
        </div>
    </div>
</section>

 <?php include('inc/footer.php'); ?>