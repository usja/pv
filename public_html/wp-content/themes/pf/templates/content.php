<?
$categories = get_the_category();
if (!empty($categories)) {
    $strCatName = esc_html($categories[0]->name);   
    $strCatSlug = esc_html ($categories[0]->slug);
}
?>						

						<div class="nk-isotope-item" data-filter="<?=$strCatSlug;?>">
                            <div class="nk-blog-post">
                                <div class="nk-post-thumb">
                                    <a href="<? the_permalink();?>">
	                                    <? echo get_the_post_thumbnail( $id, 'medium', array('class' => 'nk-img-stretch') ); ?>
                                    </a>
									<? if (!empty($categories)):?>
                                    	<div class="nk-post-category"><a href="<? echo esc_url(get_category_link( $categories[0]->cat_ID ));?>"><?=$strCatName;?></a></div>
                                    <? endif;?>
                                </div>
                                <h2 class="nk-post-title h4"><a href="<? the_permalink();?>"><? the_title();?></a></h2>

                                <div class="nk-post-date">
									<? the_time('F jS, Y');?>
                                </div>

                                <div class="nk-post-text">
									<? the_content(); ?>
                                  </div>
                            </div>
                        </div>