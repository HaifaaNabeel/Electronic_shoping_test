function product_images(choseone){
    document.getElementById('bigone').innerHTML='<img  class="img-fluid " src="'+choseone+'" />';
}

/*-----------------------------------
     * OWL CAROUSEL company
     *-----------------------------------*/

    $(function() {

        var $galleryDiv = $('.img-gallery');
        if ($galleryDiv.length && $.fn.owlCarousel) {
            $galleryDiv.owlCarousel({
                nav: false,
                loop: true,
                autoplay: true,
                dots: false,
          navText:["<span class='ion-android-arrow-dropleft-circle'></span>","<span class='ion-android-arrow-dropright-circle' ></span>"],  
                responsive: {
        0: {
          items: 1
        },
        568: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
            });
        }
    
       var $galleryDiv1 = $('.img-gallery1');
        if ($galleryDiv1.length && $.fn.owlCarousel) {
            $galleryDiv1.owlCarousel({
                nav: false,
                loop: true,
                autoplay: true,
                dots: false,
                          navText:["<span class='ion-android-arrow-dropleft-circle'></span>","<span class='ion-android-arrow-dropright-circle' ></span>"],  

                responsive: {
        0: {
          items: 1
        },
        568: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
            });
        }
    
    }); /* End Fn */
 /*-----------------------------------
     * navbar color 
     *-----------------------------------*/
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() >= 20) {
                $(".newmenu").addClass("newmenu1");
                $(".navbar").addClass("navbar1");
               // $(".nav_desk2").addClass("navbar2");

            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".newmenu").removeClass("newmenu1");
                $(".navbar").removeClass("navbar1");
              //  $(".nav_desk2").removeClass("navbar2");

            }
        });
    });
