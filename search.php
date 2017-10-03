<?php get_header(); ?>

<!-- SEARCH -->
<form class="ink-form" method="get" action="<?php echo esc_url(home_url('/')) ?>">
    <div class="ink-grid">
        <div class="panel">
          <div class="control-group append-button">
            <div class="control all-100">
              <input type="text" name="s" id="s" placeholder="Search...">
            </div>
          </div>
        </div>
    </div>
</form>

<!-- TOP POSTS AREA	-->
<?php if(have_posts()): ?>
	<div class="ink-grid vertical-space">
	    <div class="panel">
	    	<h2><?php echo __("Search Results"); ?></h2>
	    	<div class="column-group">
	    		<div class="all-70 post">
	    			<ul class="unstyled">
		    			<?php while(have_posts()): the_post() ?>
							<li class="column-group half-gutters">
			                    <div class="all-40 small-50 tiny-50 popular-image-wrapper">
			                    	<?php the_post_thumbnail(); ?>
			                    </div>
			                    <div class="all-60 small-50 tiny-50">
			                    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			                    	<div class="excerpt">
			                    		<?php the_excerpt(); ?>
			                    	</div>
			                    </div>
			                </li>
		    			<?php endwhile; ?>
		    		</ul>
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