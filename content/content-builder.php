<?php if( have_rows('content_build') ):

while( have_rows('content_build') ): the_row();

//***********************************************************************************************
//  	One 100% Column
//***********************************************************************************************

if( get_row_layout() == 'col_1' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

	  				<div class="small-12 cell">'.get_sub_field('col_1a').'</div>
				
				</div>
				</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
				
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

	  				<div class="small-12 cell">'.get_sub_field('col_1a').'</div>

				</div>
		</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

	  				<div class="small-12 cell">'.get_sub_field('col_1a').'</div>

					</div>
				</div>


			</section>';

			endif;

}
//***********************************************************************************************
//  	One 100% Column:  No rows, cell or formatting
//
//***********************************************************************************************


if( get_row_layout() == 'col_1_empty_noformat' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">';

		echo '
		
		'.get_sub_field('col_1a_empty_noformat').'

</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">';

echo '

'.get_sub_field('col_1a_empty_noformat').'



</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">';

				

			echo '

'.get_sub_field('col_1a_empty_noformat').'

</section>';

endif;

}


//***********************************************************************************************
//  	One 100% Column:  No rows or cell
//
//***********************************************************************************************

if( get_row_layout() == 'col_1_empty' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">';

		echo '
		
		'.get_sub_field('col_1a_empty').'

</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">';

echo '

'.get_sub_field('col_1a_empty').'



</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">';

				

			echo '

'.get_sub_field('col_1a_empty').'

</section>';

endif;

}

//***********************************************************************************************
//  	Two 50% cell 
//
//***********************************************************************************************


if( get_row_layout() == 'col_2' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">

					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '
					
					<div class="small-12 large-6 cell">'.get_sub_field('col_2a').'</div>

					<div class="small-12 large-6 cell">'.get_sub_field('col_2b').'</div>

				</div>
				</div>



			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 large-6 cell">'.get_sub_field('col_2a').'</div>

					<div class="small-12 large-6 cell">'.get_sub_field('col_2b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 large-6 cell">'.get_sub_field('col_2a').'</div>

					<div class="small-12 large-6 cell">'.get_sub_field('col_2b').'</div>

				</div>
				</div>


			</section>';

			endif;

}
//***********************************************************************************************
//  	Two cell: 25% Column +  75% Column 
//
//***********************************************************************************************

if( get_row_layout() == 'col_2a_1' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-3 large-3 cell">'.get_sub_field('col_2a_1a').'</div>

					<div class="small-12 medium-9 large-9 cell">'.get_sub_field('col_2a_1b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-3 large-3 cell">'.get_sub_field('col_2a_1a').'</div>

					<div class="small-12 medium-9 large-9 cell">'.get_sub_field('col_2a_1b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-3 large-3 cell">'.get_sub_field('col_2a_1a').'</div>

					<div class="small-12 medium-9 large-9 cell">'.get_sub_field('col_2a_1b').'</div>

				</div>
				</div>


			</section>';

			endif;

}


//***********************************************************************************************
//  	Two cell: 75% Column +  25% Column 
//
//***********************************************************************************************


if( get_row_layout() == 'col_2_1' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-9 large-9 cell">'.get_sub_field('col_2_1a').'</div>

					<div class="small-12 medium-3 large-3 cell">'.get_sub_field('col_2_1b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-9 large-9 cell">'.get_sub_field('col_2_1a').'</div>

					<div class="small-12 medium-3 large-3 cell">'.get_sub_field('col_2_1b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-9 large-9 cell">'.get_sub_field('col_2_1a').'</div>

					<div class="small-12 medium-3 large-3 cell">'.get_sub_field('col_2_1b').'</div>

				</div>
				</div>


			</section>';

			endif;

}


//***********************************************************************************************
//  	60% Column + 10% Spacing + 30% Column
//
//***********************************************************************************************


