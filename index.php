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
	    	<h2><?php echo __("Recent News"); ?></h2>
	        <div id="car1" class="ink-carousel" data-space-after-last-slide="false" data-autoload="false">
	            <ul class="stage column-group half-gutters">
	            	<?php while(have_posts()): the_post() ?>
	                <li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
	                    <div class="post-thumbnail">
	                    	<?php the_post_thumbnail('news-thumb', ['class' => 'half-bottom-space']); ?>
	                    </div>
	                    <div class="description">
	                        <h4 class="no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
	                        <div class="excerpt">
	                        	<?php the_excerpt(); ?>
	                        </div>
	                    </div>
	                </li>
	                <?php endwhile; ?>
	            </ul>
	        </div>

	        <nav id="p1" class="ink-navigation">
	            <ul class="pagination black">
	            </ul>
	        </nav>
	    </div>
	    <script>
	        Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
	            new InkCarousel('#car1', {pagination: '#p1'});
	        });
	    </script>
<?php endif; ?>


<!-- SECOND PART -->
<div class="ink-grid panel">
      <div class="column-group">
        <div class="all-50">
          <h2><?php echo __("Featured Stories"); ?></h2>
          <div id="car3" class="ink-carousel" data-autoload="false">
            <ul class="stage column-group half-gutters unstyled">
				<?php
					$featured_args = [
						'category_name' => 'dragons'
					];
					$featured_query = new WP_Query($featured_args);
				?>
				<?php while($featured_query->have_posts()): $featured_query->the_post(); ?>
	                <li class="slide xlarge-100 large-100 medium-100 small-100 tiny-100">
	                    <div class="featured-post-thumbnail">
		                    <?php the_post_thumbnail('featured-image', ['class' => 'half-bottom-space']); ?>
		                </div>
	                    <h4 class="no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
	                    <div class="excerpt">
	                    	<?php the_excerpt(); ?>
	                    </div>
	                </li>
				<?php endwhile; ?>
            </ul>

            <nav id="p3" class="ink-navigation" data-previous-label="" data-next-label="">
                <ul class="pagination chevron">
                </ul>
            </nav>
        </div>

        <script>
            Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
                new InkCarousel('#car3', { pagination: '#p3', nextLabel: '', previousLabel: ''});
            });
        </script>


        </div>

        <div class="all-50">
            <h2><?php echo __("Popular"); ?></h2>
            <ul class="unstyled">
            	<?php
            		$args = [
            			'order_by' => 'comment_count',
            			'posts_per_page' => 3
            		];
            		$popular_query = new WP_Query($args);
            	?>
            	<?php while($popular_query->have_posts()): $popular_query->the_post(); ?>
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
    </div>

    <div class="panel vertical-space">
        <div id="car2" class="ink-carousel" data-autoload="false">
        	<h2><?php echo __("Business"); ?></h2>
            <ul class="stage column-group half-gutters unstyled">
            	<?php 
            		$args = [
            			'category_name' => 'vizarion'
            		];
            		$business_query = new WP_Query($args);
            	?>
            	<?php while($business_query->have_posts()): $business_query->the_post(); ?>
                <li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
                    <div class="business-post-image-wrapper">
                    	<?php the_post_thumbnail('full', ['class' => 'half-bottom-space']) ?>
                    </div>
                    <h4 class="no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                   <div class="excerpt">
                   		<?php the_excerpt(); ?>
                   </div>
                </li>
		        <?php endwhile; ?>
            </ul>

            <nav id="p2" class="ink-navigation" data-next-label="" data-previous-label="">
                <ul class="pagination dotted">
                </ul>
            </nav>

        </div>
        <script>
        Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
            new InkCarousel('#car2', {pagination: '#p2'})
        });
    </script>

    </div>
<?php get_footer(); ?>