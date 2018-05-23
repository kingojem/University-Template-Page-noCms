 var slideIndex = 0;
    slideShow();
    function slideShow(){
        var i;
        var slides =document.getElementsByClassName("mySlidesfade");
        for(i = 0;i < slides.length; i++){
            slides[i].style.display ="none";
        }
        slideIndex++;
        if(slideIndex > slides.length){slideIndex = 1;}
        slides[slideIndex-1].style.display ="block";
        setTimeout(slideShow,5000);
    }