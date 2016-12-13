jQuery(document).ready(function($){
    $('.single-post-share').popover({
        html: true,
        content: function () {
            return jQuery('#share-html').html();
        }
    });
    $('.post-share').popover({
        html: true,
        content: function () {
            var count=jQuery(this).attr('share-html');
            return jQuery('#share-html'+count).html();
        }
    });
	$(window).on('scroll', function() {
        if ($(window).scrollTop() >= 30) {
            if($('body').hasClass('logged-in')){
                $('nav.navbar').css('margin-top','38px');
            }
            else{
                $('nav.navbar').css('margin-top','5px');
            }
        }
        else {
            if($('body').hasClass('logged-in')){
                $('nav.navbar').css('margin-top','63px');
            }
            else{
                $('nav.navbar').css('margin-top','38px');
            }
        }
    });

    jQuery(document).on('click','.blue-bar-toggle span',function(){
    	jQuery('.topnav-wrapper').slideToggle();
    });
});