function gambiArra() {
    $.each($('a.activeSlide','.hide-navs'),function(i) {
        var i  = $(this).index();
        $('a','.list-news').eq(i).addClass('active').siblings('a').removeClass('active');
        console.log(i);
    });
};

function clickSlideClone() {
    $('a','.list-news').on('click', function(e) {
        e.preventDefault();
        var j = $(this).index();

        $('a','.hide-navs').eq(j).trigger('click');
    });
};
clickSlideClone();

function gambiarraVideo() {
    $('a','.g-video').on('click',function(e) {
        e.preventDefault();
        var p = $(this).parents('.g-video'),
            m = p.find('.this-video').html();

        $('.play-video').html(m);
    });
};
gambiarraVideo();

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();