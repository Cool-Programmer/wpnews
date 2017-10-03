<?php get_header(); ?>

<!-- TOP POSTS AREA	-->
<?php if(have_posts()): ?>
	<div class="ink-grid vertical-space">
	    <div class="panel">
	    	<div class="column-group">
	    		<div class="all-70 post">
	    			<?php while(have_posts()): the_post() ?>
						<h2><?php the_title(); ?></h2>
		                <?php the_content(); ?>
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