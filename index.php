
	<?php get_header(); ?>	
	
		<!-- row -->
			<div class="row"> 
				<!-- Page -->
				<div class="col-sm-8">
				
				<?php 
						if ( have_posts() ) :
						while ( have_posts() ) : the_post();
				?> 				
					
					<!-- post -->	
					<div class="post" id="<?php the_ID(); ?>">	
						<a href="<?php the_permalink(); ?>" title="<?php the_title(''); ?>"><h2><?php the_title(); ?></h2></a>
						
					<?php if ( has_post_thumbnail() ) { ?>	<a href="<?php the_permalink(); ?>" title="<?php the_title(''); ?>"><?php the_post_thumbnail(' img-thumbnail');  ?></a> <?php } ?>

						
						<?php the_excerpt(); ?>	
						
						<a href="<?php the_permalink(); ?>" class="btn btn-blue pull-right"><span>Devamını Oku</span></a>
						<div class="clear"></div>
					</div>	
					<!--/ post -->	
					
					  <?php  endwhile; else: ?>
					  <p>Henüz yazı bulunmamaktadır.</p>
					  <?php endif; ?>	
						
						
						<!-- Pagination -->
						<div class="pagination">
							<?php posts_nav_link( ' &#183; ', '&laquo; Önceki Sayfa', 'Sonraki Sayfa &raquo;' ); ?>	 
						<!-- #Pagination -->	
						</div>

				</div>
				<!-- #Page -->
				
				<?php get_sidebar(); ?>
				
			
				
				
			</div>
			<!-- row -->
			
	<?php get_footer(); ?>		