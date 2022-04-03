
<?php function book($heading, $headline, $download) { ?> 
<h3 class="magazine__headline"><?php echo $headline ?></h3>
<div class="magazine">
	<div class="hard d-flex align-items-center justify-content-center" style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/assets/images/wood.jpg');"><p class="magazine__heading"><?php echo $heading ?></p></div>
	<div class="hard"></div>
    <div style="background-color:white" class="d-flex flex-column align-items-center">
        <p class="magazine__information">Suppen</p>
        <?php 
        if( have_rows('suppen') ):

            // Loop through rows.
            while( have_rows('suppen') ) : the_row();
        
                // Load sub field value.
                $text = get_sub_field('text');
                $food = get_sub_field("food");
                $datum = get_sub_field("datum");
                ?>
                        <p class="magazine__date text-center"><?php echo $datum ?></p>
                        <p class="magazine__food text-center"><?php echo $food ?></p>
                        <p class="magazine__info text-center"><?php echo $text ?></p>
                        
                <?php
            // End loop.
            endwhile;
        
        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>

    <div style="background-color:white" class="d-flex flex-column align-items-center">
        <p class="magazine__information">Hauptspeisen</p>
        <?php 
        if( have_rows('hauptspeise') ):

            // Loop through rows.
            while( have_rows('hauptspeise') ) : the_row();
        
                // Load sub field value.
                $text = get_sub_field('text');
                $food = get_sub_field("food");
                $datum = get_sub_field("datum");
                ?>
                        <p class="magazine__date text-center"><?php echo $datum ?></p>
                        <p class="magazine__food text-center"><?php echo $food ?></p>
                        <p class="magazine__info text-center"><?php echo $text ?></p>
                        
                <?php
            // End loop.
            endwhile;
        
        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>

    <div style="background-color:white" class="d-flex flex-column align-items-center">
        <p class="magazine__information">Desserts</p>
        <?php 
        if( have_rows('dessert') ):

            // Loop through rows.
            while( have_rows('dessert') ) : the_row();
        
                // Load sub field value.
                $text = get_sub_field('text');
                $food = get_sub_field("food");
                $datum = get_sub_field("datum");
                ?>
                        <p class="magazine__date text-center"><?php echo $datum ?></p>
                        <p class="magazine__food text-center"><?php echo $food ?></p>
                        <p class="magazine__info text-center"><?php echo $text ?></p>
                        
                <?php
            // End loop.
            endwhile;
        
        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>

</div>
<div class="hard"></div>
<div class="hard"></div>


<?php if($download) { ?>
<a href="<?php echo $download ?>" class="magazine__download">Alternativ Speisekarte Downloaden</a>
<?php } ?>

<?php } ?>



