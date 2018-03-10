<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			printf(
				_nx(
					'%1$s thought',
					'%1$s thoughts',
					$comment_count,
					'comments title',
					'galaxia'
				),
				number_format_i18n( $comment_count )
			);
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style' => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'galaxia' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html_req = ( $req ? " required='required'" : '' );
	$comment_form_fields = array(
		'author' => '<div class="galaxia-comments-form__row row">' . '<label class="col-md-3 galaxia-comments-form__label" for="author">' . __( 'Name', 'galaxia' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<div class="col-md-9"><input class="galaxia-input" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></div></div>',
		'email'  => '<div class="galaxia-comments-form__row row"><label class="col-md-3 galaxia-comments-form__label" for="email">' . __( 'Email', 'galaxia' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<div class="col-md-9"><input class="galaxia-input" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div></div>',
		'url'    => '<div class="galaxia-comments-form__row row"><label class="col-md-3 galaxia-comments-form__label" for="url">' . __( 'Website', 'galaxia' ) . '</label> ' .
		            '<div class="col-md-9"><input class="galaxia-input" id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></div></div>',
	);
	$comment_form_params = array(
		'fields' => $comment_form_fields,
		'comment_field' => '<div class="galaxia-comments-form__row row"><label class="col-md-3 galaxia-comments-form__label" for="comment">' . _x( 'Comment', 'noun', 'galaxia' ) . '</label><div class="col-md-9"><textarea class="galaxia-textarea" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></div></div>',
		'class_submit' => 'galaxia-button',
		'submit_field' => '<div class="galaxia-comments-form__row row"><div class="col-md-3"></div><div class="col-md-9">%1$s %2$s</div></div>',
	);
	comment_form($comment_form_params);
	?>

</div><!-- #comments -->
