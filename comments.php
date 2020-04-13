<?php
/**
 * The template for displaying comments
 * @package bee
 */
 $comments_name = esc_html__( 'Name *', 'bee');
 $comments_email = esc_html__( 'Email *', 'bee');
 $comments_site = esc_html__( 'Website', 'bee');
 $comments_message = esc_html__( 'Message', 'bee');
?>
<?php
	if ( have_comments() ) :
?>
<div class="pt-5 mt-5">
    <h3 class="mb-5 h4 font-weight-bold"><?php comments_number('No Comment', '1 Comment', '% Comments')?></h3>
        <ul class="comment-list">
			<?php
                    wp_list_comments(array(
                            'callback' => 'bee_list_comment',
                    ));
                ?>
        </ul>
        <?php endif;  ?>
    <div class="comment-form-wrap pt-5">
        <h3 class="mb-5 h4 font-weight-bold"><?php esc_html_e('Leave a comment','bee' ); ?></h3>
        <?php
		    $comments_args = array(
                    'fields' => array (
                            'author' => '<div class="form-group"><label for="name">'. $comments_name .'</label><input type="text" class="form-control" id="name" ' . esc_attr( $commenter['comment_author'] ) . $aria_req . $html_req . ' /></div>',
                            'email'  => '<div class="form-group"><label for="email">'.$comments_email.'</label><input id="email"  class="form-control" ' . ( $html5 ? 'type="email"' : 'type="text"' ) .  esc_attr(  $commenter['comment_author_email'] ) . $aria_req . $html_req  . ' /></div>',
                            'website'  => '<div class="form-group"><label for="website">'.$comments_site.'</label><input id="website"  class="form-control" ' . ( $html5 ? 'type="url"' : 'type="text"' ) .  esc_attr(  $commenter['comment_author_website'] ) . $aria_req . $html_req  . ' /></div>',
                            ),
                    'comment_field'        => '<div class="form-group"><label for="message">'.$comments_message.'</label><textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea></div>',
                    'submit_button'        => '<div class="form-group"><input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary"></div>',
                );
            comment_form($comments_args);
        ?>
    </div>
</div>
