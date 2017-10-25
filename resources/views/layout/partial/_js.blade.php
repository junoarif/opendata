<!-- JavaScript -->
<script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<!-- StikyMenu -->
<script src="{{ asset('js/stickUp.min.js') }}"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  $('.navbar-default').stickUp();

});
});

</script>

<!-- sidebar push -->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "220px";
    document.getElementById("main").style.marginLeft = "240px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

<!-- Smoothscroll -->
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<script src="js/classie.js"></script>
<script src="js/uiMorphingButton_inflow.js"></script>
<!-- Magnific Popup core JS file -->
<script src="js/jquery.magnific-popup.js"></script>
