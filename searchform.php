<?php
/**
 * The template for displaying search forms in bee theme
 */
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform order-lg-last">
<div class="form-group d-flex">
  <input type="text" class="form-control pl-3" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','bee' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
     <button type="submit" class="form-control search"><span class="ion-ios-search"></span></button>
</div>
</form>