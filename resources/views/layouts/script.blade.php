
<script src="{{mix('js/sweetalert2.min.js')}}"></script>
<script src="{{mix('js/wow.js')}}"></script>
<script src="{{mix('js/superfish.js')}}"></script>
<script src="{{mix('js/smooth-scroll.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/bootstrap-material-design.js')}}"></script>
<script src="{{mix('js/bootstrap.js')}}"></script>
<script src="{{mix('js/jquery.fullpage.extensions.min.js')}}"></script>
<script src="{{mix('js/jquery.fullpage.js')}}"></script>
<script>
  $(function () {
    $.material.init();
    $.material.ripples();
    $.material.input();
  });
</script>
<<script>
$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
</script>
<script>
    $(document).ready(function(){

    var items =  $('.gallerij article').size();
    var shown =  4;
    $('.more').click(function (e) {
        e.preventDefault();
        $('.less').show();
        shown = $('.gallerij article:visible').size()+4;
        if(shown< items) {$('.gallerij article:lt('+shown+')').show(300);}
        else {$('.gallerij article:lt('+items+')').show(300);
             $('.more').hide();
             }
    });
    
    $('.less').click(function (e) {
        e.preventDefault();
        $('.gallerij article').not(':lt(4)').hide(300);
        $('.more').show();
        $('.less').hide();
    });

    //Lightbox
    var thumbs = [];
    var bigImg = [];
    $('.gallerij .link .foto-g').each(function(){
        var srcs = $(this).attr('src');
        var newSrc = srcs.replace('-150x150', '');
        thumbs.push(srcs);
        bigImg.push(newSrc);
    });
    $('.gallerij article').each(function(){
        $(this).find('.link').on('click',function(e){
            e.preventDefault();

            var pos = $(this).find('.foto-g').attr('data-position') - 1;
            $('body').append('<div class="lightbox"><article><span><i class="fa fa-times" aria-hidden="true"></i></span><img data-thumb="'+pos+'" src="'+bigImg[pos]+'" alt="" /><div class="navigation"><i class="fa fa-arrow-left" aria-hidden="true"></i><i class="fa fa-arrow-right" aria-hidden="true"></i></div></article></div>');

        });
    });
    
    $(document).on('click', '.navigation .fa-arrow-right', function(e){ 
        e.stopPropagation();
        $(this).each(function(){
            var pos = $('.lightbox .link').attr('data-thumb');
            var newPos = ++pos;
            var newSrc = bigImg[newPos];
            $('.lightbox article').hide();
            $('.lightbox article .link').attr('src', newSrc);
            $('.lightbox article .link').attr('data-thumb', newPos);
            $('.lightbox article').fadeIn();
            var lastEl = bigImg[bigImg.length - 1]; 
            if($('.lightbox article .link').attr('src') == lastEl){
                $(this).addClass('disabled');
            }else{
                $(this).removeClass('disabled');
            }
            $('.navigation .fa-arrow-left').removeClass('disabled');
        });

    });
    $(document).on('click', '.navigation .fa-arrow-left', function(e){ 
        e.stopPropagation();
        $(this).each(function(){
            var pos = $('.lightbox .link').attr('data-thumb');
            var newPos = --pos;
            var newSrc = bigImg[newPos];
            $('.lightbox article').hide();
            $('.lightbox article .link').attr('src', newSrc);
            $('.lightbox article .link').attr('data-thumb', newPos);
            $('.lightbox article').fadeIn();
            var firstEl = bigImg[0]; 
            if($('.lightbox article .link').attr('src') == firstEl){
                $(this).addClass('disabled');
            }else{
                $(this).removeClass('disabled');
            }
            $('.navigation .fa-arrow-right').removeClass('disabled');
        })
    });
    $(document).on('click', '.lightbox', function(){ 
        $('.lightbox').fadeOut().delay(3000).queue(function() {
           $(this).remove();
        });
    }); 
});
</script>
<script type="text/javascript">
new WOW().init();
function setColors(i){
    var search;
    var bkgr_body;
    var bkgr_menu;
    if (sections[i] == "menu-1"){
        bkgr_body = "#233d58";
        bkgr_menu = "#233d58";       
    }
    else{
        bkgr_body = "#f1f1f1";
        bkgr_menu = "#29abe2";
    }
    search = document.getElementById(sections[i]);
    search.style.background = bkgr_body;
    nav = document.getElementById("navbar");
    nav.style.background =  bkgr_menu;
}
function navSection(nav) {
    var sections = new Array(5);
    sections[0] = "menu-1";
    sections[1] = "menu-2";
    sections[2] = "menu-3";
    sections[3] = "menu-4";
    sections[4] = "menu-5";
    var search;
    var show;
    var bkgr_body;
    var bkgr_menu;
    for (var i = 0; i < 5; i++) {
        search = document.getElementById(sections[i]);
        search.style.display = "none";
        if (sections[i] == nav) {
            search.style.display = "block";
            if (sections[i] == "menu-1"){
                bkgr_body = "#fff";
                bkgr_menu = "#233d58";
            }
            else{
                bkgr_body = "#f1f1f1";
                bkgr_menu = "#29abe2";
            }
            search.style.background = bkgr_body;
            nav = document.getElementById("navbar");
            nav.style.background =  bkgr_menu;
        }
    }
}

function displaySection(nav){
    var sections = new Array(5);
    sections[0]= "menu-1";
    sections[1]= "menu-2";
    sections[2]= "menu-3";
    sections[3]= "menu-4";
    sections[4]= "menu-5";
    var search;
    var show;
    var nav;
    for (var i=0; i<5; i++){
        search = document.getElementById(sections[i]);
        show = search.style.display;
        if (show == "block"){
            search.style.display = "none";
            if(nav == "next"){
                i++;
                if (i > 4) i = 0;
            }
            if(nav == "prev"){
                i--;
                if (i < 0) i = 4;
            }
            search = document.getElementById(sections[i]);
            search.style.display = "block";
            break;
        }
    }
    if (sections[i] == "menu-1"){
        bkgr_body = "#fff";
        bkgr_menu = "#233d58";
    }
    else{
        bkgr_body = "#f1f1f1";
        bkgr_menu = "#29abe2";
    }
    search.style.background = bkgr_body;
    nav = document.getElementById("navbar");
    nav.style.background =  bkgr_menu;
}
</script>
<script src="{{mix('js/owl.carousel.js')}}"></script>
<script>
jQuery(document).ready(function($) {
   $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    }) 
});
</script>