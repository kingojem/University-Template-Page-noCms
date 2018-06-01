<!DOCTYPE html>
<?php
include_once("header.inc.php");

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />   
</head>
<body id ="mainBody" onload ="tabcontrol()">
    <div class = "slider-container">
        <div class = "mySlidesfade">
        <img src="images/grad2.jpg" alt="Graduating Student" style="width:100%;margin-left:0%">
        </div>
        <div class = "mySlidesfade">
        <img src="images/grad3.jpg" alt="Featured Staff" style="width:100%; margin-left:0%">
        </div>
        <!--This is The slider, Yours is to add images following The div layout  -->
        <!-- <a class="prev" onclick="plusSlide(-1)"> &#10094; </a> -->
        <!-- <a class ="next" onclick="plusSlide(1)">&#10095; </a> --> <!--This is Meant to Be The Next Button, Experimental Purpose, It was Discarded Out -->
    </div>
    <div class ="material">
        <h3>Featuring Easy to Use <span>Layout Builder</span> + Portfolio And <span>Materials</span></h3>
        <button>Download Now</button>
    </div>
    <div class ="container">
        <div class ="container-link">
            <div class="campus-life">
                <img src="images/camplife.jpg" alt="Campus Life"><br>
                Welcome To jsadguigadguiasguasduiguasguasguigas<br>gusadgiasdigasuguasgusagu<br>
                gyadsgiuadsgusadgusdaggusdaguiasias<br>sagiasduiguisadguidagdusugiasdu<br>guiads
                uidasugdsagu<br>
                <a style="text-decoration:none" href=""><span style="color:#c7961a">Read More </span></a>
            </div>
            <div class="admission">
            <img src="images/ad.jpg" alt="Campus Life"><br>
                Welcome To jsadguigadguiasguasduiguasguasguigas<br>gusadgiasdigasuguasgusagu<br>
                gyadsgiuadsgusadgusdaggusdaguiasias<br>sagiasduiguisadguidagdusugiasdu<br>guiads
                uidasugdsagu<br>
                <a style="text-decoration:none" href=""><span style="color:#c7961a">Read More </span></a>
            </div>
            <div class="atletics">
            <img src="images/at.jpg" alt="Campus Life"><br>
                Welcome To jsadguigadguiasguasduiguasguasguigas<br>gusadgiasdigasuguasgusagu<br>
                gyadsgiuadsgusadgusdaggusdaguiasias<br>sagiasduiguisadguidagdusugiasdu<br>guiads
                uidasugdsagu<br>
                <a style="text-decoration:none" href=""> <span style="color:#c7961a">Read More </span></a>
            </div>
            <div class="news-event">
            <img src="images/NE.jpg" alt="Campus Life"><br>
                Welcome To jsadguigadguiasguasduiguasguasguigas<br>gusadgiasdigasuguasgusagu<br>
                gyadsgiuadsgusadgusdaggusdaguiasias<br>sagiasduiguisadguidagdusugiasdu<br>guiads
                uidasugdsagu<br>
                <a style="text-decoration:none" href=""> <span style="color:#c7961a">Read More </span></a>
            </div>
        </div>
    </div>
    <div class ="container" onload ="tabcontrol()">
        <div class ="tabs" id ="tabs" >
            <button name ="1" id="ourMission" class ="tablinks" onclick ="tabby0()">Our Misssion </button>
            <button name="1"  id ="lecturers" class ="tablinks" onclick ="tabby1()">Lecturers</button>
            <button name="1" id ="facilities"class ="tablinks" onclick ="tabby2()">Facilities & Infrastructures </button>
            <button name="1" id ="schoolClub" class ="tablinks" onclick ="tabby(event, 'clubs')"> School Clubs & Activities </button>
            
        </div>
        <div id ="ourmission" class ="tabcontent">
            <div>
                <img src="images/mis1.png"  alt="">
                <img src ="images/mis2.png" alt="">
                <img src = "images/mis3.png" alt ="">
                <img src="images/mis4.png" alt=""><img src="images/mis5.png" alt="">
            </div>
        </div>
        <div id ="lecturers" class ="tabcontent">
            <div>
                <img src="images/mis1.png"  alt="">
                <img src ="images/mis2.png" alt="">
                <img src = "images/senate.png" alt ="">
                <img src="images/mis4.png" alt=""><img src="images/mis5.png" alt="">
            </div>
        </div>
        <div id ="lecturers" class ="tabcontent">
            <div>
                <img src="images/mis1.png"  alt="">
                <img src ="images/mis2.png" alt="">
                <img src = "images/mis3.png" alt ="">
                <img src="images/bbb.png" alt=""><img src="images/mis5.png" alt="">
            </div>
        </div>
    </div>
    <?php
    include('footer.inc.php');
    ?>
    <script src="js/main.js"> </script>
</body>
</html>
