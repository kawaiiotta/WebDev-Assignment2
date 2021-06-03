<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="signupstyle.css">
    <script src="validation.js" type="text/javascript"></script>
    <link rel="stylesheet" href="signupstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Site navigation menu -->
    <div class="topnav" id="myTopnav">
        <a href="../index.html">Home</a>
        <a href="../aboutus.html">About us</a>
        <a href="../menu.html">Menu</a>
        <a href="../contact.html">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <form name="myForm" class="modal-content">
        <div class="container">
            <h1>Sign Up for Weekly Pastry</h1>

            <p> Thank you for signing up to our Abonnement, <?php echo $_POST["Fullname"]; ?></p>

            <p> Your email is <?php echo $_POST["Email"];
                                    if (isset($_POST["agree"])) {
                                        print ". We will send you weekly updates.";
                                    } else {
                                        print ". You wont receive any emails.";
                                    }?></p>

            <p> Your birthday is at <?php echo $_POST["Dateday"];?>.<?php echo $_POST["Datemonth"];?>.</p>

            <p> Your gender is: <?php if (isset($_POST["gendermale"])) {
                                          print "Male";
                                      } elseif (isset($_POST["genderfemale"])) {
                                          print "Female";
                                      } else {
                                          print "Cupcake";
                                      }?></p>

            <p> You selected <?php if (isset($_POST["AppleCake"])) {
                                       print "Apple Cake, ";
                                   }
                                   if (isset($_POST["CustardTart"])) {
                                       print "Custard Tart, ";
                                   }
                                   if (isset($_POST["Donuts"])) {
                                       print "Donuts, ";
                                   }
                                   if (isset($_POST["RandyTart"])) {
                                       print "Randy Tart, ";
                                   }
                                   if (isset($_POST["RaspberryCake"])) {
                                       print "Raspberry Cake, ";
                                   }
                                   if (isset($_POST["VanillaSlice"])) {
                                       print "Vanilla Slice.";
                                   }?></p>

            <p> You have no discount </p>

            <h2> As we dont have any delivery yet you can pick up your order every monday or wednesday in the store </h2>

        </div>
    </form>

    <br><br><br><br>

    <div id="Footer">
      <p>Best Pastry in the world at <a href="https://www.google.com/maps/place/Willows+Shopping+Centre/@-19.3160516,146.7260799,18.54z/data=!4m12!1m6!3m5!1s0x6bd5f0913190b29f:0xf00eef2626250c0!2sWillows+Shopping+Centre!8m2!3d-19.3157662!4d146.7264632!3m4!1s0x6bd5f0913190b29f:0xf00eef2626250c0!8m2!3d-19.3157662!4d146.7264632" target="_blank">NEW LOCATION</a></p>
      <p><a href="../index.html">Home</a> | <a href="../aboutus.html">About us</a> | <a href="../menu.html">Menu</a> | <a href="../contact.html">Contacts</a></p>
    </div>

</body>
</html>