<?php

require_once 'connection.php';

$sql = "SELECT * FROM artworks";
$all_artworks = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link rel="shotcut icon" type="image/jpg" href="Media/Logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Agnes Ngala Art - Shop</title>
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
</header>

 
        <div class="container">
                <div class="centertxt">
                       <p>OUR ART - SHOP</p><br>
                </div>
                <div class="centertxt1">
                       <p>If you love it, pay and take it home.</p> 
                </div>
                <div class="sliding-background">
                    <div class="slide" style="background-image: url('Media/student.jpg');"></div>
                    <div class="slide" style="background-image: url('Media/student.jpg');"></div>
                    <div class="slide" style="background-image: url('Media/student.jpg');"></div>
                    <div class="slide" style="background-image: url('Media/student.jpg');"></div>
                    
                </div>
            
        
    </div>
    
   <main>
        <?php
        while ($row =mysqli_fetch_assoc($all_artworks)) {       
        ?>
        <div class="card">
            <div class="image">
                <img src="<?php echo $row ["art_image"]; ?>">
            </div>
            <div class="caption">
                <p class="art_Title"> <?php echo $row ["art_title"]; ?></p>
                <p class="art_Price">ONLY:<b> $ <?php echo $row["art_price"]; ?> </b></p>
                <p class="discount">DISCOUNT: <del>$ <?php echo $row["discount"]; ?></del></b></p>
            </div>
            <button class="add">CONTACT US</button>
        </div>
        <?php
    }
        ?>
    </main> 


      
    
<!-- footer -->
<div class="main">

<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
    </div>


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
</body>
</html>
