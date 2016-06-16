<p class="intro"><?php echo $content; ?></p>
<?php
if ( $this->atts['load_thumbnail'] ) {
	the_post_thumbnail( 'full' );
}
?>