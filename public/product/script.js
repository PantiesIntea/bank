
//______INFO TABS_________


$('.product-info__btn').click(function() {
    let index = $(this).index()
    $('.product-info__btn').removeClass('current')
    $(this).addClass('current')
    $('.product-info__tab').removeClass('current')
    $('.product-info__tab').eq(index).addClass('current')
})



//______REVIEWS CAROUSEL__________

$('.product-reviews .other-carousel').owlCarousel({
    dots: true,
    nav: false,
    mouseDrag: false,
    smartSpeed: 700,
    margin: 20,
    responsive: {
        0: {
            items: 1,
            center: true
        },
        600: {
            items: 2,
            margin: 20,
        },
        1000: {
            items: 3,
            margin: 30,
        }
    }
})

$('.product-reviews .other-carousel__arrows .arrow-left').click(() => {
    $('.product-reviews .other-carousel').trigger('prev.owl.carousel', [700]);

})

$('.product-reviews .other-carousel__arrows .arrow-right').click(() => {
    $('.product-reviews .other-carousel').trigger('next.owl.carousel', [700]);  
})



//_____FAQ_________


$('.product-faq__item').click(function() {
    if ($(this).hasClass('active')) {
        $(this).removeClass('active')
        $(this).find('.product-faq__answer').slideUp(400)
    } else {
        $('.product-faq__item').removeClass('active')
        $('.product-faq__answer').slideUp(400)
        $(this).addClass('active')
        $(this).find('.product-faq__answer').slideDown(400)
    }
})


//______СERT CAROUSEL__________

$('.product-cert__carousel').owlCarousel({
    dots: true,
    nav: false,
    mouseDrag: true,
    smartSpeed: 700,
    margin: 20,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
            margin: 20,
        },
        1100: {
            items: 4,
            margin: 30,
        },
    }
})



$('.product-cert__item img').click(function() {
    let src = $(this).attr('src')
    let alt = $(this).attr('alt')
    $('.product-cert__big').attr('src', src).attr('alt', alt)
    $('.product-cert__zoom').fadeIn(600)
})




$('.product-cert__close').click(() => {
    $('.product-cert__zoom').fadeOut(600); 
})



$('.product-cert__zoom').click(e => {
    let div = $(".product-cert__big");
    if (!div.is(e.target) 
        && div.has(e.target).length === 0) { 
        $('.product-cert__zoom').fadeOut(600); 
    }
})