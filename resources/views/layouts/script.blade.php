
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
        $(document).ready(function() {
            $('#fullpage').fullpage({
                verticalCentered: true,
                anchors: ['section', 'anchor2', 'anchor3'],
                menu: '#menu',
                sectionsColor: ['#ff5722', '#4BBFC3', '#7BAABE']

            });
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