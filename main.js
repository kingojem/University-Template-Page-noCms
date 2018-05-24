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
    
    

    // function tabcontrol(){
        
    //     
    //     
    //     
    //     while(tabcontent[0].style.display ="block"){
    //         tbtn[0].style.backgroundColor ="gold";
    //     }
    // }
    







// //     function tabby (evt,section){
// //      var i,tablinks,tabcontent;
// //      tabcontent= documents.getElementsByClassName('tabcontent');
// //      for(i=0; i < tabcontent.length;i++){
// //          tabcontent[i].style.display="none";
// //      }
// //      tablinks = document.getElementsByClassName('tablinks')
// //      for(i=0; i < tablinks.length; i++){
// //          tablinks[i].className = tablinks[i].className.replace('focus','');

// //      }
// //      document.getElementById('section').style.display = "block";
// //     evt.currentTarget.className += " focus";
// // }
// function tabcontrol(){
//     var i;
//     var tabcontent = document.getElementsByClassName("tabcontent");
//     for(i =0; i < tabcontent.length; i++){
//         if(i > 0){
//             tabcontent[i].style.display ="none";
//         }
//     }
// }
// function tabby(){
//     var tablinks = document.getElementsByClassName("tablinks");
//     var tabcontent = document.getElementsByClassName("tabcontent");
//     for(var i =0; i < tabcontent.length; i++){
//         // tabcontent[i].style.display ="none";
//         for( var j = 0 ; j < tablinks.length; j++){
//             if( i > 0){
//                 // tabcontent[i].classList.replace(tabcontent[i].style.display="show");
//                 tabcontent[i].classList.toggle
//             }
//         }
//     }
// }