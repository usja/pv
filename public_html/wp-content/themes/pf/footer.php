    <!--
    START: Footer
-->
        <footer class="nk-footer">


            <div class="nk-footer-cont">
                <div class="container text-xs-center">
				<?  
					$st = get_theme_mod('setting_twitter');
					$sf = get_theme_mod('setting_facebook');
					$sd = get_theme_mod('setting_dribble');
					$si = get_theme_mod('setting_instagram');
					
		
				?>
				<? if ($st || $sf || $sd || $si):?>
                    <div class="nk-footer-social">
                        <ul>
                            <? if ($st):?><li><a href="<?=$st;?>"><i class="fa fa-twitter"></i></a></li><?endif;?>
                            <? if ($sf):?><li><a href="<?=$sf;?>"><i class="fa fa-facebook"></i></a></li><?endif;?>
                            <? if ($sd):?><li><a href="<?=$sd;?>"><i class="fa fa-dribbble"></i></a></li><?endif;?>
                            <? if ($si):?><li><a href="<?=$si;?>"><i class="fa fa-instagram"></i></a></li><?endif;?>
                        </ul>
                    </div>
                <? endif;?>
                    

                    <div class="nk-footer-text">
                        <p><?=get_theme_mod('setting_copy');?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer -->


    </div>




    <!-- START: Scripts -->
    <script src="<? bloginfo('stylesheet_directory'); ?>/assets/js/combined.js"></script>
    <!-- END: Scripts -->
<? wp_footer(); ?>

</body>

</html>
