<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link rel="shotcut icon" type="image/jpg" href="Media/Logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Agnes Ngala Art - Login</title>
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
                            <li><a href="Studioworks.php#Gallery">GALLERY</a></li>
                            <li><a href="Studioworks.php#Something">SOMETHING</a></li>
                            
                          </ul>
                      </li>
                      <li id="li"> <a href="Classes.php">CLASSES</a>
                        <ul class="dropdown">
                            <li><a href="Classes.php#Online Classes">ONLINE CLASSES</a></li>
                            <li><a href="Classes.php#Potrait Classes">PORTRAIT CLASSES</a></li>
                            <li><a href="Classes.php#Water Color Classes">WATER COLOR CLASSES</a></li>
                            <li><a href="Classes.php#Mixed Media Classes">MIXED MEDIA CLASSES</a></li>
                            
                          </ul>
                      </li>
                      <li id="li"> <a href="Shop.php">SHOP</a>
                        <ul class="dropdown">
                            <li><a href="Shop.php#Art Shop">ART SHOP</a></li>
                            <li><a href="Shop.php#Gift Shop">GIFT CARDS</a></li>
                            <li><a href="Shop.php#Creative Journals">CREATIVE JOURNALS</a></li>
                            
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
     
              
        
    </div>
    </header>
    <div class="logintxt">
        <div class="logintxt1">
            <p>YES YOU NEED AN ACCOUNT.</p><br>
        </div>
        <div class="logintxt2">
            <p>Get unlimited access to our content and classes.</p> 
        </div>
    </div>


    <div id="background-container">
        <div class="background-Right"></div>
        <div class="background-Left"></div>
    </div>
    <div id="slide">
        <div class="top">
            <div class="left">
                <div class="content">
                    <h2>SIGN UP</h2>
                    <form action="logindata.php" method="POST">
                        <div>
                            <input type="text" id="firstName" name="firstName" autocomplete="off" required placeholder="First Name" />
                        </div>
                        <div>
                            <input type="text" id="lastName" name="lastName" autocomplete="off" required placeholder="Last Name" />
                        </div>
                        <div>
                            <input type="email" id="email" name="email" autocomplete="off" required placeholder="Email" />
                        </div>
                        <div>
                            <input type="number" id="number" name="phoneNumber" autocomplete="off" required placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="password" id="password" name="password" autocomplete="off" required placeholder="Password" />
                        </div>
                        <div>
                            <input type="password" id="repeat password" name="repeatPassword" autocomplete="off" required placeholder="Repeat Password" />
                        </div>
                        <input type="submit" class="btn-submit" />
                        <button id="LeftToRight" class="on-off">LOGIN</button>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="content">
                    <h2>LOGIN</h2>
                    <form method="post" onsubmit="return false;">
                        <div>
                            <input type="text" id="email" name="email" autocomplete="off" required placeholder="Email" />
                        </div>
                        <br />
                        <div>
                            <input type="password" id="password" name="password" autocomplete="off" required placeholder="Password" />
                        </div>
                        <button id="RightToLeft" class="on-off">REGISTER</button>
                        <button class="login">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  

    <br> <br>
<!-- footer -->
    
<!-- footer -->
<div class="main">




    <div class="zoom">
        <div class="zoom">
        <div class="SocialMedia">
          <a href="https://www.facebook.com/learnwithagnes" target="_blank_"><img src="Media/Logos/fb.png"></a>
          <a href="https://www.instagram.com/artwithagnesngala/" target="_blank_"><img src="Media/Logos/insta.png"></a>
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



<!-- js links -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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

<script>
    $(document).ready(function () {
        $("#RightToLeft").on("click", function () {
            $("#slide").animate({
                marginLeft: "20%",
            });
            $(".top").animate({
                marginLeft: "100%",
            });
        });
        $("#LeftToRight").on("click", function () {
            $("#slide").animate({
                marginLeft: "50%",
            });
            $(".top").animate({
                marginLeft: "0%",
            });
        });
    });
</script>
</body>
</html>
