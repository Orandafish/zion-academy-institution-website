<?php
require '../conn.php';
?>
<div class="explore-container">
    <div class="explore-wrapper">
        <div class="wrapper-card">
            <div class="card-ex">
                <h1>
                    <span class="enclosed">Explore
                </h1>
            </div>
        </div>
    </div>
    <div class="content-header header2">
        <h1><i class="fa-solid fa-newspaper"></i></i> What's happening?</h1>
    </div>
    <div class="explore-cards">
        <div class="cards-main">
        <ul class="cards exp-cards">
        <?php
            $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 5";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)):
        ?>
        <li class="cards_item">
        <div class="card2">
        <div class="card_image"><img src="img/<?=$row['picture']?>" alt="blabla."></div>
            <div class="card_content">
            <h2 class="card_title" id=""><?=$row['title']?></h2>
            <div class="card_text">
            <p class="modernWay"><?=$row['content']?></p>
            <form action="articles.php" method="post">
                <input type="hidden" name="id"value="<?=$row['id']?>">
                <input type="hidden" name="date"value="<?=$row['date']?>">
                <input type="hidden" name="content"value="<?=$row['content']?>">
                <button class="btn-test" style="float: right;" type="submit" name="article"><?=$row['date']?></button>
            </form>
            </div>
            </div>
        </div>
        </li>
        <?php endwhile; ?>              
        </ul>
        </div>
    </div>
</div>