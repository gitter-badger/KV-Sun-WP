</div>
<!--/#blocks-wrapper-->
</div>
<!--/#Wrapper-container -->
</div>
<!--/#Wrapper -->
<?php global $bresponZive_tpcrn_data; if(isset($bresponZive_tpcrn_data['shw_footer_widg'])){if($bresponZive_tpcrn_data['shw_footer_widg'] == '1'){ ?>
<!--#footer-blocks-->
<div id="footer-blocks" class="container clearfix">
  <div class="fb-container clearfix">
    <div class="footer-block1">
      <?php dynamic_sidebar('Footer Block 1');?>
    </div>
    <div class="footer-block2">
      <?php dynamic_sidebar('Footer Block 2');?>
    </div>
    <div class="footer-block3">
      <?php dynamic_sidebar('Footer Block 3');?>
    </div>
    <div class="footer-block4">
      <?php dynamic_sidebar('Footer Block 4');?>
    </div>
  </div>
</div>
<!--/#footer-blocks-->
<?php } }?>
<!-- #footer-->
<div id="footer" class="clearfix">
  <div class="foot-wrap container">
    <p class="copyright"><?php echo bloginfo( 'name' ); ?>&nbsp; &copy;&nbsp;<?php echo date("Y");?></p>
    <!--p class="credit">Designed by <a title="ThemePacific" href="http://themepacific.com">ThemePacific</a></p--> </div>
</div>
<!--/#Footer -->
<?php wp_footer(); ?>
 <script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
 <script>
 if ( !(('CSS' in window) && ('supports' in CSS) && CSS.supports('position', 'sticky'))) {
 $(document).ready(function(){
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){
			$('.secondary.sticky').addClass("stuck");
		  }
		  else{
			$('.secondary.sticky').removeClass("stuck");
		  }
		});
 });
}
 </script>
</body></html>
