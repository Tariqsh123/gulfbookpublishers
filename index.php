<?php
// Dynamic Meta Variables for SEO
$page_title = "Self Publishing in UAE, KSA & GCC | Gulf Book Publishers";
$meta_description = "Self-publish across UAE, Saudi, Qatar, Oman, Bahrain & Kuwait. Affordable editing, printing & distribution trusted by 1,000+ Gulf authors.";
$meta_keywords = "self publishing UAE, self publishing Saudi Arabia, self publish Qatar, self publishing Oman, self publishing Bahrain, self publishing Kuwait, Gulf book publishers, affordable book publishing GCC, editing and printing books, distribution for authors Gulf, publish your book UAE, publish your book KSA, Gulf authors publishing, book publishing services GCC, UAE book publishing services";
$canonical_url = "https://gulfbookpublishers.com";

// Robots for this page
$meta_robots = "index, follow"; 
$meta_googlebot = "index, follow";
$meta_bingbot = "index, follow";

// Include header.php
include('inc/header.php');
?>

<section class="main-banner text-center text-lg-start">
  <div class="container">
    <div class="row gy-5 gx-5 align-items-center">
      <div class="col-lg-6">
      
<h1 class="h1">
  Book Publishing Services in  <span class="text-highlight" > Gulf </span>that Open Doors for Your Story
</h1>

        <p style="font-family: 'Poppins', 'sans-serif';font-weight: 400; font-style: normal;">
          Transform your manuscript into a masterpiece with Gulf Book Publishers! Combining Amazon KDP publishing expertise with deep regional insight, we help authors publish their books successfully across the UAE, Saudi Arabia, Qatar, Oman, Bahrain, and Kuwait—while reaching readers worldwide.
        </p>
                <!-- Logo Container -->
        <div id="header-logo-wrapper">
  <div id="header-logo-container">
    <img src="assets/images/amazon-kindle.webp" alt="amazon-kindle">
    <img src="assets/images/Barnes&Noble.png" alt="Barnes&Noble">
    <img src="assets/images/Rakuten-Kobo-logo.png" alt="Rakuten_Kobo_logo">
    <img src="assets/images/IngramSpark.jpg" alt="IngramSpark">
    <img src="assets/images/Google-Books.png" alt="Google Books">
    <img src="assets/images/Lulu-logo.png" alt="Lulu logo">

    <!-- duplicate logos for seamless looping -->
    <img src="assets/images/amazon-kindle.webp" alt="amazon-kindle">
    <img src="assets/images/Barnes&Noble.png" alt="Barnes&Noble">
    <img src="assets/images/Rakuten-Kobo-logo.png" alt="Rakuten_Kobo_logo">
    <img src="assets/images/IngramSpark.jpg" alt="IngramSpark">
    <img src="assets/images/Google-Books.png" alt="Google Books">
    <img src="assets/images/Lulu-logo.png" alt="Lulu logo">
  </div>
</div>

        <a href="user/get-free-quote.html" class="btn-live" >
          Start Publishing Now
        </a>
       <a href="contact-us.php" class="btn-order"  >
  Connect with Experts
</a>
        <div class="images-box">
          <img src="assets/images/amazon-(1).webp" class="img-fluid" alt="Amazon" title="Amazon" loading="eager" width="98" height="44" />
          <a href="#">
            <img src="assets/images/trustpilot.webp" class="img-fluid" alt="Trustpilot" title="Trustpilot" loading="eager" width="99" height="44" />
          </a>
          <img src="assets/images/clutch.webp" class="img-fluid" alt="Clutch" title="Clutch" loading="eager" width="98" height="44" />
        </div>
        <span class="h4" >
          <img src="assets/images/header-small-bg.png" class="img-fluid d-inline-block" alt="Authors" title="Authors" loading="eager" width="160" height="60" />
          Trusted by GCC authors as reputable book publishers 
        </span>
      </div>

      <div class="col-lg-6" id="app">
        <form class="quote-form" method="POST" action="submit.php" enctype="multipart/form-data">
          <h5 class="text-center" >
              
ISBN Registration  Across<span class="text-highlight" > GCC Nations </span>Is Just a Click Away!
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
                <option>Bahrain</option>
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
            <button type="submit" class="btn-order btn-md send"  >
      Submit
    </button>
            </div>
          </div>
        </form>



        
      </div>
    </div>
  </div>
