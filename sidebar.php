<?php if (get_field('page_choose_sidebar')) { ?> 
<?php $saPageSidebar = get_field('page_choose_sidebar');  ?> 
    <!-- IF SIDEBAR 1 -->
    <?php if ($saPageSidebar == 'sidebar1') {   ?>
            <div id="sidebar1" class="sidebar" role="complementary"> 
                <?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
                <?php dynamic_sidebar( 'sidebar1' ); ?>
                <?php } ?>
			</div>
    <!-- IF SIDEBAR 2 -->
    <?php } else if ($saPageSidebar == 'sidebar2') {  ?>
    	<div id="sidebar2" class="sidebar" role="complementary"> 
                <?php if ( is_active_sidebar( 'sidebar2' ) ) { ?>
                <?php dynamic_sidebar( 'sidebar2' ); ?>
                <?php } ?> 
        </div>        
    <!-- IF SIDEBAR 3 -->
    <?php } else if ($saPageSidebar == 'sidebar3') {  ?>
    	<div id="sidebar3" class="sidebar" role="complementary"> 
                <?php if ( is_active_sidebar( 'sidebar3' ) ) { ?>
                <?php dynamic_sidebar( 'sidebar3' ); ?>
                <?php } ?> 
     </div>
     <!-- IF SIDEBAR 4 -->
    <?php } else if ($saPageSidebar == 'sidebar4') {  ?>
    	<div id="sidebar4" class="sidebar" role="complementary"> 
                <?php if ( is_active_sidebar( 'sidebar4' ) ) { ?>
                <?php dynamic_sidebar( 'sidebar4' ); ?>
                <?php } ?> 
               
		</div>
 	<!-- IF WHITEPAPER SIDEBAR 1 -->
    <?php } else if ($saPageSidebar == 'whitepaper1') {  ?>
    	<div id="whitepaper1" class="sidebar whitepaper-widget" role="complementary"> 
                <?php if ( is_active_sidebar( 'whitepaper1' ) ) { ?>
                <?php dynamic_sidebar( 'whitepaper1' ); ?>
                <?php } ?> 
               
		</div>	
        <!-- IF WHITEPAPER SIDEBAR 2 -->
    <?php } else if ($saPageSidebar == 'whitepaper2') {  ?>
    	<div id="whitepaper2" class="sidebar whitepaper-widget" role="complementary"> 
                <?php if ( is_active_sidebar( 'whitepaper2' ) ) { ?>
                <?php dynamic_sidebar( 'whitepaper2' ); ?>
                <?php } ?> 
               
		</div>	
        <!-- IF WHITEPAPER SIDEBAR 3 -->
    <?php } else if ($saPageSidebar == 'whitepaper3') {  ?>
    	<div id="whitepaper3" class="sidebar whitepaper-widget" role="complementary"> 
                <?php if ( is_active_sidebar( 'whitepaper3' ) ) { ?>
                <?php dynamic_sidebar( 'whitepaper3' ); ?>
                <?php } ?> 
               
		</div>	
        <!-- IF WHITEPAPER SIDEBAR 4 -->
    <?php } else if ($saPageSidebar == 'whitepaper4') {  ?>
    	<div id="whitepaper4" class="sidebar whitepaper-widget" role="complementary"> 
                <?php if ( is_active_sidebar( 'whitepaper4' ) ) { ?>
                <?php dynamic_sidebar( 'whitepaper4' ); ?>
                <?php } ?> 
               
		</div>	
        <!-- IF WHITEPAPER SIDEBAR 5 -->
    <?php } else if ($saPageSidebar == 'whitepaper5') {  ?>
    	<div id="whitepaper5" class="sidebar whitepaper-widget" role="complementary"> 
                <?php if ( is_active_sidebar( 'whitepaper5' ) ) { ?>
                <?php dynamic_sidebar( 'whitepaper5' ); ?>
                <?php } ?> 
               
		</div>	
<?php } else { ?> 
		
<?php }  ?> 
<?php } ?>

