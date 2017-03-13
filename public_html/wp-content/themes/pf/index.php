<?
get_header(); ?>

<div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
		<? if ( have_posts() ) : ?>
			<? // Filter  ?>
			<? if (!is_single()):?>
			<? show_filter_top();?>
			<? endif;?>                    
			<? //end filter ?>
				  <!-- START: Posts List -->
                    <div class="nk-blog-isotope nk-isotope  nk-isotope-1-cols" id="blog_data">
	              
				<?
					while ( have_posts() ) : the_post();
						get_template_part( 'templates/content','null');
					endwhile;
				?>
	                    
				<? else:?>
						<? _e( 'Nothing Found', 'pf' ); ?>
				
                    
		<? endif;?></div>
        </div>
                    <!-- END: Posts List -->
                </div>
            </div>

            <div class="nk-gap-4"></div>

        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center" id="pagination_bottom">
			<? next_posts_link( 'Load More Posts' ); ?>
        </div>
        <!-- END: Pagination -->
<script>
	jQuery(document).ready(function() {
	jQuery('#pagination_bottom a').on('click', function(e) {
		e.preventDefault();
		var link = jQuery(this).attr('href');
		jQuery('#pagination_bottom').html('Loading More Posts...');
		$.get(link, function(data) {
			var post = $("#blog_data .nk-isotope-item", data);
			$('#blog_data').append(post);
		});
		jQuery('#pagination_bottom').load(link + ' #pagination_bottom a');
	});
});
</script>

<? get_footer(); ?>
