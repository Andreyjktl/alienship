<?php
/**
 * Featured post content
 * @since Alien Ship 0.4
 */
?>
	<div class="item">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'alienship' ), the_title_attribute( 'echo=0' ) ); ?>">
			<?php if( has_post_thumbnail() ) {
				the_post_thumbnail( 'full' );
			} ?>
		</a>

		<div class="carousel-caption">
			<h3><?php the_title(); ?></h3>
			<?php if( has_excerpt() ) {
				the_excerpt();
			} ?>
		</div><!-- .carousel-caption -->
	</div><!-- .item -->