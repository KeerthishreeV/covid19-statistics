<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOMEPAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepagestyle.css">    
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="" alt="">
        </div>
<ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="healthinfo.html">About</a></li>
<li><a href="cmain.html">Covid Tracker</a></li>

<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="welcome-text">
<h3 style="color:white;">Welcome, <?php echo $_SESSION['name']; ?></h3>
        <h1>
CORONA<span>VIRUS</span></h1>
<a href="tel:+91-9886447717">Contact US</a>
    </div>
</header>

</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>