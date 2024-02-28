<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LashExtension
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="post-comments" class="post-comments">

    <?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
    <h5 class="h5-lg txt-color-01">

        <?php
			$lash_extension_comment_count = get_comments_number();
			if ( '1' === $lash_extension_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Comments', 'lash-extension' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $lash_extension_comment_count, 'comments title', 'lash-extension' ) ),
					number_format_i18n( $lash_extension_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span class="txt-color-03">' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
    </h5><!-- .comments-title -->

    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
        <?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
    </ol><!-- .comment-list -->

    <?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'lash-extension' ); ?></p>
    <?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->