</section>


  <section class="about-area text-lg-start text-center py-lg-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="assets/images/fulf-png-element.png" 
             alt="Best Book Publishers" 
             class="img-fluid mx-auto d-block w-100">
      </div>
      
      <!-- Text Column -->
      <div class="col-lg-6">
        <h2 class="fw-bold display-6 mb-4">
          Your Trusted Self Publishing Company in GCC
        </h2>
        
        <p class="mb-3" style="font-family: 'Poppins', 'sans-serif'; font-weight: 400; font-style: normal;">
          At Gulf Book Publishers, we take pride in guiding authors across the GCC, turning raw manuscripts into polished, market-ready books. Whether you’re just starting your writing journey or are a renowned author, our end-to-end publishing solutions ensure your book makes a lasting impact. 
        </p>
        
        <p class="mb-4" style="font-family: 'Poppins', 'sans-serif'; font-weight: 400; font-style: normal;">
          As a leading expert in publishing and book promotion services, we offer print-on-demand solutions for authors in the GCC, eliminating upfront costs while delivering high-quality paperback and hardcover editions. 
        </p>
        
        <p class="mb-4" style="font-family: 'Poppins', 'sans-serif'; font-weight: 400; font-style: normal;">
          Forget bulk orders and storage stress—our seamless print-on-demand system ensures smooth distribution across the Gulf and beyond. 
        </p>
        
        <p class="mb-4" style="font-family: 'Poppins', 'sans-serif'; font-weight: 400; font-style: normal;">
          Our personalized book marketing campaigns connect your work with the right readers—leveraging Amazon ads, social media promotion, and regional literary networks. 
        </p>
        
        <p class="mb-4" style="font-family: 'Poppins', 'sans-serif'; font-weight: 400; font-style: normal;">
          From eBook formatting to global distribution, Gulf Book Publishers ensures your work is handled with care and expertise. 
        </p>
        
        <a href="user/get-free-quote.html" class="btn-live">Let’s Get Started</a>
        <a href="tel:00971567701024" class="btn-call">
          <i class="fa-solid fa-phone-volume"></i>
          <span><small>Give Us A Call</small> 00971526735118</span>
        </a>
      </div>
    </div>
  </div>
</section>

    <div class="container">
        <hr />
    </div>
    <section class="our-services text-lg-start text-center" >
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-10 mx-auto text-center">
                   <h2 class="h2" >Publish Your Book in the Middle East with Gulf Book Publishers</h2>

                    <p  >Transforming manuscripts into masterpieces, guiding every writer to become a published author </p>
                </div>
            </div>
            <div class="row mb-5 gy-4">
                <div class="col-lg-4 col-md-6 col-12"><img src="assets/images/home-book-writing.png" class="img-fluid  " alt="Book Writing" title="Book Writing" loading="lazy" width=120 height=120 />
                    <div class="cards"><span class="h5"  >Book Writing</span>
                        <p  >Our writers turn your ideas into persuasive manuscripts that capture attention, resonate with readers, and position your work for publishing success across the GCC.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12"><img src="assets/images/home-book-publishing.png" class="img-fluid  " alt="Book Publishing" title="Book Publishing" loading="lazy" width=120 height=120 />
                    <div class="cards"><span class="h5"  >Book Publishing</span>
                    <p>We handle everything from formatting to distribution, delivering expert Amazon Publishing Services to ensure your book reaches both Gulf and international audiences effectively. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12"><img src="assets/images/home-book-editing.png" class="img-fluid  " alt="Book Editing" title="Book Editing" loading="lazy" width=120 height=120 />
                    <div class="cards"><span class="h5"  >Book Editing</span>
                    <p>Our editors refine language, structure, and pacing so your manuscript is polished, engaging, and aligned with professional publishing standards across print and digital platforms. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12"><img src="assets/images/home-book-cover-design.png" class="img-fluid  " alt="Book Cover Design" title="Book Cover Design" loading="lazy" width=120 height=120 />
                    <div class="cards"><span class="h5"  >Book Cover Design</span>
                    <p>We create visually striking, market-ready covers that reflect your book’s essence and core themes, attract readers, and work professionally for both print and eBook formats. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12"><img src="assets/images/home-book-promotion.png" class="img-fluid  " alt="Book Promotion" title="Book Promotion" loading="lazy" width=120 height=120 />
                    <div class="cards"><span class="h5"  >Book Promotion</span>
                    <p>We develop targeted book marketing strategies for Gulf authors, maximizing visibility through Amazon ads, media outreach, and social campaigns customized to your audience. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12"><img src="assets/images/home-book-printing.png" class="img-fluid  " alt="Book Printing" title="Book Printing" loading="lazy" width=120 height=120 />
                    <div class="cards"><span class="h5"  >Book Printing</span>
                    <p>As your self publishing consultant, we arrange quality printing in the GCC, offering cost-effective runs, durable materials, and formats suitable for regional and global markets. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    



