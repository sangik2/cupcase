<!-- 		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div>

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div>
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header> -->
	