if( get_row_layout() == 'col_2_2' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 large-7 cell">'.get_sub_field('col_2_2a').'</div>

					<div class="small-12 large-4 medium-offset-1 cell">'.get_sub_field('col_2_2b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 large-7 cell">'.get_sub_field('col_2_2a').'</div>

					<div class="small-12 large-4 medium-offset-1 cell">'.get_sub_field('col_2_2b').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 large-7 cell">'.get_sub_field('col_2_2a').'</div>

					<div class="small-12 large-4 medium-offset-1 cell">'.get_sub_field('col_2_2b').'</div>

				</div>
				</div>


			</section>';

			endif;

}
//***********************************************************************************************
//  	2 cell (Image on Left)
//
//***********************************************************************************************

if( get_row_layout() == 'row_stagger_img_left' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');
if ( $section_background == 'image' ): 
$img = get_sub_field('section_background_image');
echo '<section class="'.get_sub_field('section_class').' stagger" style="background-image:url('. $img .')">

	  			<div class="grid-container_stagger" data-equalizer data-equalize-on="medium">
				<div class="grid-x grid-margin-x">
				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

						<div class="small-12 medium-6 large-6 cell stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_left');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="small-12 medium-6 large-6 cell flex-center stagger_text" data-equalizer-watch>

							

								'.get_sub_field('stagger_text_right').'

							

						</div>

						<div class="clearfix"></div>
				</div>
				  </div>

			</section>';

elseif ( $section_background == 'color' ):

echo '<section class="stagger '.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container_stagger" data-equalizer data-equalize-on="medium">

				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 large-6 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

						<div class="small-12 medium-6 large-6 cell stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_left');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">

						</div>

						<div class="small-12 medium-6 large-6 cell flex-center stagger_text" data-equalizer-watch>

							

								'.get_sub_field('stagger_text_right').'

							

						</div>

						<div class="clearfix"></div>

				  </div>



			</section>';

elseif ( $section_background == 'none' ):

echo '<section class="stagger '.get_sub_field('section_class').'">

	  			<div class="grid-container row_stagger" data-equalizer data-equalize-on="medium">
					<div class="grid-x">
				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 large-6 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

						<div class="small-12 medium-6 large-6 cell stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_left');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="small-12 medium-6 large-6 cell flex-center stagger_text" data-equalizer-watch>

							

								'.get_sub_field('stagger_text_right').'

							

						</div>

						<div class="clearfix"></div>

				  </div>
				</div>


			</section>';

			endif;

}


//***********************************************************************************************
//  	2 cell (Image on Right)
//
//***********************************************************************************************


//***********************************************************************************************
//  	2 cell (Image on Right)
//
//***********************************************************************************************


if( get_row_layout() == 'row_stagger_img_right' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');
if ( $section_background == 'image' ): 
$img = get_sub_field('section_background_image');
echo '<section class="'.get_sub_field('section_class').' stagger" style="background-image:url('. $img .')">

	  			<div class="grid-container row_stagger" data-equalizer data-equalize-on="medium">
				<div class="grid-x">
				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '
						<div class="small-12 large-6 cell hide-for-medium stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_right');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="small-12 medium-6 large-6 cell flex-center stagger_text" data-equalizer-watch>
								'.get_sub_field('stagger_text_left').'
						</div>
						<div class="small-12 large-6 cell show-for-medium stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_right');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="clearfix"></div>

				  </div>
				</div>
			</section>';

elseif ( $section_background == 'color' ):

echo '<section class="stagger '.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container row_stagger" data-equalizer data-equalize-on="medium">
				<div class="grid-x">

				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 large-6 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '
						<div class="small-12 large-6 cell hide-for-medium stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_right');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="small-12 medium-6 large-6 cell flex-center stagger_text" data-equalizer-watch>
								'.get_sub_field('stagger_text_left').'
						</div>
						<div class="small-12 large-6 cell show-for-medium stagger_image flex-center" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_right');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="clearfix"></div>

				  </div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section class="stagger '.get_sub_field('section_class').'">

	  			<div class="grid-container row_stagger" data-equalizer data-equalize-on="medium">
				<div class="grid-x">

				';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 large-6 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

						<div class="small-12 medium-6 large-6 cell stagger_image flex-center hide-for-medium">';
							$img = get_sub_field('stagger_image_right');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="small-12 medium-6 large-6 cell flex-center stagger_text" data-equalizer-watch>

							

								'.get_sub_field('stagger_text_left').'

							

						</div>
						<div class="small-12 medium-6 large-6 cell stagger_image flex-center show-for-medium" data-equalizer-watch>';
							$img = get_sub_field('stagger_image_right');
							echo '<img src="'.$img['url'].'" width="'.$img['width'].'" height="'.$img['height'].'" alt="'.$img['alt'].'" title="'.$img['title'].'">
						</div>

						<div class="clearfix"></div>

				  </div>
				</div>


			</section>';

			endif;

}
//***********************************************************************************************
//  	3 cell 
//
//***********************************************************************************************


