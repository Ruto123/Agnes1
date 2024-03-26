<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
   
    <link rel="shotcut icon" type="image/jpg" href="Media/Logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Agnes Ngala Art - Home</title>
    
</head>
<body>
   
<header>
  <div class="video-container">
    <video autoplay muted loop id="video-poster.jpg">
      <source src="Media/Video 2.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
      <!-- Logo -->
      <div class="logo">
        <a href="Index.php">
          <img src="Media/Logo4.png" alt="Agnes Ngala Art">
        </a>
      </div>

     

      <!-- Navbar Content -->
      <div class="navbar">
        <!-- Close Button -->
        <div class="close-nav">
          <button>×</button>
        </div>
         <div class="menu-bar">
            <button><i></i></button>
        </div>
        
        <!-- Navigation Menu -->
        <nav>
          <ul>
            <!-- List items go here -->
            <li><a href="Studioworks.php">STUDIOWORKS</a>
              <ul class="dropdown">
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">SOMETHING</a></li>
              </ul>
            </li>
            <li><a href="Classes.php">CLASSES</a>
              <ul class="dropdown">
                <li><a href="#">ONLINE CLASSES</a></li>
                <li><a href="#">PORTRAIT CLASSES</a></li>
                <li><a href="#">WATER COLOR CLASSES</a></li>
                <li><a href="#">MIXED MEDIA CLASSES</a></li>
              </ul>
            </li>
            <li><a href="Shop.php">SHOP</a>
              <ul class="dropdown">
                <li><a href="#">ART SHOP</a></li>
                <li><a href="#">GIFT CARDS</a></li>
                <li><a href="#">CREATIVE JOURNALS</a></li>
              </ul>
            </li>
            <li><a href="Blog.php">BLOG</a></li>
            <li><a href="Connect.php">CONNECT</a>
              <ul class="dropdown">
                <li><a href="#">ABOUT AGNES</a></li>
                <li><a href="#">CONTACT US</a></li>
              </ul>
            </li>
            <li><a href="Login.php">LOGIN</a></li>
          </ul>
        </nav>
      </div>
    </div>
   
  </div>
</header>

<div class="container">
                <div class="centertxt">
                       <p>ONLINE CREATIVE CLASSES</p><br>
                </div>
                <div class="centertxt1">
                       <p>Begin your creative journey with us.</p> 
                </div>
                
        </div>
        
        <div class="cinematic-container">
        <div class="cinematic-text">
            <h1>Welcome to Our World</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius faucibus leo, at varius elit aliquam eget. Quisque vitae nunc id ligula laoreet tristique. Nulla facilisi.</p>
            <button class="learn-more-button" onclick="redirectToPage()">Learn More</button>

        </div>
        <div class="cinematic-image">
            <img src="Media/pexels (1).jpg" alt="Cinematic Image">
        </div>
        
    </div>
    <div class="funfact-area section pt-100 pb-50">
    <div class="funfact-container">
        <div class="row">
            <!-- Single Funfact -->
            <div class="col-md-3 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">79</span>+</h2>
                    <h4>Teachers</h4>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-md-3 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">750</span>+</h2>
                    <h4>Students</h4>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-md-3 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">36</span>+</h2>
                    <h4>Courses</h4>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-md-3 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">20</span>+</h2>
                    <h4>Countries</h4>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- footer -->
    
    
<!-- footer -->
<div class="main">

<footer>
  


  
    <div class="zoom">
        <div class="zoom">
        <div class="SocialMedia">
          <a href="https://www.facebook.com/learnwithagnes" target="_blank_"><img src="Media/Logos/fb.png"></a>
          <a href="https://www.instagram.com/artwithagnesngala/" target="_blank_"><img src="Media/Logosinsta.png"></a>
          <a href="https://twitter.com/Artwithagnesng1" target="_blank_"><img src="Media/Logos/x.png"></a>
          <a href="https://www.youtube.com/channel/UCqpKobQBg-ELGCbLlOlbFwg" target="_blank_"><img src="Media/Logos/youtube.png"></a>
        </div>

    </div>


    </div>

    <ul class="menu">
        <li><a href="Index.php">Home</a></li>
        <li><a href="Blog.php">About</a></li>
        <li><a href="Connect.php">Contacts</a></li>
        <li><a href="Studioworks.php">Services</a></li>
        <li><a href="Shop.php">Shop</a></li>
    </ul>

    <p> Powered By: 
           Sigraelfa Solutions &copy; 2023 </p>


</footer>


</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu-bar button');
    const navbar = document.querySelector('.navbar');

    // Function to open the navbar
    function openNavbar() {
      navbar.classList.add('show');
      document.body.classList.add('hide-scroll');
    }

    // Function to close the navbar
    function closeNavbar() {
      navbar.classList.remove('show');
      document.body.classList.remove('hide-scroll');
    }

    // Toggle the navbar when the menu button is clicked
    menuButton.addEventListener('click', function () {
      if (navbar.classList.contains('show')) {
        closeNavbar();
      } else {
        openNavbar();
      }
    });

    // Close the navbar when the close button is clicked
    const closeButton = document.querySelector('.close-nav button');
    closeButton.addEventListener('click', function () {
      closeNavbar();
    });
  });
</script>
<script>
        // JavaScript code for counting numbers
        function startCounting() {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                const duration = 5000; // Adjust the duration (in milliseconds) as needed
                const increment = target / (duration / 16); // Calculate increment per frame

                let currentCount = 0;

                const updateCount = () => {
                    currentCount += increment;
                    if (currentCount <= target) {
                        counter.textContent = Math.ceil(currentCount);
                        requestAnimationFrame(updateCount); // Update using requestAnimationFrame
                    } else {
                        counter.textContent = target; // Ensure the final count is exact
                    }
                };

                updateCount();
            });
        }

        // Call the startCounting function when the page is loaded
        window.addEventListener('DOMContentLoaded', startCounting);
    </script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- learn more redirect -->
<script>
    function redirectToPage() {
        // Replace 'your-page-url.html' with the URL of the page you want to redirect to
        window.location.href = 'Connect.php';
    }
</script>

</body>
</html>