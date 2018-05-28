 var slideIndex = 0;
    slideShow();
    var tbtn = document.getElementsByName("1");
    function slideShow(){
        var i;
        var slides =document.getElementsByClassName("mySlidesfade");
        for(i = 0;i < slides.length; i++){
            slides[i].style.display ="none";
        }
        slideIndex++;
        if(slideIndex > slides.length){slideIndex = 1;}
        slides[slideIndex-1].style.display ="block";
        setTimeout(slideShow,2000);
    }
    
    var tabs = document.getElementsByName("1");
    var tabcontent = document.getElementsByClassName("tabcontent");
    function tabcontrol(){
        tabs[0].style.backgroundColor="gold";
        tabcontent[1].style.display ="none";
        tabcontent[2].style.display ="none";
    }
   
        function tabby1(){
            tabs[0].style.backgroundColor="#180d53";
            tabcontent[0].style.display ="none";
            tabcontent[2].style.display ="none";
            tabcontent[1].style.display ="block";
        }
        function tabby0(){
            tabs[0].style.backgroundColor="gold";
            tabcontent[0].style.display ="block";
            tabcontent[2].style.display ="none";
            tabcontent[1].style.display ="none";
        }
        function tabby2(){
            // tabs[0].style.hover="gold";
            tabcontent[0].style.display ="none";
            tabcontent[2].style.display ="block";
            tabcontent[1].style.display ="none";
        }
    
    

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
        
        
        
        /*the modal box */
        var modal = document.getElementById("myModal");
         var contact = document.getElementById("contact");
         var close = document.getElementsByClassName('close')[0];
         var submit = document.getElementById("submitComment");
         var body = document.getElementById("mainBody");
         contact.onclick = function(){
             modal.style.display="block";
         }
         close.onclick = function(){
             modal.style.display ="none";
         }
        //  submit.onclick = function(){
        //      modal.style.display ="none";
        //  }
         window.onclick = function(event){
             if(event.target == body){
                modal.style.display ="none";
             }
            
         } /*This ends the hidden modal box */