<?php include('inc/shining.php'); ?>
<?php include('inc/book-slider.php'); ?>
    <section class="books-slides bg-light text-md-start text-center style="section.books-slides {
  display: none !important;
  visibility: hidden !important;
  height: 0 !important;
  overflow: hidden !important;
}
">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-md-8">
                    <h2 class="h2">Thriving with Our Expert Book Promotion Services </h2></div>
                <div class="col-md-4">
                    <div class="swiper">
                        <div class="arrows">
                            <div class="swiper-button-prev" id="secondprevbtn"></div>
                            <div class="swiper-button-next" id="secondnextbtn"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="swiper banner-slider" dir="rtl">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <a href="user/get-free-quote.html"><img src="assets/images/sample-9.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="user/get-free-quote.html"><img src="assets/images/sample-8.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a>
                    </div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"> <img src="assets/images/sample-10.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"><img src="assets/images/sample-11.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /> </a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"> <img src="assets/images/sample-12.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"><img src="assets/images/sample-13.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /> </a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"> <img src="assets/images/sample-14.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="books-slides text-md-start text-center">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-md-8" style="width:100%">
                    <h2 class="h2"  style="text-align:center;width:100%;font-family: sans-serif; font-weight: 900 !important;" >Trusted ISBN Registration in Middle Eastern Markets for Authors </h2></div>
                            <!-- Logo Container -->
        <div id="header-logo-wrapper">
  <div id="header-logo-container">
    <img src="assets/images/amazon-kindle.webp" alt="amazon-kindle">
    <img src="assets/images/Barnes&Noble.png" alt="Barnes&Noble">
    <img src="assets/images/Rakuten-Kobo-logo.png" alt="Rakuten_Kobo_logo">
    <img src="assets/images/IngramSpark.jpg" alt="IngramSpark">
    <img src="assets/images/Google-Books.png" alt="Google Books">
    <img src="assets/images/Lulu-logo.png" alt="Lulu logo">

    <!-- duplicate logos for seamless looping -->
    <img src="assets/images/amazon-kindle.webp" alt="amazon-kindle">
    <img src="assets/images/Barnes&Noble.png" alt="Barnes&Noble">
    <img src="assets/images/Rakuten-Kobo-logo.png" alt="Rakuten_Kobo_logo">
    <img src="assets/images/IngramSpark.jpg" alt="IngramSpark">
    <img src="assets/images/Google-Books.png" alt="Google Books">
    <img src="assets/images/Lulu-logo.png" alt="Lulu logo">
  </div>
