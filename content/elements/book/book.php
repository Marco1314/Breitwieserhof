
<?php function book($heading, $headline, $download) { ?> 
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
            $image = get_sub_field("image");
            $food = get_sub_field("food");
            ?>
                    <div style="background:White" class="d-flex flex-column justify-content-center align-items-center">
                    <?php if($image) { ?> 
                        <img src="<?php echo $image ?>" class="magazine__image"/>
                    <?php } ?>
                    <p class="magazine__food"><?php echo $food ?></p>
                    <p><?php echo $text ?></p>
                 </div>
            <?php
        // End loop.
        endwhile;
    
    // No value.
    else :
        // Do something...
    endif;
    ?>
</div>
<div class="hard"></div>
<div class="hard"></div>


<?php if($download) { ?>
<a href="<?php echo $download ?>" class="magazine__download">Alternativ Speisekarte Downloaden</a>
<?php } ?>

<?php } ?>



