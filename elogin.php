<!DOCTYPE html>
<?php
echo '<title>eLogin</title>'
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />   
</head>
<body>
    <div class ="form">
        <form name ="loginform" action ="" method  ="POST">
            <span class ="proimage"> <img src="images/ppp.jpg" alt="school logo"></span> <br>

            <input  id ="username" class="username" name ="username" type ="text" required placeholder ="Matric No." value =""> <br>

            <input id ="password" class ="password" name ="password" type ="password"  required placeholder ="Password" value =""> <br>
            <input id ="login" class ="login" name ="login" type ="submit" value ="Login"><br>
            <a  id ="forgetpassword" href =""> Forget Password </a> <br>
                
        </form>
         
    </div>
    <span class="copyright"> 2018 &copy; All Right Reserve UAC University</span>
    <!-- <script>
        var getUsername = document.getElementById("username");
        var getPassword = document.getElementById("password");
                function stringLengthCheck(event){
                    if ((getUsername.value.length < 9) || (getPassword.value.length < 2)){
                        return event.preventDefault();
                    }
                }

            
    </script> -->
</body>
</html>
