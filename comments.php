<?php
/**
 * The template for displaying comments
 * @package bee
 */
?>
<?php
	if ( have_comments() ) :
?>
<div class="pt-5 mt-5">
    <h3 class="mb-5 h4 font-weight-bold"><?php comments_number('No Comment', '1 Comment', '% Comments')?></h3>
        <ul class="comment-list">
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
        <?php endif;  ?>
<div class="comment-form-wrap pt-5">
    <h3 class="mb-5 h4 font-weight-bold"><?php esc_html_e('Leave a comment','bee' ); ?></h3>
    <?php
        $comments_args = array(
                    'fields' => array (
                            'author' => '<div class="form-group"><label for="name"></label><input type="text" class="form-control" id="name" ' . esc_attr( $commenter['comment_author'] ) . $aria_req . $html_req . ' /></div>',
                            'email'  => '<div class="form-group"><label for="email"></label><input id="email"  class="form-control" ' . ( $html5 ? 'type="email"' : 'type="text"' ) .  esc_attr(  $commenter['comment_author_email'] ) . $aria_req . $html_req  . ' /></div>',
                            'website'  => '<div class="form-group"><label for="website"></label><input id="website"  class="form-control" ' . ( $html5 ? 'type="url"' : 'type="text"' ) .  esc_attr(  $commenter['comment_author_website'] ) . $aria_req . $html_req  . ' /></div>',
                            ),
                    'comment_field'        => '<div class="form-group"><label for="message"></label><textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea></div>',
                    'submit_button'        => '<div class="form-group"><input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary"></div>',
        );
        comment_form($comments_args);
    ?>
</div>
