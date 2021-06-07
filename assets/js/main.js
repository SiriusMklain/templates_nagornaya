document.addEventListener('DOMContentLoaded', function(){
  let more = document.querySelector(".show-more");

  if(more) {
    more.addEventListener("click", () => {
      let text = document.querySelector(".show-more");

      if (text.innerHTML === "Открыть полностью") {
        text.innerHTML = "Скрыть";
      } else {
        text.innerHTML = "Открыть полностью";
      }
    });
  }



  let moreorder = document.querySelector(".show-order");

  if(moreorder) {
    moreorder.addEventListener("click", () => {
      let text = document.querySelector(".show-order");

      if (text.innerHTML === "Скрыть <i class=\"fas fa-arrow-up\"></i>") {
        text.innerHTML = "Показать все <i class=\"fas fa-arrow-down\"></i>";
      } else {
        text.innerHTML = "Скрыть <i class=\"fas fa-arrow-up\"></i>";
      }
    });
  }

  let moreorderend = document.querySelector(".show-order-end");

  if(moreorderend) {
    moreorderend.addEventListener("click", () => {
      let text = document.querySelector(".show-order-end");

      if (text.innerHTML === "Скрыть <i class=\"fas fa-arrow-up\"></i>") {
        text.innerHTML = "Показать все <i class=\"fas fa-arrow-down\"></i>";
      } else {
        text.innerHTML = "Скрыть <i class=\"fas fa-arrow-up\"></i>";
      }
    });
  }


  const galleryThumbs = new Swiper('.swiper-adittional', {
    grabCursor: true,
    spaceBetween: 24,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  const galleryTop = new Swiper(".swiper-preview", {
    effect: "fade",
    watchOverflow: true,
    breakpoints: {
      320: {
        allowTouchMove: true,
        grabCursor: true,
        pagination: {
          el: '.swiper-pagination',
        }
      },
      768: {
        allowTouchMove: false,
        grabCursor: false,
        pagination: false
      }
    },
    fadeEffect: {
      crossFade: true,
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });

  const person = new Swiper('.swiper-person', {
    slidesPerView: 6,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
          nextEl: '.swiper-person-next',
          prevEl: '.swiper-person-prev',
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  });

  const about = new Swiper('.swiper-about', {
    slidesPerView: 6,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 40
      }
    }
  });


  // var myCollapsible = document.getElementById('myCollapsible')
  // myCollapsible.addEventListener('shown.bs.collapse', function () {
  //   person.swiper.update();
  // });




  const product = document.querySelectorAll('.swiper-product');

  for( i=0; i< product.length; i++ ) {
    product[i].classList.add('swiper-product-' + i);

    let slider = new Swiper('.swiper-product-' + i, {
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 30,
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }


  const star = document.querySelectorAll('.swiper-star');

  for( i=0; i< star.length; i++ ) {
    star[i].classList.add('swiper-star-' + i);

    let slider = new Swiper('.swiper-star-' + i, {
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        1200: {
          slidesPerView: 5,
          spaceBetween: 30,
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }


  // Dropdown back
  const back = document.querySelector('.dropdown-back'),
  dropdown = document.querySelector('.dropdown-menu');

  back.addEventListener('click', function(event) {
    event.preventDefault();

    dropdown.classList.remove('show');
  });


  // Filter

  const body = document.body,
        filter = document.querySelector('.filter');

  if(filter) {
    const btnOpen = document.querySelector('.btn-filter'),
          btnClose = filter.querySelector('.btn-close'),
          overflow = document.createElement('div');

    btnOpen.addEventListener('click', function(e){
      e.preventDefault();

      body.classList.add('overflow-hidden');
      filter.classList.add('active');

      overflow.classList.add('modal-backdrop', 'fade', 'show');
      document.body.appendChild(overflow);
    });

    btnClose.addEventListener('click', function(){
      body.classList.remove('overflow-hidden');
      filter.classList.remove('active');
      overflow.remove();
    });
  }

  adittionaly();

  adittional();
  adittion();

  window.addEventListener("resize", function() {
    adittionaly();
    adittional();
    adittion();
  });

  $("select").select2({
    theme: "bootstrap-5",
    minimumResultsForSearch: -1
  });

  $(".price-range").ionRangeSlider({
    skin: "round",
    type: "double",
    min: 0,
    max: 587,
    grid: true,
    grid_num: 4,
    grid_snap: false
  });
});

Scrollbar.initAll();

function adittionaly() {
  const additionally = document.getElementById('adittionaly');

  if(additionally){
    if (window.matchMedia("(min-width: 992px)").matches) {
      additionally.classList.add('show');
    } else {
      additionally.classList.remove('show');
    }
  }
}


function adittional() {
  const adittional = document.getElementById('adittional');

  if(adittional){
    if (window.matchMedia("(min-width: 992px)").matches) {
      adittional.classList.add('show');
    } else {
      adittional.classList.remove('show');
    }
  }
}


function adittion() {
  const adittion = document.getElementById('adittion');

  if(adittion){
    if (window.matchMedia("(min-width: 1200px)").matches) {
      adittion.classList.add('show');
    } else {
      adittion.classList.remove('show');
    }
  }
}

const total = document.querySelector('.total');
const checkoutBtn = document.querySelector('.checkout');


if(total) {
  document.addEventListener('scroll', function () {
    checkout();
  }, {
    passive: true
  });

  function checkout() {
    if(isInViewport(total)) {
      checkoutBtn.classList.remove('show');
    } else {
      checkoutBtn.classList.add('show');
    }
  }

  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight + 241 || document.documentElement.clientHeight + 241) &&
        rect.right <= (window.innerWidth + 241 || document.documentElement.clientWidth + 241)
    );
  }
}



// Fancybox
$('[data-fancybox="gallery"]').fancybox({
	buttons: [
    "close"
  ],
});


$(document).ready(function() {
  var $videoSrc = '';

  $('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
  });

  $('#person').on('shown.bs.modal', function (e) {
    $("#person-video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
  });

  $('#person').on('hide.bs.modal', function (e) {
    $("#person-video").attr('src', '');
  });
});


$(".toggle-password").on('click', function() {
  $(this).toggleClass("fas fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});


$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 128
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });

$('.minus').click(function () {
  var $input = $(this).parent().find('input');
  var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
  return false;
});
$('.plus').click(function () {
  var $input = $(this).parent().find('input');
  $input.val(parseInt($input.val()) + 1);
  $input.change();
  return false;
});


$('.panel-arrow').on('click', function() {
  let arrow = $('.fas');
  if(arrow.hasClass( "fa-chevron-up" )) {
    arrow.removeClass('fa-chevron-up');
    arrow.addClass('fa-chevron-down');
  } else {
    arrow.addClass('fa-chevron-up');
    arrow.removeClass('fa-chevron-down');
  }
  $('.panel-body').toggleClass('show');
});


$( ".btn-catalog" ).click(function() {
  $(".catalog__menu").addClass("active");
});
