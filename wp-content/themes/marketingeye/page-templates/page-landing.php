<?php
/**
* Template Name: Landing Page
*/
get_header( 'landing' );
the_post();
global $helmets;
?>
    <!-- Content -->
    <div id="content" class="fullwidth site-content">
		 <div class="container">
			<div class="row">
				<article class="col-md-12 col-sm-12">
                    <div id="main-content" class="main-content">
                        <section class="section section-blank-page section-page page-standard">
                            <?php
                    			the_content();
                    			wp_link_pages();
                    		?>
                        </section>
                    </div><!-- /#main-content -->
				</article>
            </div><!-- /.login-register-page-row -->
        </div><!-- /.container -->
    </div>
    <!-- End / Content -->
<?php get_footer('landing');?>