if( get_row_layout() == 'col_3' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
						';
	
					//IF HEADLINE, DISPLAY IT
	
					 if (get_sub_field('section_headline')) 
	
						{ 
	
							echo '<div class="small-12 cell section_header">
	
							<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 
	
						}
	
	
				echo '
	
						<div class="small-12 large-4 cell">'.get_sub_field('col_3a').'</div>
	
						<div class="small-12 large-4 cell">'.get_sub_field('col_3b').'</div>
	
						<div class="small-12 large-4 cell">'.get_sub_field('col_3c').'</div>
	
					</div>
				</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
						<div class="grid-x grid-margin-x">
						';
	
					//IF HEADLINE, DISPLAY IT
	
					 if (get_sub_field('section_headline')) 
	
						{ 
	
							echo '<div class="small-12 cell section_header">
	
							<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 
	
						}
	
				echo '
	
						<div class="small-12 large-4 cell">'.get_sub_field('col_3a').'</div>
	
						<div class="small-12 large-4 cell">'.get_sub_field('col_3b').'</div>
	
						<div class="small-12 large-4 cell">'.get_sub_field('col_3c').'</div>
	
					</div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
					<div class="grid-x grid-margin-x section-content">
	
						';
	
					//IF HEADLINE, DISPLAY IT
	
					 if (get_sub_field('section_headline')) 
	
						{ 
	
							echo '<div class="small-12 cell section_header">
	
							<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 
	
						}
	
				echo '
	
						<div class="large-auto cell">'.get_sub_field('col_3a').'</div>
	
						<div class="large-auto cell">'.get_sub_field('col_3b').'</div>
	
						<div class="large-auto cell">'.get_sub_field('col_3c').'</div>
	
					</div>
				</div>


			</section>';

			endif;

}


//***********************************************************************************************
//  	4 cell (25% each)
//
//***********************************************************************************************


if( get_row_layout() == 'col_4' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">';
				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					</div>
					</div>
					<div class="grid-container">
					<div class="grid-x grid-margin-x">
					<div class="small-12 large-3 cell">'.get_sub_field('col_4a').'</div>

					<div class="small-12 large-3 cell">'.get_sub_field('col_4b').'</div>

					<div class="small-12 large-3 cell">'.get_sub_field('col_4c').'</div>

					<div class="small-12 large-3 cell">'.get_sub_field('col_4d').'</div>

				</div>
			</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '
					</div>
					</div>
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="small-12 large-3 cell">'.get_sub_field('col_4a').'</div>
		
							<div class="small-12 large-3 cell">'.get_sub_field('col_4b').'</div>
		
							<div class="small-12 large-3 cell">'.get_sub_field('col_4c').'</div>
		
							<div class="small-12 large-3 cell">'.get_sub_field('col_4d').'</div>
						</div>
				</div>



			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">';

				//IF HEADLINE, DISPLAY IT

					if (get_sub_field('section_headline')) 

						{ 

						echo '<div class="small-12 cell">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

							} 

					echo'
					</div>
					</div>
					<div class="grid-container">
					<div class="grid-x grid-margin-x">
					<div class="small-12 large-3 cell">'.get_sub_field('col_4a').'</div>

					<div class="small-12 large-3 cell">'.get_sub_field('col_4b').'</div>

					<div class="small-12 large-3 cell">'.get_sub_field('col_4c').'</div>

					<div class="small-12 large-3 cell">'.get_sub_field('col_4d').'</div>
				</div>
				</div>



			</section>';

			endif;

}


//***********************************************************************************************
//  	6 cell 
//
//***********************************************************************************************