</div>
                <!-- <div class="col-md-4">
                    <div class="swiper">
                        <div class="arrows">
                            <div class="swiper-button-prev" id="thirdprevbtn"></div>
                            <div class="swiper-button-next" id="thirdnextbtn"></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- <div class="container-fluid p-0">
            <div class="swiper book-slider-third">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="user/get-free-quote.html"><img src="assets/images/sample-16.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a> </div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"> <img src="assets/images/sample-17.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"><img src="assets/images/sample-1.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"><img src="assets/images/sample-18.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a> </div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"><img src="assets/images/sample-19.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /> </a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"> <img src="assets/images/sample-20.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                    <div class="swiper-slide"><a href="user/get-free-quote.html"> <img src="assets/images/sample-21.webp" class="img-fluid  " alt="Sample" title="Sample" loading="lazy" width=308 height=420 /></a></div>
                </div>
            </div>
        </div> -->
        <section class="home-bannrwrp">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="port-box">
					<ul class="apport-silder">					 
					  <li class="">
					    <a data-fancybox="port" href="assets/images/book-banner-1.png">
					      <figure>
					        <img src="assets/images/book-banner-1.png" alt="Prime Web Coders">
					      </figure>
					    </a>
					  </li>
					  <li class="">
					    <a data-fancybox="port" href="assets/images/book-banner-1.png">
					      <figure>
					        <img src="assets/images/book-banner-2.png" alt="Prime Web Coders">
					      </figure>
					    </a>
					  </li>
            <li class="">
					    <a data-fancybox="port" href="assets/images/book-banner-1.png">
					      <figure>
					        <img src="assets/images/book-banner-3.png" alt="Prime Web Coders">
					      </figure>
					    </a>
					  </li>
            <li class="">
					    <a data-fancybox="port" href="assets/images/book-banner-1.png">
					      <figure>
					        <img src="assets/images/book-banner-4.png" alt="Prime Web Coders">
					      </figure>
					    </a>
					  </li>		
            <li class="">
					    <a data-fancybox="port" href="assets/images/book-banner-1.png">
					      <figure>
					        <img src="assets/images/book-banner-5.png" alt="Prime Web Coders">
					      </figure>
					    </a>
					  </li>
            <li class="">
					    <a data-fancybox="port" href="assets/images/book-banner-1.png">
					      <figure>
					        <img src="assets/images/book-banner-6.png" alt="Prime Web Coders">
					      </figure>
					    </a>
					  </li>
            
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

    </section>
    <section class="process-area text-center">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="h2"  >Simple and Stress-Free Book Publishing Services Across GCC Nations</h2>
                    <p  >We offer affordable book publishing in UAE solutions that simplify every step from manuscript to market success. </p>
                </div>
            </div>
            <div class="row dash-line">
                <div class="col-12 col-lg-3 col-md-6"><i class="fa-solid fa-dolly"></i><span class="h5"  >Share Your Manuscript </span>
                    <p  >Send us your draft to begin the process, from book editing and design services Gulf to polishing.</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6"><i class="fa-solid fa-book"></i><span class="h5"  >Approve Your Design</span>
                    <p  >Approve Your Design Work with our creative team to finalize covers, layouts, and formatting for print and digital editions. </p>
                </div>
                <div class="col-12 col-lg-3 col-md-6"><i class="fa-solid fa-thumbs-up"></i><span class="h5"  >Choose Printing & Distribution</span>
                    <p  >Select print-on-demand for authors in GCC or bulk printing, plus regional and international distribution options.</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6"><i class="fa-solid fa-clipboard-check"></i><span class="h5"  >Launch & Promote</span>
                    <p  >We handle marketing, sales tracking, and ongoing support so your book reaches readers across multiple markets.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-banner text-lg-start text-center">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="h2" >Tired of complex publishing? Our GCC team handles ISBNs, editing, and distribution so you don’t have to! </h2>
                    <a href="user/get-free-quote.html" class="btn-live">Start Today</a>
                    <a href="tel:00971567701024" class="btn-call"><i class="fa-solid fa-phone-volume"></i><span><small>Place Your Order</small> 00971526735118 </span></a>
                </div>
                <div class="col-lg-6 text-center"><img src="assets/images/national-book-award.webp" class="img-fluid  " alt="National Book Award" title="National Book Award" loading="lazy" width=185 height=209 /><img src="assets/images/pinnacle-book-award.webp"
                    class="img-fluid  " alt="Pinnacle Book Award" title="Pinnacle Book Award" loading="lazy" width=185 height=209 /><img src="assets/images/book-excellence-award.webp" class="img-fluid  "
                    alt="Book Excellence Award" title="Book Excellence Award" loading="lazy" width=185 height=209 /></div>
            </div>
        </div>
    </section>
<?php
$reviews_heading = "Success Stories of Our Book Publishing";
$reviews_text = "Publish your book internationally from UAE with our expert guidance and complete support.";

