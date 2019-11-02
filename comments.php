<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bee
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

<li class="comment">
<div class="vcard bio">
  <img src="images/person_1.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
  <h3>John Doe</h3>
  <div class="meta mb-2">February 07, 2019 at 2:21pm</div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
  <p><a href="#" class="reply">Reply</a></p>
</div>
</li>
</ul>
<div class="comment-form-wrap pt-5">
<h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
<form action="#" class="p-5 bg-light">
  <div class="form-group">
	<label for="name">Name *</label>
	<input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
	<label for="email">Email *</label>
	<input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
	<label for="website">Website</label>
	<input type="url" class="form-control" id="website">
  </div>

  <div class="form-group">
	<label for="message">Message</label>
	<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="form-group">
	<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
  </div>

</form>
</div>
</div>
</div> <!-- .col-md-8 -->

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$bee_comment_count = get_comments_number();
			if ( '1' === $bee_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bee' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bee_comment_count, 'comments title', 'bee' ) ),
					number_format_i18n( $bee_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bee' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
