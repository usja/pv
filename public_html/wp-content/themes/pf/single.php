<?
get_header(); ?>
<div class="nk-main">

<?
	while ( have_posts() ) : the_post();
	get_template_part( 'templates/post', 'none');


	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
?>
		 <div class="nk-pagination nk-pagination-center">
		            <div class="container">
			         	                <?
		$prev_post = get_previous_post();
		if (!empty( $prev_post )): ?>
			                <a class="nk-pagination-prev" href="<? echo get_permalink( $prev_post->ID ); ?>">
			                    <span class="pe-7s-angle-left"></span> Previous Post</a>
		                <? endif; ?>
		                <a class="nk-pagination-center" href="#">
		                    <span class="nk-icon-squares"></span>
		                </a>
	    <?
		$next_post = get_next_post();
		if (!empty( $next_post )): ?>
		                <a class="nk-pagination-next" href="<? echo get_permalink( $next_post->ID ); ?>">Next Post <span class="pe-7s-angle-right"></span> </a>
		                <? endif;?>
		            </div>
		        </div>
<?
	endwhile;
?>

<? get_footer(); ?>
