<?
// menu support
add_theme_support( 'menus' );
// feautured images support
add_theme_support( 'post-thumbnails' );

// add css & js
function add_scripts() {
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700');
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/combined.css');

}
add_action( 'wp_enqueue_scripts', 'add_scripts' );
// end

// add active class to li in menu
function add_active_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'add_active_class' , 10 , 2);
// end

// add default user avatar
add_filter( 'avatar_defaults', 'add_default_avatar_option' );
function add_default_avatar_option( $avatars ){
	$url = get_stylesheet_directory_uri() . '/assets/images/avatar-3.jpg';
	$avatars[ $url ] = 'Default';
	return $avatars;
}
//end

// show filter for blog
function show_filter_top()
{
	$strData = '';
	$args = array(
		'type'         => 'post',
		'orderby'      => 'name',
		'order'        => 'ASC',
		'hide_empty'   => 0,
		'hierarchical' => 0,
		'taxonomy'     => 'category',
		'pad_counts'   => false,
	);
	$categories = get_categories( $args );
	if( $categories ){
		$strData = '<div class="nk-pagination nk-pagination-nobg nk-pagination-center"><a href="#nk-toggle-filter"><span class="nk-icon-squares"></span></a></div><ul class="nk-isotope-filter"><li class="active" data-filter="*">All</li>';
		foreach( $categories as $cat ){
			$strData .= '<li data-filter="'.$cat->slug.'">'.$cat->name.'</li>';

		}
		$strData .= '</ul>';
	}
	echo $strData;
}
// end


// add settings to the theme
function pf_add_section( $wp_customize ) {

	$wp_customize->add_section('footer', array(
			'title'    => __('Footer','pf'),
			'capability' => 'edit_theme_options',
			'priority' => 130
		));
	$wp_customize->add_setting('setting_copy', array());
	$wp_customize->add_control('copy', array(
			'label'    => __('Copyrights', 'pf'),
			'section'  => 'footer',
			'settings' => 'setting_copy',
			'type'     => 'text'
		));

	$wp_customize->add_section('socnetworks', array(
			'title'    => __('Social networks','pf'),
			'capability' => 'edit_theme_options',
			'priority' => 120
		));
	$wp_customize->add_setting('setting_twitter', array());
	$wp_customize->add_control('twitter', array(
			'label'    => __('Twitter', 'pf'),
			'section'  => 'socnetworks',
			'settings' => 'setting_twitter',
			'type'     => 'text'
		));

	$wp_customize->add_setting('setting_facebook', array());
	$wp_customize->add_control('facebook', array(
			'label'    => __('Facebook', 'pf'),
			'section'  => 'socnetworks',
			'settings' => 'setting_facebook',
			'type'     => 'text'
		));

	$wp_customize->add_setting('setting_dribble', array());
	$wp_customize->add_control('dribble', array(
			'label'    => __('Dribble', 'pf'),
			'section'  => 'socnetworks',
			'settings' => 'setting_dribble',
			'type'     => 'text'
		));

	$wp_customize->add_setting('setting_instagram', array());
	$wp_customize->add_control('instagram', array(
			'label'    => __('Instagram', 'pf'),
			'section'  => 'socnetworks',
			'settings' => 'setting_instagram',
			'type'     => 'text'
		));

}
add_action( 'customize_register', 'pf_add_section' );
// end

// comments template
function fp_comments($comment, $args, $depth){
	$GLOBALS['comment'] = $comment; ?>
      <div class="nk-comment" id="li-comment-<? comment_ID() ?>">
        <div id="comment-<? comment_ID(); ?>">
          <div class="comment-author vcard">
            <div class="nk-comment-avatar">
                                <a href="<? echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
									<? echo get_avatar($comment,$size='300' );?>
                                </a>
                            </div>
							<div class="nk-comment-meta">
                                <div class="nk-comment-name"><a href="<? comment_author_url(); ?>"><? comment_author();?></a></div>
                                <div class="nk-comment-reply"><? comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
                                <div class="nk-comment-date"><? echo get_comment_date();?></div>
                            </div>
                            <div class="nk-comment-text">
										<? if ($comment->comment_approved == '0') : ?>
							            <em><? _e('Your comment is awaiting moderation.') ?></em>
							            <br />
										<? endif; ?>
                                <p><? comment_text() ?></p>
                            </div>
          </div>
        </div>


  <? }
// end   

// reorder comment fields
add_filter('comment_form_fields', 'reorder_comment_fields' );
function reorder_comment_fields( $fields ){
	$new_fields = array();
	$myorder = array('author','email', 'comment');
	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}
	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;
	return $new_fields;
}
// end