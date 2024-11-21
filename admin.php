<?php
session_start();
require 'conn.php';
if(isset($_POST['test'])){
    $name = $_POST['name'];
    $text = $_POST['text'];
    $id = $_POST['id'];
    $update = "UPDATE home SET name ='$name', text ='$text' WHERE id = $id";
    $result = mysqli_query($conn, $update);
    echo '<span style="color: green; font-size=32px;">Success!</span>';
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="functions.js"></script>
    <script src="https://kit.fontawesome.com/f17013d72c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body style="background-color: whitesmoke;">
<div class="admin-wrap">
<div class="admin-container">
<p>Have questions? contact me at: 09323041481 | franz.valones107@gmail.com | <a href="https://www.facebook.com/franzdainell.valones/">facebook</a></p>
<div class="ad-container">
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
            <?php if(isset($_GET['mode']) && $_GET['mode'] == 'edit' && isset($_GET['id']) && $_GET['id'] == $id): ?>
                <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="text" name="name" value="<?=$name?>" style="width: 80%"><br>
                    <textarea name="text" rows="10" cols="100"><?=$text?></textarea><br>
                    <input type="submit" name="test" value="Save">
                </form>
            <?php else: ?>
                <h1><?=$name?></h1><br>
                <p><?=$text?></p>
                <a href="?mode=edit&id=<?=$id?>">Edit</a>
            <?php endif; ?>
        </div>
    </div>
    <?php endwhile; ?>
</div>


<div class="content-header3 header2">
  <h1 style="color: white;" id="first-heading"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> First heading</h1>
</div>


<div class="home-zion-container">
  <div class="flexbox-zion-container">
    <div class="text-zion-container text1">
      <h2>Why become a <span>ZIONITE?</span></h2>
      <?php
        $sql = "SELECT * FROM home WHERE name='ZIONITE' OR name='UNIQUE'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $rows = array(); // Initialize an empty array to store the rows       
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row; // Add each row to the array
            }   
            // Now you can use the $rows array to access the retrieved data
            if (count($rows) > 0) {
                echo '<form action="update.php" method="post">';
                echo '<input type="hidden" name="id" value=" '. $rows[0]['id'] .' ">';
                echo '<textarea name="row1" rows="5" cols="10">' . $rows[0]['text'] . '</textarea>';
                echo '<input type="submit" name="heading" value="Save">';
                echo '</form>';
            }
        } else {
            // Handle the case when the query fails
            echo "Error: " . mysqli_error($conn);
        }
      ?>
    </div>
    <div class="break"></div>
    <div class="text-zion-container text2">
      <h2>What makes us <span>UNIQUE?</span></h2>
      <?php
        if (count($rows) > 1) {
            echo '<form action="update.php" method="post">';
            echo '<input type="hidden" name="id" value=" '. $rows[1]['id'] .' ">';
            echo '<textarea name="row2" rows="5" cols="10">' . $rows[1]['text'] . '</textarea>';
            echo '<input type="submit" name="heading2" value="Save">';
            echo '</form>';
        }
      ?>
    </div>
    <div class="picture-zion-container">
    </div>
  </div>
</div>

<div class="content-header3 header2">
  <h1 style="color: white;" id="enrollment-procedures"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> Enrollment procedures</h1>
</div>

<div class="enrollment">
  <table>
    <tr>
      <th>header</th>
      <th>body</th>
      <th>footer</th>
      <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM enrollment";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?=$row['id']?>">
      <td><input type="text" name="header" value="<?=$row['header']?>"></td>
      <td><input type="text" name="body" value="<?=$row['body']?>"></td>
      <td><input type="text" name="footer" value="<?=$row['footer']?>"></td>
      <td><input type="submit" name="enroll" value="change"></td>
      </form>
      <?php endwhile; ?>
    </tr>
  </table>
</div>

<div class="content-header3 header2">
  <h1 style="color: white;" id="section-2"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> News and Articles</h1>
</div>

<div class="content2-container">
  <div class="content2-flexbox">
  <ul class="admincards">
  <?php
    if(isset($_GET['mode'])){
        if($_GET['mode'] == 'delete' && $_GET['type'] == 'news'){
            $id = $_GET['id'];
            $sql = "DELETE FROM news WHERE id = $id";
            $result = mysqli_query($conn, $sql);
        }
    }
    $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 10";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)):
        $id = $row['id'];
        $title = $row['title'];
        $summary = $row['summary'];
    ?>
    <li class="cards_item">
      <div class="card2">
      <?php if(isset($_GET['mode']) && $_GET['mode'] == 'edit2' && isset($_GET['id']) && $_GET['id'] == $id): ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">image must also be changed when editing or just upload the same picture.</label>
            <input type="file" name="fileToUpload" id="fileToUpload" placeholder="pic here" value="hli">
            <input type="hidden" value="<?=$id?>" name='id'>
            <input type="text" placeholder="title here" name="title"><br>
            <textarea name="content" id="content" cols="80" rows="10"><?=$row['content']?></textarea><br>
            <input type="submit" name="submit" value="Save">
        </form>
        <?php else: ?>
        <div class="card_image"><img src="img/<?=$row['picture']?>" alt="mixed vegetable salad in a mason jar. "></div>
        <div class="card_content">
          <h2 class="card_title" id=""><?=$row['title']?></h2>
          <div class="card_text">
            <p class="modernWay"><?=$row['content']?></p>
          </div>
          <a href=""><button class="btn-test">Read more</button></a>
          <a href="?mode=delete&type=news&id=<?=$row['id']?>#section-2" style="float:right; --c: #E95A49;" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn-test x">X</button></a>
          <a href="?mode=edit2&id=<?=$row['id']?>#section-2"><button class="btn-test" style="float:right;">Edit</button></a>
        </div>
      </div>
      <?php endif; ?>
    </li>
    <?php endwhile; ?>
  </ul>
