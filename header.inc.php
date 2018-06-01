<?php
require_once("config.inc.php");
$script_name =$_SERVER['SCRIPT_NAME'];
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
    <div class ="icons">
        <img src="images/ic.jpg" style="max-width:100%;" alt="social">
    </div>
    <div class="book-store">
       <h1 style =>Campus Bookstore (New!)</h1>
       <img src="images/cart.jpg"  style="max-width:100%;" id ="cart" alt="Bookstore">
    </div>
    <div class="container">
        <div class ="logo">
            <img src ="images/logo.jpg" style="max-width:100%;">
        </div>
        <div class ="student-login">
           <a target="_blank" href ="<?php echo $student_login?>"> <img src="images/studentlogin.jpg" style="max-width:100%;" alt=""></a>
        </div>
    </div>
    <nav role="navigation">
       <div class ="dropdown"> 
           <button onclick="" class ="dropbtn" id="home"> HOME </b>&dtri;</b></button>
       </div>
       <div class ="dropdown"> 
           <button onclick="dropDown1()" class ="dropbtn" id="feature"> Features </b>&dtri;</b></button>
           <div id ="myDropDown1" class ="dropdown-content">
               <a href="#">ASDFGHJKL;'</a>
               <a href ="#">BZXCVNM,./</a>
               <a href ="#">CCVHTYUI</a>
           </div>
       </div>
       <div class ="dropdown"> 
           <button onclick="dropDown2()" class ="dropbtn" id="campus"> Campus Life </b>&dtri;</b></button>
           <div id ="myDropDown2" class ="dropdown-content">
               <a href="#">ASDFGHJKL;'</a>
               <a href ="#">BZXCVNM,./</a>
               <a href ="#">CCVHTYUI</a>
           </div>
       </div>
       <div class ="dropdown"> 
           <button onclick="dropDown3()" class ="dropbtn" id="newsE"> News & Event </b>&dtri;</b></button>
           <div id ="myDropDown3" class ="dropdown-content">
               <a href="#">ASDFGHJKL;'</a>
               <a href ="#">BASDFRTTER</a>
               <a href ="#">CDSRTERFD</a>
           </div>
       </div>
       <div class ="contactUs"> 
           <button onclick="" class ="dropbtn" id="contact">Contact Us</button> 
       </div>
    </nav>
    </div>
    <div id ="myModal" class ="modal" >
        <span class ="close">&times;</span>
    <div class ="modal-content"> 
       <h4> Contact Us</h4><br>
       <?php 
            if(isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['comment'])){
                $fullName = $_POST['fullName'];
                $email = $_POST['email'];
                if(!empty( $_POST['comment'])){
                    $comment = $_POST['comment'];
                    // header("location:index.php");
                }
                else{
                    echo  $error = '<span  style ="color:red;">Type in A Message Or Quit</span>' ;
                }
            }       
       ?>
       <form action="<?php $script_name ?>" method="POST">
           <label for="fullName">Full Name:</label> <input type ="text" name ="fullName" id ="fullName" class ="fullName" placeholder="Your Name" required ><br>
           <label for="email">Email:</label><input type="email" name="email" id="email" required placeholder="@example.mail.com"><br>
           <label style ="color:red" id ="comment">Your Message</label>
           <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
           <input type="submit" id ="submitComment" value="Submit">
       </form>
    </div>
</div>
    </div>
</header>

<script src ="main.js"></script>