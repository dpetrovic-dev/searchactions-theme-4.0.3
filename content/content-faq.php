<?php 	// check for rows (parent repeater)
				if( have_rows('faq_group') ): ?>
                <?php get_template_part( 'content/content', 'builder' ); ?>
					<section class="faq">
                    <div class="grid-container">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('faq_group') ): the_row(); ?>
						<div class="small-12 columns faq-group">
							<h2><?php the_sub_field('faq_category'); ?></h2>
							<?php 

							// check for rows (sub repeater)
							if( have_rows('faq') ): ?>
								<ul class="accordion" data-accordion data-allow-all-closed="true">
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('faq') ): the_row();

									// display values
									?>
                                     <li class="accordion-item faq-item" data-accordion-item itemscope itemtype='http://schema.org/Question'>
                                        
                                            <a href="/" class="accordion-title faq-question" title="Question"><h3 itemprop="name"><?php the_sub_field('faq_question'); ?></h3></a>
                                        
                                        <div class="accordion-content" data-tab-content itemprop='suggestedAnswer acceptedAnswer' itemscope itemtype='http://schema.org/Answer'>
                                            <div class="faq-answer" itemprop="text"><?php the_sub_field('faq_answer'); ?></div>
                                        </div>
                                      </li>
								<?php endwhile; ?>
								</ul>
							<?php endif; //if( get_sub_field('faq') ): ?>
						</div>	

					<?php endwhile; // while( has_sub_field('faq-group') ): ?>
                    </div><!-- end row -->
					</section>
				<?php endif; // if( get_field('faq-group') ): ?>