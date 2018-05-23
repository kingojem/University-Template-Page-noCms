<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
    <div class ="icons">
        <!-- <img src="images/07.png"  style="max-width:100%;" alt="Google +">
        <img src="images/09.png" style="max-width:100%;" alt="twitter"> <img src="images/06.png" alt="facebook">
        <img src="images/10.png" style="max-width:100%;" alt="">
        <img src="images/11.png"  style="max-width:100%;" alt=""> -->
        <img src="images/ic.jpg" alt="social">
    </div>
    <div class="book-store">
       <h1 style ="font-size:1vw;">Campus Bookstore (New!)</h1>
       <img src="images/11.png"  style="max-width:100%;" id ="cart" alt="Bookstore">
    </div>
    <div class="container">
        <div class ="logo">
            <img src ="images/logo.jpg" style="max-width:100%;">
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
</header>
<script>
    function dropDown1(){
    document.getElementById("myDropDown1").classList.toggle("show");
}
function dropDown2(){
    document.getElementById("myDropDown2").classList.toggle("show"); 
}
function dropDown3(){
    document.getElementById("myDropDown3").classList.toggle("show"); 
}

window.onclick = function(event){
    if (!event.target.matches('.dropbtn')){
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for(i =0; i< dropdowns.length;i++){
            var opendropdowns = dropdowns[i];
            if(opendropdowns.classList.contains('show')){
                opendropdowns.classList.remove('show');
            }
        }
    }
}
</script>