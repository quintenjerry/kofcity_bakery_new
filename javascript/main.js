let search = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    search.classList.toggle('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    shoppingCart.classList.remove('active');
}
let shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    search.classList.remove('active');
}



let loginForm = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
    search.classList.remove('active');
}


let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    search.classList.remove('active');

}




window.onscroll = () => {
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swwiper = new swwiper(".bakes-slider", {
    loop: true,
    spaceBetween: 20,
    auoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,

    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,

        },
    },
});

var swwiper = new swwiper(".review-slider", {
    loop: true,
    spaceBetween: 20,
    auoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,

    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,

        },
    },
});

  // Intro carousel
  var introCarousel = $(".carousel");
  var introCarouselIndicators = $(".carousel-indicators");
  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

    $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
    $(this).children('.carousel-background').remove();
  });

  $(".carousel").swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll:"vertical"
  });


    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 40,
        centeredSlides: true,
        grabCursor: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },


        
    });


 

    jQuery(document).ready(function($) {
        "use strict";
      
        //Contact
        $('form.contactForm').submit(function() {
          var f = $(this).find('.form-group'),
            ferror = false,
            emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
      
          f.children('input').each(function() { // run all inputs
      
            var i = $(this); // current input
            var rule = i.attr('data-rule');
      
            if (rule !== undefined) {
              var ierror = false; // error flag for current input
              var pos = rule.indexOf(':', 0);
              if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
              } else {
                rule = rule.substr(pos + 1, rule.length);
              }
      
              switch (rule) {
                case 'required':
                  if (i.val() === '') {
                    ferror = ierror = true;
                  }
                  break;
      
                case 'minlen':
                  if (i.val().length < parseInt(exp)) {
                    ferror = ierror = true;
                  }
                  break;
      
                case 'email':
                  if (!emailExp.test(i.val())) {
                    ferror = ierror = true;
                  }
                  break;
      
                case 'checked':
                  if (! i.is(':checked')) {
                    ferror = ierror = true;
                  }
                  break;
      
                case 'regexp':
                  exp = new RegExp(exp);
                  if (!exp.test(i.val())) {
                    ferror = ierror = true;
                  }
                  break;
              }
              i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
          });
          f.children('textarea').each(function() { // run all inputs
      
            var i = $(this); // current input
            var rule = i.attr('data-rule');
      
            if (rule !== undefined) {
              var ierror = false; // error flag for current input
              var pos = rule.indexOf(':', 0);
              if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
              } else {
                rule = rule.substr(pos + 1, rule.length);
              }
      
              switch (rule) {
                case 'required':
                  if (i.val() === '') {
                    ferror = ierror = true;
                  }
                  break;
      
                case 'minlen':
                  if (i.val().length < parseInt(exp)) {
                    ferror = ierror = true;
                  }
                  break;
              }
              i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
          });
          if (ferror) return false;
          else var str = $(this).serialize();
          var action = $(this).attr('action');
          if( ! action ) {
            action = 'contactform/contactform.php';
          }
          $.ajax({
            type: "POST",
            url: action,
            data: str,
            success: function(msg) {
              // alert(msg);
              if (msg == 'OK') {
                $("#sendmessage").addClass("show");
                $("#errormessage").removeClass("show");
                $('.contactForm').find("input, textarea").val("");
              } else {
                $("#sendmessage").removeClass("show");
                $("#errormessage").addClass("show");
                $('#errormessage').html(msg);
              }
      
            }
          });
          return false;
        });
      
      });
      