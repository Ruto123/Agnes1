<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="smoke.css">
    <link rel="shotcut icon" type="image/jpg" href="Media/Logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Agnes Ngala Art - Connect</title>
</head>
<body>
   
  <header>
    <div class="wrapper">
        <div class="logo">
            <a href="Index.php"><img src="Media/Logo4.png" alt="Agnes Ngala Art"></a>
        </div>
        <div class="navbar">
            <div class="close-nav"><button>×</button></div>
            <nav>
                <ul>
                      <li id="li"> <a href="Studioworks.php">STUDIOWORKS</a>
                        <ul class="dropdown">
                            <li><a href="#">GALLERY</a></li>
                            <li><a href="#">SOMETHING</a></li>
                            
                          </ul>
                      </li>
	                  <li id="li"> <a href="Classes.php">CLASSES</a>
                        <ul class="dropdown">
                            <li><a href="#">ONLINE CLASSES</a></li>
                            <li><a href="#">PORTRAIT CLASSES</a></li>
                            <li><a href="#">WATER COLOR CLASSES</a></li>
                            <li><a href="#">MIXED MEDIA CLASSES</a></li>
                            
                          </ul>
                      </li>
	                  <li id="li"> <a href="Shop.php">SHOP</a>
                        <ul class="dropdown">
                            <li><a href="#">ART SHOP</a></li>
                            <li><a href="#">GIFT CARDS</a></li>
                            <li><a href="#">CREATIVE JOURNALS</a></li>
                            
                          </ul>
                      </li>
	                  <li id="li"> <a href="Blog.php">BLOG</a></li>
	                  <li id="li"> <a href="Connect.php">CONNECT</a></li>
	                  <li id="li"> <a href="Login.php">LOGIN</a></li>
              </ul>
            </nav>
        </div>
        <div class="menu-bar">
            <button><i></i></button>
        </div>
    </div>
</header>
<section>
        <video src="Media/smoke.mp4" autoplay muted ></video>
        
        <h1 class="text">
        <span>MEET</span>    
        <span>AGNES</span>
        </h1>
        <div class="centertxt">
                       <p>JOIN THE REST OF THE WORLD</p><br>
                </div>
                <div class="centertxt1">
                       <p>Connect with artistic artists.</p> 
                </div>
    </section>
 

               
               
               
<div class="about-container">
  <div class="agnes">
    <h3>ABOUT ME</h3>
  </div>
  <div class="split-video">
    <video controls  muted>
      <source src="Media/vid1.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
 </div>
      

        
    <div class="button-container">
        <button class="support-button">
            <span class="button-label">Support</span>
        </button>
    </div>
   
          
    
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


<!-- js tags -->
<!-- icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- menubar -->
<script>
    const theBody = document.querySelector('body');
    const openNav = document.querySelector('.menu-bar button');
    const closeNav = document.querySelector('.close-nav button');
    const Navbar = document.querySelector('.navbar');

    function bodyScroll(){
        if(Navbar.classList.contains('show')){
            theBody.classList.add('hide-scroll');
        }
        else if(theBody.classList.contains('hide-scroll')){
            theBody.classList.remove('hide-scroll');
        }
    }

    function showHide(){
        Navbar.classList.toggle('show');
        bodyScroll();
    }

    openNav.onclick = showHide;
    closeNav.onclick = showHide;
</script>
</body>
</html>
