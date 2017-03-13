<?
	if ( post_password_required() ) {
	return;
}
?>
<!-- START: Comments -->
        <div id="comments"></div>
        <div class="nk-comments">
            <div class="nk-gap-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h3 class="nk-title">Comments:</h3>
                        <div class="nk-gap-1"></div>

                        <!-- START: Comment -->
	<?
	$args = array(
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'div',
		'callback'          => 'fp_comments',
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => 'Reply',
		'page'              => '',
		'per_page'          => '',
		'avatar_size'       => 300,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
		'short_ping'        => false,    // С версии 3.6,
		'echo'              => true,     // true или false
	);

	wp_list_comments( $args ); 
	?>                        
                    


                        <!-- END: Comment -->
                    </div>
                </div>
            </div>
            <? the_comments_navigation(); ?>
            <div class="nk-gap-3"></div>
        </div>
        <!-- END: Comments -->
        
        <!-- START: Reply -->
        <div class="nk-reply">
            <div class="nk-gap-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
<?
$defaults = array(
	'fields'               => array(
								'author' => '   <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" class="form-control required" name="name" placeholder="Your Name">
                                </div>',
								'email'  => ' <div class="col-md-6">
                                    <input type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . 'class="form-control required" name="email" placeholder="Your Email">
                                </div>
                            </div>',
								),
	'comment_field'        => ' <div class="nk-gap-1"></div><textarea class="form-control required" id="comment" name="comment" rows="8" placeholder="Your Comment" aria-required="true"></textarea></p>',
	'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
	'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
	'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. ( $req ? $required_text : '' ) . '</p>',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'class_form'           => 'comment-form',
	'class_submit'         => 'submit',
	'name_submit'          => 'submit',
	'title_reply'          => __( 'Leave a Reply' ),
	'title_reply_to'       => __( 'Leave a Reply to %s' ),
	'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
	'title_reply_after'    => '</h3>',
	'cancel_reply_before'  => ' <small>',
	'cancel_reply_after'   => '</small>',
	'cancel_reply_link'    => __( 'Cancel reply' ),
	'label_submit'         => __( 'Post Comment' ),
	'submit_button'        => '<button class="nk-btn" type="submit">Post a Comment</button>',
	'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
	'format'               => 'xhtml',
);

comment_form( $defaults );
	                        ?>
                    
                    </div>
                </div>
            </div>
            <div class="nk-gap-3"></div>
        </div>
        <!-- END: Reply -->