if( get_row_layout() == 'col_6' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section class="stagger '.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">';
				
				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6a').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6b').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6c').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6d').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6e').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6f').'</div>
				</div>
				</div>



			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6a').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6b').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6c').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6d').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6e').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6f').'</div>

				</div>
				</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
				<div class="grid-x grid-margin-x section-content">
					';

				//IF HEADLINE, DISPLAY IT

				 if (get_sub_field('section_headline')) 

				 	{ 

						echo '<div class="small-12 cell section_header">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

    				}

			echo '

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6a').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6b').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6c').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6d').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6e').'</div>

					<div class="small-12 medium-4 large-2 cell">'.get_sub_field('col_6f').'</div>

				</div>
				</div>


			</section>';

			endif;

}

//***********************************************************************************************
//  	Tabs
//
//***********************************************************************************************


if( get_row_layout() == 'tabs' ){ 

$section_headline = get_sub_field('section_headline');

$section_background = get_sub_field('section_background_select');

$title_alignment = get_sub_field('section_title_align');

if ( $section_background == 'image' ): 

$img = get_sub_field('section_background_image');

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-image:url('. $img .')">

	 	  			<div class="grid-container">
				';

				//IF HEADLINE, DISPLAY IT

					if (get_sub_field('section_headline')) 

						{ 

						echo '<div class="small-12 cell">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

							} 

					echo '
					<div class="grid-container">
					<ul class="tabs grid-x" data-tabs id="mytabs">';

					//TAB NAVIGATION

					if (get_sub_field('tab_1_name'))

					{

						echo '<li class="large-auto cell tabs-title is-active"><a href="#tab1">' . get_sub_field('tab_1_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_2_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab2">' . get_sub_field('tab_2_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_3_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab3">' . get_sub_field('tab_3_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_4_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab4">' . get_sub_field('tab_4_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_5_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab5">' . get_sub_field('tab_5_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_6_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab6">' . get_sub_field('tab_6_name') . '</a></li>'; 

					}

					echo'</ul>
					</div>
				
					<div class="grid-container">
					
					<div class="tabs-content grid-x" data-tabs-content="mytabs">';

					//TAB CONTENT

					if (get_sub_field('tab_1_content'))

					{

						echo '<div class="tabs-panel cell auto is-active" id="tab1">' . get_sub_field('tab_1_content') . '</div>'; 

					}

					if (get_sub_field('tab_2_content'))

					{

						echo '<div class="tabs-panel" id="tab2">' . get_sub_field('tab_2_content') . '</div>'; 

					}

					if (get_sub_field('tab_3_content'))

					{

						echo '<div class="tabs-panel" id="tab3">' . get_sub_field('tab_3_content') . '</div>'; 

					}

					if (get_sub_field('tab_4_content'))

					{

						echo '<div class="tabs-panel" id="tab4">' . get_sub_field('tab_4_content') . '</div>'; 

					}

					if (get_sub_field('tab_5_content'))

					{

						echo '<div class="tabs-panel" id="tab5">' . get_sub_field('tab_5_content') . '</div>'; 

					}

					if (get_sub_field('tab_6_content'))

					{

						echo '<div class="tabs-panel" id="tab6">' . get_sub_field('tab_6_content') . '</div>'; 

					}

					echo'

				</div>
				</div>
			</div>


			</section>';

elseif ( $section_background == 'color' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'" style="background-color:'. get_sub_field('section_background_color') .'">

	  			  			<div class="grid-container">
				';

				//IF HEADLINE, DISPLAY IT

					if (get_sub_field('section_headline')) 

						{ 

						echo '<div class="small-12 cell">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

							} 

					echo '
					<div class="grid-container">
					<ul class="tabs grid-x" data-tabs id="mytabs">';

					//TAB NAVIGATION

					if (get_sub_field('tab_1_name'))

					{

						echo '<li class="large-auto cell tabs-title is-active"><a href="#tab1">' . get_sub_field('tab_1_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_2_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab2">' . get_sub_field('tab_2_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_3_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab3">' . get_sub_field('tab_3_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_4_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab4">' . get_sub_field('tab_4_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_5_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab5">' . get_sub_field('tab_5_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_6_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab6">' . get_sub_field('tab_6_name') . '</a></li>'; 

					}

					echo'</ul>
					</div>
				
					<div class="grid-container">
					
					<div class="tabs-content grid-x" data-tabs-content="mytabs">';

					//TAB CONTENT

					if (get_sub_field('tab_1_content'))

					{

						echo '<div class="tabs-panel cell auto is-active" id="tab1">' . get_sub_field('tab_1_content') . '</div>'; 

					}

					if (get_sub_field('tab_2_content'))

					{

						echo '<div class="tabs-panel" id="tab2">' . get_sub_field('tab_2_content') . '</div>'; 

					}

					if (get_sub_field('tab_3_content'))

					{

						echo '<div class="tabs-panel" id="tab3">' . get_sub_field('tab_3_content') . '</div>'; 

					}

					if (get_sub_field('tab_4_content'))

					{

						echo '<div class="tabs-panel" id="tab4">' . get_sub_field('tab_4_content') . '</div>'; 

					}

					if (get_sub_field('tab_5_content'))

					{

						echo '<div class="tabs-panel" id="tab5">' . get_sub_field('tab_5_content') . '</div>'; 

					}

					if (get_sub_field('tab_6_content'))

					{

						echo '<div class="tabs-panel" id="tab6">' . get_sub_field('tab_6_content') . '</div>'; 

					}

					echo'

				</div>
				</div>
			</div>


			</section>';

elseif ( $section_background == 'none' ):

echo '<section id="'.get_sub_field('section_id').'" class="'.get_sub_field('section_class').'">

	  			<div class="grid-container">
				';

				//IF HEADLINE, DISPLAY IT

					if (get_sub_field('section_headline')) 

						{ 

						echo '<div class="small-12 cell">

						<h2 class="section_title '. $title_alignment.'">'.$section_headline.'</h2></div>'; 

							} 

					echo '
					<div class="grid-container">
					<ul class="tabs grid-x" data-tabs id="mytabs">';

					//TAB NAVIGATION

					if (get_sub_field('tab_1_name'))

					{

						echo '<li class="large-auto cell tabs-title is-active"><a href="#tab1">' . get_sub_field('tab_1_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_2_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab2">' . get_sub_field('tab_2_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_3_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab3">' . get_sub_field('tab_3_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_4_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab4">' . get_sub_field('tab_4_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_5_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab5">' . get_sub_field('tab_5_name') . '</a></li>'; 

					}

					if (get_sub_field('tab_6_name'))

					{

						echo '<li class="large-auto cell tabs-title"><a href="#tab6">' . get_sub_field('tab_6_name') . '</a></li>'; 

					}

					echo'</ul>
					</div>
				
					<div class="grid-container">
					
					<div class="tabs-content grid-x" data-tabs-content="mytabs">';

					//TAB CONTENT

					if (get_sub_field('tab_1_content'))

					{

						echo '<div class="tabs-panel cell auto is-active" id="tab1">' . get_sub_field('tab_1_content') . '</div>'; 

					}

					if (get_sub_field('tab_2_content'))

					{

						echo '<div class="tabs-panel" id="tab2">' . get_sub_field('tab_2_content') . '</div>'; 

					}

					if (get_sub_field('tab_3_content'))

					{

						echo '<div class="tabs-panel" id="tab3">' . get_sub_field('tab_3_content') . '</div>'; 

					}

					if (get_sub_field('tab_4_content'))

					{

						echo '<div class="tabs-panel" id="tab4">' . get_sub_field('tab_4_content') . '</div>'; 

					}

					if (get_sub_field('tab_5_content'))

					{

						echo '<div class="tabs-panel" id="tab5">' . get_sub_field('tab_5_content') . '</div>'; 

					}

					if (get_sub_field('tab_6_content'))

					{

						echo '<div class="tabs-panel" id="tab6">' . get_sub_field('tab_6_content') . '</div>'; 

					}

					echo'

				</div>
				</div>
			</div>


			</section>';

			endif;
}
endwhile; endif;
?>


