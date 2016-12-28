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

    $('.contact-us').popover({
        html: true,
        content: function () {
            var cform=jQuery('.contact-us-form').html();
            return cform;           
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
    
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    $(document).on('click','#menu-primary-nav li.dropdown a',function(e){
        if($( window ).width() >= 768){
            jQuery(this).parents('li.dropdown').removeClass('open');
        }
        if($(this).attr('href')!='' || $(this).attr('href')!='#'){
            location.href=$(this).attr('href');
        }
    });

});
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    /*var winPrint = window.open();
    winPrint.document.write(printContents);
    winPrint.document.close();
    winPrint.focus();
    winPrint.print();
    winPrint.close();*/
}