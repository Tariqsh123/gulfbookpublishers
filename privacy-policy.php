<?php
// Dynamic Meta Variables for SEO
$page_title = "Privacy Policy | Gulf Book Publishers";
$meta_description = "Self-publish across UAE, Saudi, Qatar, Oman, Bahrain & Kuwait. Affordable editing, printing & distribution trusted by 1,000+ Gulf authors.";
$meta_keywords = "self publishing UAE, self publishing Saudi Arabia, self publish Qatar, self publishing Oman, self publishing Bahrain, self publishing Kuwait, Gulf book publishers, affordable book publishing GCC, editing and printing books, distribution for authors Gulf, publish your book UAE, publish your book KSA, Gulf authors publishing, book publishing services GCC, UAE book publishing services";
$canonical_url = "https://gulfbookpublishers.com/privacy-policy.php";

// Robots for this page
$meta_robots = "noindex, nofollow"; 
$meta_googlebot = "noindex, nofollow";
$meta_bingbot = "noindex, nofollow";

// Include header.php
include('inc/header.php');
?>

<style>
    .privacy-section {
        padding: 0;
        padding-top:150px;
        background: url(assets/images/banner.webp) ;
        background-repeat:no-repeat;
        background-position:center;
        display:flex;
        flex-direction:column;
        justify-content: center;
        background-size:cover;
    }
    
    .privacy-section p,.privacy-section li{
        padding: 0 !important;
        margin:0 !important;
    }
    .privacy-section h1,
    .privacy-section h2,
    .privacy-section h3,
    .privacy-section h4,
    .privacy-section h5,
    .privacy-section h6 {
        color: #8268f0;
        padding: 0 !important;
        margin:0 !important
    }
   @media (max-width: 991px) {
    .privacy-section {
        padding-top: 100px;
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
    .privacy-section h1 {
        font-size: 32px !important;
    }
    .privacy-section h2 {
        font-size: 25px !important;
    }
    .privacy-section h3 {
        font-size: 22px !important;
    }
    .privacy-section p, 
    .privacy-section li {
        font-size: 16px !important;
    }
}

  @media (max-width: 600px) {
    .privacy-section h1 {
        font-size: 28px !important;
    }
    .privacy-section h2 {
        font-size: 22px !important;
    }
    .privacy-section h3 {
        font-size: 20px !important;
    }
    .privacy-section p, 
    .privacy-section li {
        font-size: small !important;
    }
    
}
.privacy-section h1,
.privacy-section h2,
.privacy-section h3,
.privacy-section p,
.privacy-section ul {
    margin-bottom: 10px !important;
}

</style>

<section class="container privacy-section">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="mb-4">Privacy Policy</h1>
            <p>At <strong>Gulf Book Publishers</strong>, one of our main priorities is the privacy of our visitors. This Privacy Policy document outlines the types of information that is collected and recorded by us and how we use it.</p>

            <h2 class="mt-4">1. Information We Collect</h2>
            <p>We may collect personal identification information including, but not limited to:</p>
            <ul>
                <li>Name</li>
                <li>Email address</li>
                <li>Phone number</li>
                <li>Mailing address</li>
                <li>Any content you submit to us</li>
            </ul>

            <h2 class="mt-4">2. How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide, operate, and maintain our website</li>
                <li>Improve and personalize user experience</li>
                <li>Communicate with you</li>
                <li>Process your orders or submissions</li>
                <li>Send you updates or promotional content</li>
            </ul>

            <h2 class="mt-4">3. Cookies and Tracking</h2>
            <p>We use cookies to enhance your experience. You can choose to disable cookies through your browser settings, but this may affect the functionality of the website.</p>

            <h2 class="mt-4">4. Third-Party Services</h2>
            <p>We may use third-party services (such as payment processors, analytics tools, or marketing tools) that collect data in accordance with their own privacy policies.</p>

            <h2 class="mt-4">5. Data Protection</h2>
            <p>We adopt appropriate data collection, storage, and processing practices and security measures to protect against unauthorized access, alteration, or disclosure of your personal information.</p>

            <h2 class="mt-4">6. Your Rights</h2>
            <p>You have the right to access, update, or delete your personal information by contacting us directly. We comply with data privacy regulations applicable to our region.</p>

            <h2 class="mt-4">7. Children’s Privacy</h2>
            <p>Our website is not directed to children under the age of 13. We do not knowingly collect personal information from children. If we discover that a child under 13 has submitted personal data, we will delete it immediately.</p>

            <h2 class="mt-4">8. Changes to This Privacy Policy</h2>
            <p>We reserve the right to update this Privacy Policy at any time. Changes will be posted on this page with a revised “Last updated” date.</p>

            <h2 class="mt-4">9. Contact Us</h2>
            <p>If you have any questions or concerns about this Privacy Policy, please contact us at: <a href="mailto:info@gulfbookpublishers.com">info@gulfbookpublishers.com</a></p>

            <p class="mt-4"><strong>Last updated:</strong> August 5, 2025</p>
        </div>
    </div>
</section>

<?php include('inc/footer.php'); ?>