</div>


<div class="content-header3 header2">
  <h1 style="color: white;" id="photo-gallery"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> Photo gallery</h1>
</div>



<div class="photo-gallery-container">
  <div class="photo-wrapper">
    <?php
    $img = '';
    if(isset($_GET['img'])){
        $img = $_GET['img'];
    }
    $sql = "SELECT * FROM pics";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)):
    ?>
  <a href="?img=<?=$row['id']?>#photo-gallery"><img src="img/<?=$row['picture']?>" alt="aaa"></a>
  <?php endwhile; ?>
</div>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h3 style="color: black;">Click on the picture then choose a file to change</h3>
    <h2 style="color: black;">MAKE SURE THAT THE FILE IS JPG/JPEG/PNG, ALSO MAKE SURE THAT ITS 400px by 400px</h2>
        <input type="file" name="fileToUpload" id="fileToUpload" placeholder="pic here">
        <input type="text" placeholder="Old file" name="filePrev" value="<?=$img?>" viewonly><br>
        <input type="submit" name="upload2" value="Upload">
    </form>

<div class="content-header3 header2" style="margin-top: 1rem;">
  <h1 style="color: white;" id="article-maker"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> Article maker</h1>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Upload article header here:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" placeholder="pic here">
            <input type="text" placeholder="title here" name="title"><br>
            <textarea name="content" id="content" cols="80" rows="10">Adjust through the bottom-right if its too small</textarea><br>
            <input type="submit" name="upload" value="Upload">
</form>


<div class="content-header3 header2" style="margin-top: 1rem;">
  <h1 style="color: white;" id="courses"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> Courses</h1>
</div>


<div class="admin-sv">
        <table style="padding: 5px;">
            <tr style="padding: 5px;">
                <th style="padding: 5px;">Course</th>
                <th style="padding: 5px;">Text</th>
                <th style="padding: 5px;">Action</th>
            </tr>
            <?php
            if(isset($_GET['mode'])){
                if($_GET['mode'] == 'course'){
                    $id = $_GET['id'];
                    $sql = "DELETE FROM services WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                }
            }
            $sql = "SELECT * FROM services";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td style="padding: 5px;"><?=$row['course']?></td>
                <td style="padding: 5px;"><?=$row['text']?></td>
                <td style="padding: 5px;"><a href="?mode=course&id=<?=$row['id']?>#courses">DELETE</a></td>
            <?php endwhile; ?>
            </tr>
        </table>
        <div>
            <h1>ADD</h1>
            <form action="update.php" method='post'>
                <input type="text" name="coursetext" id="" placeholder="course" style="height:32px;">
                <input type="text" name="text" id="" placeholder="description of course" style="height:32px;">
                <input type="submit" name="course" value="add">
            </form>
        </div>
<div class="content-header3 header2" style="margin-top: 1rem;">
  <h1 style="color: white;" id="calendar"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> Calendar of events</h1>
</div>
<div>
    <form action="update.php" method="post">
       <p>Select a date:</p>
        <input type="date" name="date">
        <p>Input the event:</p>
        <input type="text" name="text" style="height:32px;">
        <input type="submit" name="dateSub" value="Submit">
    </form>
</div>

<div class="content-header3 header2" style="margin-top: 1rem;">
  <h1 style="color: white;" id="celebration"><i class="fa-solid fa-newspaper" style="color: gold;"></i></i> Celebration</h1>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
            <p>Enter celebrant picture</p>
            <input type="file" name="fileToUpload" id="fileToUpload" placeholder="pic here">
            <p>Enter birthday wish here:</p>
            <textarea name="content" id="content" cols="80" rows="10">Adjust through the bottom-right if its too small</textarea><br>
            <input type="submit" name="upload3" value="Upload">
</form>

</div>
</div><!-- ad-container last div -->
</div>
<div class="admin-sidebar">
    <ul class="admin-sidebar-list">
        <a href="#first-heading"><li>First heading</li></a>
        <a href="#section-2"><li>News & articles</li></a>
        <a href="#photo-gallery"><li>Photo gallery</li></a>
        <a href="#article-maker"><li>Article maker</li></a>
        <a href="#courses"><li>Courses</li></a>
        <a href="#calendar"><li>Calendar</li></a>
        <a href="#celebration"><li>Celebration</li></a>
        <a href="#celebration"><li></li></a>
    </ul>
</div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    
</script>
<script></script>
</body>
</html>