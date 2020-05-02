<?php
include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Math -- South African Math Tutoring with CAPS</title>
</head>
<body>
    <header>
        <div class="header__logo-box">
            <h1 class="logo__heading">MORE<span style="font-weight: bolder;"> X </span>MATH</h1>
        </div>
        <input type="checkbox" name="nav__toggle" id="nav__toggle" class="nav__toggle">
        <label for="nav__toggle" class="nav-toggle-label"><span></span></label>
        <nav class="header__nav-box">
            <ul class="nav__list">
                <li class="nav__link"><a href="index.php" class="nav__anchor <?php checkActive("index") ?>" >HOME</a></li>
                <li class="nav__link"><a href="learn.php" class="nav__anchor <?php checkActive("learn") ?>">LEARN</a></li>
                <li class="nav__link"><a href="contact.php" class="nav__anchor <?php checkActive("contact") ?>">CONTACT</a></li>
                <li class="nav__link"><a href="signup.php" class="nav__anchor <?php checkActive("signup") ?>">SIGN UP</a></li>
            </ul>
        </nav>
    </header>