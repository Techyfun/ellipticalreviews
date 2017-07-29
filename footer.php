<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ellipticalreviews
 */
global $ellipticalreviews_opt;
?>

<footer class="footer" role="contentinfo">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 footerwidget">
                    <div class="row">
                        <div class="col-xs-4">
                               
                                 <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                                <div class="col-xs-8">
                                     <?php dynamic_sidebar( 'footer-2' ); ?>
                                        
                                </div>
                        </div>
                </div>
                <div class="col-sm-2 footerwidget">
                                           
                         <?php dynamic_sidebar( 'footer-3' ); ?>
              
                </div>
            <div class="col-sm-2 footerwidget">
                
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                   							
            
            </div>
							<div class="col-sm-2 footerwidget">
							</div>
						</div>
					</div>
				</div>
			</footer>
			<footer class="footer-copyright">
				<div class="wrapper">
					 <?php if($ellipticalreviews_opt['footer-copyright']) :?>
                                   
                                            <p class="copyright"><?php echo $ellipticalreviews_opt['footer-copyright'] ; ?></p>			
                                            <?php else: ?>			
                                            <?php endif ?>
                                            
                                        
				</div>
				<br class="clear">
			</footer>
	

		<div id="zip-modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="zip-info" method="POST">
						<input type="hidden" name="action" value="submit_zip">
						<input type="hidden" class="zip-model" name="model">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<p class="modal-title text-center"><img src="<?php bloginfo('template_directory'); ?>/asset/img/logo.png"></p>
						</div>

						<div class="zip-ok modal-body">
							<p style="margin-bottom:10px">We've located a few dealers near <span data-zip></span> that have the <span data-model></span> <span data-treadmill></span> in stock.
							Please provide us with the following information and we'll have someone contact you to answer any questions and to find you the lowest price.</p>

							<div class="text-center">
								<input type="text" class="zip-name" name="name" placeholder="Name"><br>
								<input type="text" class="zip-phone" name="phone" placeholder="Phone"><br>
								<input type="email" class="zip-email" name="email" placeholder="Email"><br>
								<input type="text" class="zip-zip" name="zip" placeholder="Zip"><br>
								<textarea class="zip-comments" name="comments" placeholder="Comments"></textarea>
							</div>

							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-orange" style="width:80%">
									Submit
								</button>
							</div>
							<br>

							<small style="font-size:10px">
								We respect your privacy. By clicking the "Submit" button, you give ellipticalreviews.com and its affiliates your consent to call and/or email you regarding your inquiry.
							</small>
						</div>

						<div class="zip-sorry" class="modal-body">
							<p>Sorry we did not find anything for that zip code.</p>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="thanks-modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p class="modal-title text-center"><img src="<?php bloginfo('template_directory'); ?>/asset/img/logo.png"></p>
					</div>

					<div class="zip-ok" class="modal-body">
						<p>Thank you for your submission. We'll have someone call or e-mail you shortly.</p>
					</div>
				</div>
			</div>
		</div>

<!--wp_footer-->    	

</body>
</html>