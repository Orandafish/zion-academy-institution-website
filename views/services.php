<?php
require '../conn.php';
?>
<div class="services-container">
    <div class="sv-gallery-wrapper">
        <div class="sv-gallery">
            <img src="img/p10.jpg" alt="a hot air balloon" onclick='services("one")' id="pic1">
            <img src="img/p7.jpg" alt="a sky photo of an old city" onclick='services("two")' id="pic2">
            <img src="img/p8.jpg" alt="a small boat" onclick='services("three")' id="pic3">
            <img src="img/p3.jpg" alt="a forest" onclick='services("four")' id="pic4">
        </div>
        <h1 id="sv-title">Academy</h1>
    </div>
</div>
<div class="content-header header2">
  <h1><i class="fa-solid fa-school"></i></i> Classes Offered</h1>
</div>
<div class="sv-content">
    <?php
    $sql = "SELECT * FROM services";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)):
    ?>
    <div class="wrap animate pop">
        <div class="overlay">
            <div class="overlay-content animate slide-left delay-2">
                <h1 class="animate slide-left pop delay-4"><?=$row['course']?></h1>
                <p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem;"></p>
            </div>
            <div class="image-content animate slide delay-5"></div>
                <div class="dots animate">
                    <div class="dot animate slide-up delay-6"></div>
                    <div class="dot animate slide-up delay-7"></div>
                    <div class="dot animate slide-up delay-8"></div>
                </div>
            </div>
            <div class="text">
            <p><?=$row['text']?></p>
        </div>
	</div>
    <?php endwhile; ?>
</div>
<div class="content-header header2">
  <h1><i class="fa-solid fa-sun"></i></i> More info: 09323041481</h1>
</div>
<script src="functions.js"></script>