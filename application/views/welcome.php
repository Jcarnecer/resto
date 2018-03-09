<link rel="stylesheet" type="text/css" href="assets/css/welcome.css">


<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><img src="assets/images/restoshift-logo-white-40.png" alt="Restoshift logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#pricing">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="btn white-btn" href="<?= base_url("users/login") ?>">Login</a>
        </li>
        <li class="nav-item">
            <a class="btn white-btn" href="<?= base_url("companies/register") ?>">Sign Up</a>
        </li>
      </ul>
    </div>
</nav>
      
<div class="container-fluid">
    <div class="row full-page first-fold justify-content-around">
        <div class="col-12 col-md-6 align-self-center align-self-md-center">
            <div style="position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0;">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/dHcm4iCvNK8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-md-5 align-self-top align-self-md-center text-center">
            <!-- <p class="title">Restoshift logo</p> -->
            <img src="assets/images/restoshift-logo-black-60.png" alt="Restoshift logo">
            <p class="lead">Shift Management especially designed for restaurants.</p>
            <!-- <p>The no-frills business productivity suite built for fast-growing businesses.</p> -->
            <button type="button"  class="sign-up-btn d-block mx-auto" data-toggle="modal" data-target="#signUpModal">Get Started</button>
        </div>
    </div>

    <div class="row py-4 p-md-5">
        <div class="col-md-12">
            <h1 class="text-center">What you'll love</h1>
        </div>
        <div class="col-xs-12 col-md-3">
            <img src="assets/images/restoshift-scheduling.gif" alt="Home image thumbnail" class="product-thumb mx-auto d-block img-fluid">
            <h1>Shift Management</h1>
            <p class="lead text-left">
                Create shifts for both back and front of the house with the drag and drop shift assignment.
            </p>
        </div>
        <div class="col-xs-12 col-md-3">
            <img src="assets/images/restoshift-timekeeping.gif" alt="Home image thumbnail" class="product-thumb mx-auto d-block img-fluid">
            <h1>Timekeeping</h1>
            <p class="lead text-left">
                Keep track of employee attendance with timekeeping and leave management feature.
            </p>
        </div>
        <div class="col-xs-12 col-md-3">
            <img src="assets/images/restoshift-bulletin-board.gif" alt="Home image thumbnail" class="product-thumb mx-auto d-block img-fluid">
            <h1>Bulletin Board</h1>
            <p class="lead text-left">
                Release announcements and messages using the built-in bulletin board.
            </p>
        </div>
        <div class="col-xs-12 col-md-3">
            <img src="assets/images/restoshift-chat.gif" alt="Home image thumbnail" class="product-thumb mx-auto d-block img-fluid">
            <h1>Chat</h1>
            <p class="lead text-left">
                Communicate with your team with the chat feature.
            </p>
        </div>
    </div>
    <div class="row plans-section text-center align-items-center" id="pricing">
        <div class="col-md-12">
            <h1 class="text-center">Plans</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
                <p class="plan-name">
                    <br>
                    <h2>FREE</h2>
                    30 days trial
                </p>
                <ul>
                    <!-- <li>App Suite</li> -->
                    <li>Unlimited Users</li>
                </ul>
            <button class="sign-up-btn center">Subscribe</button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <p class="plan-name">
                Single User<br>
                <h2>$7<sup>99</sup></h2>
                <span class="per-month-text">/month</span>
            </p>
            <ul>
                <!-- <li>Single app</li> -->
                <li>One user</li>
            </ul>
            <button class="sign-up-btn center">Subscribe</button>
        </div>
        <!-- <div class="col-xs-12 col-sm-6 col-md-3">
                <p class="plan-name">
                    Company<br>
                    <h2>$29<sup>99</sup></h2>
                    <span class="per-month-text">/month</span>
                </p>
                <ul>
                    <li>Single app</li>
                    <li>Unlimited Users</li>
                </ul>
            <button class="sign-up-btn center">Subscribe</button>
        </div> -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            
            <div class="recommended-plan">
                <div class="recommended-banner">Best Value</div>
                <p class="plan-name">
                    App Suite<br>
                    <h2>$29<sup>99</sup></h2>
                    <span class="per-month-text">/month</span>
                </p>
                <ul>
                    <!-- <li>Single app</li> -->
                    <li>Unlimited Users</li>
                </ul>
                <button class="sign-up-btn center">Subscribe</button>
            </div>
        </div>
    </div>
    <div class="row get-started-section">
        <div class="col-md-12">
            <h1 class="text-center">Now you can have more time for what matters most</h1>
            <button class="sign-up-btn center-block">Get Started</button>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <h6 class="footer-heading">Contact Us</h6>
                <hr class="footer-hr">
                <a href="mailto:information@restoshift.com" class="footer-content">Learn more</a><br>
                <a href="mailto:support@restoshift.com" class="footer-content">Support</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <h6 class="footer-heading">Legal</h6>
                <hr class="footer-hr">
                <a href="#" class="footer-content">Privacy Policy</a><br>
                <a href="#" class="footer-content">Terms and Conditions</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <h6 class="footer-heading">Follow Us</h6>
                <hr class="footer-hr">
                <a href="#" class="footer-icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#" class="footer-icon"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
            </div>
        </div>     
    </div>
</footer>

<script src="assets/js/main.js"></script>
<script>
$(function(){
    $(document).on('click', '.sign-up-btn', function() {
        window.location.href = "<?= base_url('companies/register') ?>";
    });
});
</script>