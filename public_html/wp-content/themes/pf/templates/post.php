<?
	$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );

if (count($img)):?>
<!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-lg">
            <div class="bg-image">
                <div style="background-image: url('<?=$img[0];?>');"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">




                    </div>
                </div>
            </div>

        </div>
<? endif;?>
        <!-- END: Header Title -->

		<div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-gap-4"></div>

                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">
                        <h1 class="display-4"><? the_title();?></h1>
<?
$categories = get_the_category();
if (!empty($categories)) {
    $strCatName = esc_html($categories[0]->name);   
    $strCatSlug = esc_html ($categories[0]->slug);
}
?>	
                        <div class="nk-post-meta">
                            <div class="nk-post-date"><? the_time('F jS, Y');?></div>
							<? if (!empty($categories)):?>
								<div class="nk-post-category"><a href="<? echo esc_url(get_category_link( $categories[0]->cat_ID ));?>"><?=$strCatName;?></a></div>
                             <? endif;?>
                            <div class="nk-post-comments-count">
	                            <?php comments_number( 'no comments', 'one comment', '% comments' ); ?>
	                            
                            </div>
                        </div>

                        <!-- START: Post Text -->
                        <div class="nk-post-text">
                          <? the_content(); ?>
						</div>
                        <!-- END: Post Text -->

                        <!-- START: Post Share -->
                        <div class="nk-post-share">
                            <strong>Share:</strong>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<? the_permalink();?>" title="Share page on Facebook" data-share="facebook">Facebook</a>,
                            <a target="_blank" href="https://twitter.com/home?status=<? the_permalink();?>" title="Share page on Twitter" data-share="twitter">Twitter</a>,
                            <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<? the_permalink();?>&media=<?=$img[0];?>" title="Share page on Pinterest" data-share="pinterest">Pinterest</a>
                        </div>
                        <!-- END: Post Share -->
                    </div>
                    <!-- END: Post -->

                    <div class="nk-gap-3"></div>
                </div>
            </div>
        </div>
					

					