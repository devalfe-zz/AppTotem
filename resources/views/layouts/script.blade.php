<script src="{{mix('js/jquery.js')}}"></script>
<script src="{{mix('js/wow.js')}}"></script>
<script src="{{mix('js/superfish.js')}}"></script>
<script src="{{mix('js/owl.carousel.min.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/jquery.fancybox.js')}}"></script>

<script>
jQuery(document).ready(function($) {
   $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4900,
        autoplayHoverPause:true
    })
});
</script>

<script>
jQuery(document).ready(function($) {
    $('.owl-evento').owlCarousel({
        center: true,
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:6900,
        autoplayHoverPause:true

    })
});
</script>
