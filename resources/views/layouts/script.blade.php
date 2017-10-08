
<script src="{{mix('js/sweetalert2.min.js')}}"></script>
<script src="{{mix('js/wow.js')}}"></script>
<script src="{{mix('js/superfish.js')}}"></script>
<script src="{{mix('js/smooth-scroll.js')}}"></script>
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
<script src="{{mix('js/app.js')}}"></script>
