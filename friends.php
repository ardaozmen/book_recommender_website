<?php 
session_start();
$username = $_SESSION['username'];
$conn = mysqli_connect("localhost", "group4", "group4", "group4");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Booklet</title>
</head>
<body>

<div class="topnav">
        <div class="topnav_left">
            <img class="logo" src="img/booklet.png" alt="booklet">
            <a class="active" href="home.php">Home</a>
            <a href="books.php">Books</a>
            <a href="contact.php">Contact</a>
            <a href="aboutus.php">About</a>
        </div>

        <div class="topnav_right">
            
            <?php if(isset($_SESSION['username'])){
                echo '<a class="book_library" href="#library">My Book Library</a>';
                echo '<a class="sign_up__item" href="profile.php">Profile</a>';
                echo '<a class="sign_up__item" href="logout_action.php">Logout</a>';
            } else{
                echo '<a class="sign_up__item" href="sign_up.php">Sign Up</a>';
                echo '<a class="sign_in__item" href="sign_in.php">Sign In</a>';
            }?>
                 
        </div>
    </div>

    
    <h1> Friends </h1>
    <ul>
        <li>
            <div class="row">
                <img class="friendpic" src="image/profilepic.png"/>
                <p class="friendname"><a href="#">name</a></p>
            </div>
        </li>
        <li>
            <div class="row">
                <img class="friendpic" src="image/profilepic.png"/>
                <p class="friendname"><a href="#">name</a></p>
            </div>
        </li>
        <li>
            <div class="row">
                <img class="friendpic" src="image/profilepic.png"/>
                <p class="friendname"><a href="#">name</a></p>
            </div>
        </li>
        <li>
            <div class="row">
                <img class="friendpic" src="image/profilepic.png"/>
                <p class="friendname"><a href="#">name</a></p>
            </div>
        </li>
    </ul>
</body>
</html>