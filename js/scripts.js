// Initizalizing Side Navigation
$(".button-collapse").sideNav();

var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);

// Initizalizing Carousel
$('.carousel').carousel()

// Filter of News
$('.news-items').isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows'
});

$('.categories-news .chip').click(function(){
    $('.categories-news .chip').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $('.news-items').isotope({
        filter: selector
    });
    return false;
});