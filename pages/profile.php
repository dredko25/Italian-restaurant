<?php
session_start();
require_once "../includes/db.php";
require_once "../includes/func.php";
$check = header_choice('page');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/menu.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <link rel="stylesheet" href="../style/responsive-menu.css">
    <link rel="stylesheet" href="../style/profile.css">

    <link rel="icon" type="image/png" sizes="32x32" href="../photo/favicon.png">
</head>


<body>
    <div class="wrapper">
        <a id="home" class="in-page-link"></a>
        <?php include "../includes/header.php"; ?>
        <main class="page container">
            <h1 class="category-name">Personal data</h1>
            <form name="userData" action="../includes/AddDataToDB.php" method="post">
                <div class="name">
                    <label>Your name:</label>
                    <input type="text" id="user-name" name="user_name">
                </div>
                <div class="surname">
                    <label>Your surname:</label>
                    <input type="text" id="user-surname" name="user_surname">
                </div>
                <div class="phone">
                    <label>Your phone number:</label>
                    <input type="text" id="user-phone" name="user_phone">
                </div>
                <div class="email">
                    <label>Your email:</label>
                    <input type="text" id="user-email" name="user_email">
                </div>
                <div class="address">
                    <label>Your address:</label>
                    <input type="text" id="user-street" placeholder="Street" name="user_street">
                    <input type="text" id="user-house" placeholder="House" name="user_house">
                    <input type="text" id="user-apartment" placeholder="Apartment" name="user_apartment">
                </div>
                <div class="form-footer container">
                    <input type="submit" value="Make an order" class="make-order-input" id="make-order-input" disabled>
                </div>
            </form>
        </main>
        <?php include "../includes/footer.php"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../script/burger.js"></script>
    <script src="../script/main.js"></script>
    <script src="../script/profile.js"></script>
</body>

</html>