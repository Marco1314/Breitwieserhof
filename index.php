<?php get_header(); ?>
<body>
    
<?php get_template_part("content/standards/navigation/navigation"); ?>

<?php 

if( have_rows('content') ):

    // Loop through rows.
    while ( have_rows('content') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'textimage' ):
            $text = get_sub_field('text');
            $image = get_sub_field('image');
            $headline = get_sub_field('headline');
            $headline_typ = get_sub_field('headline_typ');

            get_template_part("content/elements/textimage/textimage");
            textimage($image,$text,$headline,$headline_typ);

            // Do something...

        // Case: Download layout.
        endif;


        if( get_row_layout() == 'book' ):
            $titel = get_sub_field('titel');
            $headline = get_sub_field("headline");

            get_template_part("content/elements/book/book");
            book($titel, $headline);

            // Do something...

        // Case: Download layout.
        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
<?php get_footer(); ?>
</body>
</html>