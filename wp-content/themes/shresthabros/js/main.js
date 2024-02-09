window.openModal = function(modalId) {
    document.getElementById(modalId).style.display = 'block'
    document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
  }
  
  window.closeModal = function(modalId) {
    document.getElementById(modalId).style.display = 'none'
    document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
  }
  
  // Close all modals when press ESC
  document.onkeydown = function(event) {
    event = event || window.event;
    if (event.keyCode === 27) {
      document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
      let modals = document.getElementsByClassName('modal');
      Array.prototype.slice.call(modals).forEach(i => {
        i.style.display = 'none'
      })
    }
  };



  window.openMenu = function(MenuId) {
    document.getElementById(MenuId).style.display = 'block'
    document.getElementsByTagName('body')[0].classList.add('overflow-hidden')
  }
  
  window.closeMenu = function(MenuId) {
    document.getElementById(MenuId).style.display = 'none'
    document.getElementsByTagName('body')[0].classList.remove('overflow-hidden')
  }
  
  // Close all Menus when press ESC
  document.onkeydown = function(event) {
    event = event || window.event;
    if (event.keyCode === 27) {
      document.getElementsByTagName('body')[0].classList.remove('overflow-hidden')
      let Menus = document.getElementsByClassName('menu');
      Array.prototype.slice.call(Menus).forEach(i => {
        i.style.display = 'none'
      })
    }
  };

$(document).ready(function() {

    //AOS.init();
    //AOS.refresh();

    $('.slick-one__sync-main').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 2200,
      arrows: true,
      dots: false,
      fade: true,
      asNavFor: '.slick-one__sync-c'
  }); 
  $('.slick-one__sync-c').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      speed: 2200,
      arrows: false,
      dots: false,
      fade: true,
      draggable : false,
      cssEase: 'ease-out',
      useTransform: true,
      asNavFor: '.slick-one'
  });


    $('.slick-one').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed:6000,
        focusOnSelect: true,
        autoplay: true,
        speed: 1000,
        arrows: false,
        dots: false,
        fade: true
    }); 
    

    $('.slick-two').slick({
      // dots: false,
      // nav: false,
      // arrows: true,
      // inifinite: true,
      // speed: 1200,
      // autoplaySpeed: 5000,
      // slidesToShow: 1,
      // adaptiveHeight: true,
      // autoplay: true,
      // draggable: false,
      // pauseOnFocus: false,
      // pauseonHover: false
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed:6000,
        focusOnSelect: true,
        autoplay: true,
        speed: 1000,
        arrows: true,
        adaptiveHeight: true,
        dots: false,
        responsive: [{
                breakpoint: 991
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    vertical: false,
                }
            }
        ]
    }); 
    

    $('.slick-three').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed:6000,
        focusOnSelect: true,
        autoplay: true,
        speed: 1000,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    vertical: false,
                }
            }
        ]
    }); 
    


    function resize(){
        var HeaderH = $('header').outerHeight();
        var WindowH = $(window).outerHeight();
        $('.hero_banner').css('height', WindowH - HeaderH);
        $('#primary').css('margin-top', HeaderH);
    }

    $(window).on("load resize scroll",function(e){
        resize();
    });


    

});

//butter.init({cancelOnTouch: true});