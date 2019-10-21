
<div class="footer-copyright-wrapper">
  <div class="container">
    <div class="footer-copyright row">
      <div class="col-12">
        <?php echo get_option('opt-footer-copyright');?>
      </div>
    </div>
  </div>
</div>
                       <?php
/**         *  ts_add_hidden_sidebar          **/
do_action('ts_after_footer');
?>    </div><!-- End / Site main -->
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
 WebFont.load({
    google: {
     families: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', 'Roboto:300,300i,400i,500,500i,700']
    }
  });
</script>

<script>
(function($){
$(document).ready(function(){
    $( "a.scrollLink" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
});
})(jQuery);
</script>

</body>
</html>