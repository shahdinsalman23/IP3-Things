// Initialize Wow
new WOW().init();


$('.vertical-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  vertical: true,
  dots: true,
 
});



$('.service-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
  });
  
  $('.company-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
  });


  // var ipname = document.querySelector(".text-circle")
  // var textbox = document.querySelector(".ip3-txt-box")
  // var closebtn = document.querySelector(".closebutton")

  // ipname.addEventListener("click",function(){
  //   textbox.style.display = "block"
  // })
  
  // closebtn.addEventListener("click",function(){
  //   textbox.style.display = "none"
  // })