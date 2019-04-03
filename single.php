	<?php get_header(); ?>	
		
		<!-- row -->
			<div class="row"> 
				<!-- Page -->
				<div class="col-sm-8">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
					
					<!-- post -->	
					<div class="post" id="<?php the_ID(); ?>">	
						<a href="<?php the_permalink(); ?>" title="<?php the_title(''); ?>"><h2><?php the_title(); ?></h2></a>
						
						<?php the_content(); ?>	
						
						<div class="clear"></div>
							<div class="post-social">
							<?php if(function_exists('social_ring_show')){ social_ring_show();} ?>
							</div>
							
							<div class="post-tags">
								<?php the_tags('Etiketler: ', ', ', '<br />'); ?> 
							</div> 
							
							<div class="post-date"> 
							 Bu yazı <?php the_date(); ?> tarihinde <?php the_author(); ?>  tarafından yazılmış <?php the_views(); ?> kez okunmuştur.
							</div>
					</div>	
					<!--/ post -->	
					
					  <div class="post-comments">
						<div class="post-comments-in"><?php comments_template(); ?></div>
					  </div>
					
					<?php  endwhile; else: ?>
					<p>Böyle bir kayıt bulunamadı.Lütfen yeniden deneyiniz.</p>
					<?php endif; ?>	
					
					
		
				</div>
				<!-- #Page -->
				
				
				<?php get_sidebar(); ?>
				
			
				
				
			</div>
			<!-- row -->
			
	<?php get_footer(); ?>		