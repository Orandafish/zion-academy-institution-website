<?php
require 'conn.php';
if(isset($_POST['article'])){
  $id = $_POST['id'];
  $content = $_POST['content'];
  $sql = "SELECT * FROM news WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $row=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:whitesmoke;">
<header>
  <div class="header-left">
    <div class="logo">
      <img src="img/logo.png" alt="logo">
    </div>
    <nav>
      <ul>
        <li>
          <a href="index.php" class="btn active">Home</a>
        </li>
        <li>
          <ul class="dropdown">
          <a href="index.php#explore" class="btn">Explore&nbsp<i class="arrow down"></i></a>
          
          <ul class="dropdown-menu" id = "dropdown-content">
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul>
          </ul>
        </li>
        
        <li>
          <a href="index.php#about" class="btn">About us</a>
        </li>
        <li>
          <a href="index.php#services" class="btn">Services</a>
        </li>
        <li>
          <ul class="dropdown">
          <a href="index.php#announcement" class="btn">Announcements&nbsp<i class="arrow down"></i></a>
          <ul class="dropdown-menu" id = "dropdown-content">
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul>
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

<div>
  <h1><?=$row['title']?><br><?=$row['date']?></h1>
  <p><?=$row['content']?></p>
</div>
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