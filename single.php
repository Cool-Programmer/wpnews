<?php get_header(); ?>

<!-- TOP POSTS AREA	-->
<?php if(have_posts()): ?>
	<div class="ink-grid vertical-space">
	    <div class="panel">
	    	<div class="column-group">
	    		<div class="all-70 post">
	    			<?php while(have_posts()): the_post() ?>
						<h2><?php the_title(); ?></h2>
						<small class="slab">
	                    	<p class="meta"><?php echo __('Created by') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a> <?php echo __("on"); ?> <?php the_time('F j, Y g:i'); ?> | <?php echo __("Posted in");  ?>
								<?php 
									$categories = get_the_category();
									$separator = ", ";
									$output = null;
									if($categories){
										foreach ($categories as $category) {
											$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' . $separator;
										}
									}
								?>
								<?php echo trim($output, $separator); ?>
							</p>
	                    </small>
						
						<?php if(has_post_thumbnail()): ?>
		                    <div class="single-post-thumbnail-wrapper">
		                    	<?php the_post_thumbnail(); ?>
		                    </div>
		                <?php endif; ?>

		                <br>

		                <?php the_content(); ?>

		                <br>

		                <?php comments_template(); ?>
	    			<?php endwhile; ?>
	    		</div>

	    		<div class="all-30 widget">
	    			<div class="sidebar">
	    				<?php if(is_active_sidebar('sidebar')): ?>
							<?php dynamic_sidebar('sidebar'); ?>
	    				<?php endif; ?>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>