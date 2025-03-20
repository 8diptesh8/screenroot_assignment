$(document).ready(function(){
        $('.hero-slider').slick({
            dots: true,        // Enables dots navigation
            arrows: false,     // Hides arrows
            autoplay: true,
            slidesToShow: 1,
        slidesToScroll: 1,    // Enables autoplay
            autoplaySpeed: 5000,
            fade: false,        // Enables fade transition
            speed: 1000
        });
    });


$(document).ready(function(){
        $('.temenos-cards').slick({
            slidesToShow: 3.5,   // Show 3.5 cards
            slidesToScroll: 1,  
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: false,
            responsive: [
                                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1.5,
                        dots: true
                    }
                }
            ]
        });
    });