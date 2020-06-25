// event pada saat link diklik
$('.page-scroll').on('click', function(e) {

//ambil isi href

    var tujuan = $(this).attr('href');
    //tangkap elemen yg bersangkutan
    var elemenTujuan = $(tujuan);

    //pindahkan scroll
    $('body').animate({
        scrollTop: elemenTujuan.offset().top -50
    },1000, 'easeInOutExpo');
    e.preventDefault();
});

$(document).ready(function(){

    $(window).scroll(function(){
      if($(this).scrollTop() > 40){
        $('#topBtn').fadeIn();
      } else{
        $('#topBtn').fadeOut();
      }
    });
  
    $("#topBtn").click(function(){
      $('html ,body').animate({scrollTop : 0},800);
    });
  });
  
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  };

