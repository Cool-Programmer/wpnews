<?php get_header(); ?>

<!-- TOP POSTS AREA	-->
<?php if(have_posts()): ?>
	<div class="ink-grid vertical-space">
	    <div class="panel">
	    	<h2>
				<?php 
		            if (is_category()) {
		              single_cat_title();
		            }elseif(is_author()){
		              the_post();
		              echo "Archives by: " . get_the_author();
		            }elseif(is_tag()){
		              single_tag_title();
		            }elseif(is_day()){
		              echo "Archives by day: " . get_the_date();
		            }elseif(is_month()){
		              echo "Archives by month" . get_the_date('F Y');
		            }elseif(is_year()){
		              echo "Archives by year" . get_the_date('Y');
		            }else{
		              echo "Archives";
		            }
		          ?>
			</h2>
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
			                    	<?php comments_number('No Responses', '1 Response', '% Response') ?>
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