// Pass 8 reviews
$reviews = [
    [
        'name' => 'Ahmed Kareem',
        'location' => 'Iraq',
        'image' => 'assets/images/Ahmed-Kareem-book-publishing-iraq.jpg',
        'text' => "“Gulf Book Publishers' Amazon publishing services made my thriller a global hit! They gave my novel incredible reach, from the UAE to the USA. Inspired by their professionalism and communication.” "
    ],
    [
        'name' => 'Noura Al-Ghamdi',
        'location' => 'Saudi Arabia',
        'image' => 'assets/images/Noura-Al-Ghamdi-book-printing-saudi.jpg',
        'text' => "“Their eBook formatting expertise saved me months of frustration. My cookbook looks flawless on Kindle and Apple Books—highly recommend for Saudi authors!” "
    ],
    [
        'name' => 'Yousif Al Mahmood',
        'location' => 'Bahrain',
        'image' => 'assets/images/Yousif-Al-Mahmood-book-publishing-bahrain.jpg',
        'text' => "“I’m truly impressed with their complete book editing and publishing services. My memoir was polished, beautifully designed, and launched successfully. Gulf Book Publishers walked me through every step with patience and expertise.” "
    ],
    [
        'name' => 'Layla Al Farsi',
        'location' => 'Abu Dhabi',
        'image' => 'assets/images/Layla-Al-Farsi-book-publishing-uae.jpg',
        'text' => "“Out of all publishing companies in the UAE I’ve spoken to, Gulf Book Publishers offered the most personalized approach. They understood my goals and delivered results beyond expectations. Highly recommended for serious authors.” "
    ],
    [
        'name' => 'Hassan Ali',
        'location' => 'Bahrain',
        'image' => 'assets/images/Hassan-Ali-book-printing-bahrain.jpg',
        'text' => "“Their Amazon KDP publishing support was outstanding. They optimized my categories and keywords perfectly, helping my book rank higher and attract readers far beyond my initial audience in the Gulf.” "
    ],
    [
        'name' => 'Fatima Al-Harbi',
        'location' => 'Muscat',
        'image' => 'assets/images/Fatima-Al-Harbi-book-printing-kuwait.jpg',
        'text' => "“Thanks to their personalized and incredible Amazon marketing services for authors, my novel sold 500+ copies in just 2 months, even reaching readers in Europe! Oman to the world!” "
    ],
];

include('inc/reviews.php');
?>

    <section class="content-area text-lg-start text-center">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-11 mb-3 mx-auto text-center">
                    <h2 class="h2">Stand Out with Reputable Book Publishers Like Us!</h2>
                    <p >Trusted by 1,000+ authors to publish your book in the Middle East with unmatched quality and care. </p>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <h3 class="h5" style="font-family:Bebas Neue, sans-serif;font-size:25px !important;">End-to-End Publishing Expertise </h3>
                        <p>As professional book publishers in the UAE, Saudi Arabia, Qatar, we handle everything from ISBN registration in Gulf countries to global distribution. Our book editing and publishing services include developmental editing, proofreading, and custom cover design, ensuring your manuscript becomes a market-ready masterpiece. Whether you need print-on-demand for authors in GCC or bulk printing, we simplify the process so you can focus on writing. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <h3 class="h5" style="font-family:Bebas Neue, sans-serif;font-size:25px !important;">Specialized Gulf Market Knowledge </h3>
                        <p>From children’s book publishing in the Gulf to academic titles, we understand what sells in the Middle East. Our team provides customized book editing and design services in Gulf that readers love, including bilingual formatting and culturally relevant visuals. We also optimize your book for regional festivals and school curriculums, giving you an edge in this growing market. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <h3 class="h5" style="font-family:Bebas Neue, sans-serif;font-size:25px !important;">Author-Centric Support System </h3>
                        <p>Every client gets a dedicated self-publishing consultant who guides them from draft to launch. Need Amazon marketing services for authors? We’ll draft ads targeting Arabic/English readers across Kindle, social media, and Gulf book fairs. Our transparent pricing and step-by-step updates mean zero surprises—just a stress-free path to becoming a published author. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <h3 class="h5" style="font-family:Bebas Neue, sans-serif;font-size:25px !important;">Proven Global + Local Results </h3>
                        <p>We are not just experts in assisting with self publishing in the UAE, Saudi Arabia, and Qatar, ensuring your book thrives worldwide. Our distribution network includes Amazon, regional bookstore chains, and libraries. Past titles have won awards at the Sharjah Book Fair and topped KDP categories. Whether you’re a debut writer or an established author, we treat your book like our own. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-banner-two text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h2 class="h2" >Turn Your Manuscript into a Gulf Success Story </h2>
                    <p  >Partner with reputable book publisherslike us who handle everything from editing to marketing, making your journey to publication smooth, successful, and effortlessf. </p>
                    <a href="user/get-free-quote.html" class="btn-order"  >Help Me Publish My Book</a><a href="tel:00971567701024"
                    class="btn-call"><i class="fa-solid fa-phone-volume"></i><span  > <small>Place Your Order</small> 00971526735118 </span></a></div>
            </div>
        </div>
    </section>
<?php include('inc/footer.php') ?>