

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
          navText:["<span class='ion-arrow-left-b'></span>","<span class='ion-arrow-right-b' ></span>"],  
                responsive: {
        0: {
          items: 1
        },
        568: {
          items: 2
        },
        600: {
          items: 4
        },
        1000: {
          items: 4
        }
      }
            });
        }
    
    
    
    }); /* End Fn */
