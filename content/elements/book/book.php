
<?php function book($heading, $headline) { ?> 
<h3 class="magazine__headline"><?php echo $headline ?></h3>
<div class="magazine">
	<div class="hard d-flex align-items-center justify-content-center" style="background-color:white;"><p><?php echo $heading ?></p></div>
	<div class="hard"></div>

    <?php 
    if( have_rows('seiten') ):

        // Loop through rows.
        while( have_rows('seiten') ) : the_row();
    
            // Load sub field value.
            $text = get_sub_field('text');
            ?>
	            <div style="background:White" class="d-flex justify-content-center align-items-center"> <?php echo $text ?> </div>
            <?php
        // End loop.
        endwhile;
    
    // No value.
    else :
        // Do something...
    endif;
    ?>
</div>

<?php } ?>

	<div class="hard"></div>
	<div class="hard"></div>

