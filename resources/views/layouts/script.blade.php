
<script src="{{mix('js/sweetalert-dev.js')}}"></script>
<script src="{{mix('js/wow.js')}}"></script>
<script src="{{mix('js/superfish.js')}}"></script>
<script src="{{mix('js/smooth-scroll.js')}}"></script>
<script>
</script>
<script src="{{mix('js/ripples.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/material.js')}}"></script>
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