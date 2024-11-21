<?php
session_start();
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hihixd</title>   
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="functions.js"></script>
    <script src="https://kit.fontawesome.com/f17013d72c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body onload="javascript:color()">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="i3IoB1Nq"></script>
<header>
  <div class="header-left">
    <div class="logo">
      <img src="img/logo.png" alt="logo">
    </div>
    <nav>
      <ul>
        <li>
          <a href="" class="btn active">Home</a>
        </li>
        <li>
          <ul class="dropdown">
          <a href="#explore" class="btn">Explore&nbsp</a>
          
          <!-- <ul class="dropdown-menu" id = "dropdown-content">
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul> -->
          </ul>
        </li>
        
        <li>
          <a href="#about" class="btn">About us</a>
        </li>
        <li>
          <a href="#services" class="btn">Services</a>
        </li>
        <li>
          <ul class="dropdown">
          <a href="#announcement" class="btn">Announcements&nbsp</i></a>
          <!-- <ul class="dropdown-menu" id = "dropdown-content">
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul> -->
          </ul>
        </li>

      </ul>
      <div class="socmeds">
      <a href="#" class="fa-solid fa-comments"></a>
      <a href="#" class="fa-solid fa-bell"></a>
      <a href="#" class="fa-solid fa-question"></a>
      </div>
    </nav>
  </div>
  <div class="header-right">
    <div class="socmeds">
      <a href="#feedback" class="fa-solid fa-comments"></a>
      <a href="#" class="fa-solid fa-bell"></a>
      <a href="#" class="fa-solid fa-question"></a>
    </div>
    <div class="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  
</header>
<div id="app">
  <div class="home-master-container">
  <div class="text-container">
    <p>ZION ACADEMY</p>
    <div class="text-bg-container"></div>
  </div>
  <div class="img-container">
  <div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
    <p></p>
  <img class="image" src="https://images.unsplash.com/photo-1524781289445-ddf8f5695861?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
  <img class = "image"src="img/pic.jpg" draggable="false">
  <img class = "image"src="img/zion2.jpeg" draggable="false">
  <img class = "image"src="img/zion1.jpeg" draggable="false">
  <img class="image" src="https://images.unsplash.com/photo-1548021682-1720ed403a5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
  <img class="image" src="https://images.unsplash.com/photo-1496753480864-3e588e0269b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2134&q=80" draggable="false" />
  <img class="image" src="https://images.unsplash.com/photo-1613346945084-35cccc812dd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1759&q=80" draggable="false" />
  <img class="image" src="https://images.unsplash.com/photo-1516681100942-77d8e7f9dd97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" draggable="false" />
  <script src="pics.js"></script>
</div>
</div>
<div class="content-header">
  <h1><i class="fa-solid fa-arrow-trend-up"></i> How do we work?</h1>
</div>
<div class="content-container">


<?php
    $sql = "SELECT * FROM home LIMIT 3";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)):
        $id = $row['id'];
        $name = $row['name'];
        $text = $row['text'];
    ?>
    <div class="card">
        <div class="card-content">       
          <h1><?=$name?></h1><br>
          <p><?=$text?></p>
        </div>
    </div>
    <?php endwhile; ?>
</div>

</div><!--the div for "content-container"-->
<div class="home-zion-container">
  <div class="flexbox-zion-container">
    <div class="text-zion-container text1">
      <h2>Why become a <span>ZIONITE?</span></h2>
      <?php
       $sql = "SELECT * FROM home WHERE name = 'ZIONITE'";
       $result = mysqli_query($conn, $sql);
       $row=mysqli_fetch_assoc($result);
      ?>
      <p><?=$row['text']?>
      </p>
    </div>
    <div class="break"></div>
    <div class="text-zion-container text2">
      <h2>What makes us <span>UNIQUE?</span></h2>
      <?php
       $sql = "SELECT * FROM home WHERE name = 'UNIQUE'";
       $result = mysqli_query($conn, $sql);
       $row=mysqli_fetch_assoc($result);
      ?>
      <p><?=$row['text']?>
      </p>
    </div>
    <div class="picture-zion-container">
    </div>
  </div>
</div>








<div class="content-header header2">
  <h1><i class="fa-solid fa-newspaper"></i></i> Enrollment procedures</h1>
</div>

<div class="container-enroll">
  <div class="card-enroll">
    <div class="card-image-enroll">
      <img src="img/step1.png">
    </div>
    <div class="card-text-enroll">
      <?php
      $sql = "SELECT * FROM enrollment WHERE id = 1";
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
      ?>
      <p class="card-meal-type-enroll"><?=$row['header']?></p>
      <h2 class="card-title-enroll"><?=$row['body']?></h2>
      <p class="card-body-enroll"><?=$row['footer']?></p>
    </div>
    <div class="card-price-enroll"><i class="fa-solid fa-arrow-right"></i></div>
  </div>
  <div class="card-enroll">
    <div class="card-image-enroll">
      <img src="img/step2.png">
    </div>
    <div class="card-text-enroll">
      <?php
      $sql = "SELECT * FROM enrollment WHERE id = 2";
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
      ?>
      <p class="card-meal-type-enroll"><?=$row['header']?></p>
      <h2 class="card-title-enroll"><?=$row['body']?></h2>
      <p class="card-body-enroll"><?=$row['footer']?></p>
    </div>
    <div class="card-price-enroll"><i class="fa-solid fa-arrow-right"></i></div>
  </div>
  <div class="card-enroll">
    <div class="card-image-enroll">
      <img src="img/step3.png">
    </div>
    <div class="card-text-enroll">
     <?php
      $sql = "SELECT * FROM enrollment WHERE id = 3";
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
      ?>
      <p class="card-meal-type-enroll"><?=$row['header']?></p>
      <h2 class="card-title-enroll"><?=$row['body']?></h2>
      <p class="card-body-enroll"><?=$row['footer']?></p>
    </div>
    <div class="card-price-enroll"><i class="fa-solid fa-arrow-right"></i></div>
  </div>
</div>



<div class="content-header header3">
  <h1><i class="fa-solid fa-photo-film"></i> Zion photo gallery</h1>
</div>
<div class="photo-gallery-container">
  <div class="photo-wrapper">
    <?php
    $sql ="SELECT * FROM pics";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)):
    ?>
  <img src="img/<?=$row['picture']?>" alt="aaa">
  <?php endwhile;?>
</div>
  </div>
</div>
  </div>
</div>
  </div> <!--the div for "home-master-container"-->
<script src="route.js"></script>
<script src="router.js"></script>
<script src="app.js"></script>
</div> <!--the div for "app"-->
    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>
    <br>
    <br>
    <!-- <div id="scroll-container">
      <div id="scroll-text">Announcement: BLABLABLABALBLABLABLABLALBALBALBABLABLABABALBALBALBABLALBALBALBABALBALBABALBALBALBABLABLABALBALB</div>
    </div> -->
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>the academy</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
</footer>  
</body>
</html>