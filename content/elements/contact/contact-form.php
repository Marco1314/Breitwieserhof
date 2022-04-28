<?php function contact($headline) { ?>

<div class="container" id="contact">
    <form action="<?php echo get_stylesheet_directory_uri(); ?>/content/elements/contact/contact.php" method="POST" class="contact">

    <h2 class="contact__headline"><?php echo $headline ?></h2>
    <?php 
    if( have_rows('placeholder') ):

        // Loop through rows.
        while( have_rows('placeholder') ) : the_row();

            // Load sub field value.
            $placeholder = get_sub_field('text');
            // Do something...
        ?>

        <label for="<?php echo $placeholder ?>"><?php echo $placeholder ?>:</label>
            <input name="<?php echo $placeholder ?>" type="text" placeholder="<?php echo $placeholder ?>" id="<?php echo $placeholder ?>">
        <?php
        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
    ?>
    <label for="text"></label>
    <textarea name="Nachricht" id="text" rows="20" placeholder="Nachricht eingeben..."></textarea>
    <input type="submit" value="senden">


    </form>

    <?php $txt = get_sub_field("informationstext"); ?>
    <?php $telefon = get_sub_field("telefon"); ?>
    <?php $ortstext = get_sub_field("ortstext"); ?>
    <?php $ort = get_sub_field("ort"); ?>
    <p class="contact__information"><?php echo $txt; ?>: <br/ ><?php echo $telefon ?></p>
    <p class="contact__information"><?php echo $ortstext; ?><br /><?php echo $ort; ?></p>
</div>
<?php } ?>