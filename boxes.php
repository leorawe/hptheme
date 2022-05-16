<div class="hp-boxes-container">
<?php // Check rows exists. title, subtext with links
				if( have_rows('box_repeater') ):

						// Loop through rows.
						while( have_rows('box_repeater') ) : the_row();
								echo '<div class="hp-box-wrap"><div class="hp-box">';
								// Load sub field title.
								$boxtitle = get_sub_field('box_title');
								// Do something...
								if( !empty( $boxtitle ) ): ?>
								<div class="hp-box-title">
										<?php the_sub_field('box_title'); ?>
									</div>
								<?php endif; 

								// Load sub field of text.
								$text = get_sub_field('box_text');
                if( !empty( $text ) ): ?>
								<div class="hp-box-text">
										<?php the_sub_field('box_text'); ?>
									</div>
								<?php endif; 

								// Load sub field of text area.
								$text_area = get_sub_field('box_text_area');
                if( !empty( $text_area ) ): ?>
								<div class="hp-box-text">
										<?php the_sub_field('box_text_area'); ?>
									</div>
								<?php endif; 

								  
                  $link = get_sub_field('link');
                  if( $link ): 
                      $link_url = $link['url'];
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; 

								// Image
								?><div class="hp-image-container">
              <?php 
                $image = get_sub_field('image_boxed');
                if( !empty( $image ) ): ?>
                    <div class="hp-box-image">
											<?php if( $link ): ?>
											<a class="hp-box-link" href="<?php echo esc_url( $link_url ); ?>" >
											<?php endif; ?>
                    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    	<?php if( $link ): ?></a><?php endif; ?>
										</div>
                    <?php endif; ?>
              </div><?php

								// end of box
						echo '</div></div>';
						// End loop.
						endwhile;
				// No value.
				else :
						// Do something...
				endif;
?></div>