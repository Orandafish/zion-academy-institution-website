<?php require '../conn.php';?>
<div class="an-main-container">
    <div class="hero">
        <div class="hero__content">
            <h1 class="hero__title">CAMPUS ANNOUNCEMENTS</h1>
            <p class="hero__text">testry</p>
        </div>
    </div>
    <div class="content-header header2">
        <h1><i class="fa-solid fa-calendar-days"></i> Important dates</h1>
    </div>
    <br>
    <div class="an-container">
        <div class="an-grid">
            <div class="an-grid-child1">
                <h1><i class="fas fa-bullhorn" style="color: #435BCD; border-radius: 50%; padding: 7px; background-color: #C9D2FF"></i>&nbsp;Announcements</h1>
                <br>
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FZacStudentCouncil%2Fposts%2Fpfbid0355hqtbE5A3pKn6iSuS3tKxySkDKp1DpfPVhDay8TZZ9YpGVrFpzVETYAP1EXr8D4l&show_text=true&width=500" width="450" height="651" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>               
            </div>
            <div class="breaker"></div>
            <div class="an-grid-child2">
                <h1><i class="fas fa-bullhorn" style="color: #435BCD; border-radius: 50%; padding: 7px; background-color: #C9D2FF"></i>&nbsp;Calendar</h1>
                <br>
                <?php
                $sql = "SELECT * FROM calendar ORDER BY id DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)):
                    $dateraw = $row['date'];
                    $date = strtotime($dateraw);
                    $formattedDate = date('F j D', $date);
                ?>
                <div class="cl-content">
                    <div class="date">
                        <p><?=$formattedDate?></p>
                    </div>
                    <div class="happenings">
                        <p><?=$row['content']?></p>
                    </div>
                </div>
                <br>
                <?php endwhile;?>
                
                              
            </div>
            <div class="breaker"></div>
            <div class="an-grid-child3">
                <h1><i class="fas fa-bullhorn" style="color: #435BCD; border-radius: 50%; padding: 7px; background-color: #C9D2FF"></i>&nbsp;Celebrations</h1>
                <br>
                <!-- <div class="c3-content">
                    <p>test</p>
                </div>
                <div class="c3-content">
                    <p>test</p>
                </div> -->
                <?php
                $sql = "SELECT * FROM home WHERE id = 8";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="bday-card">
  <!-- Top part of the card: image + decorations -->
                    <div class="bday-decor--container">
                        <div class="bday-pic "> 
                            <img src="img/<?=$row['type']?>">
                        </div>
                        <p class="bday-decor bday-decor--top-right float">🎈</p>
                        <p class="bday-decor bday-decor--top-left spin">🌼</p>
                    </div> 
                    <!-- Banner --> 
                    <h1 class="bday-banner">
                        <span>Happy</span> <span>Birthday</span>
                    </h1> 
                    <!-- Message + decoration -->
                    <div class="bday-message bday-message--paper">
                        <p><?=$row['text']?></p> 
                        <p class="bday-decor bday-decor--bottom-right zoom-left-in-out">🎉</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>