<!-- 
    <div class="navigation">
    <div class="navigation__logoContainer">
        <p class="navigation__logo"><?php the_field("text"); ?></p>
    </div>
 
</div>

-->
<nav class="navbar-dark navigation navbar navbar-expand-lg d-block" style="background-image:url(<?php the_field('nav-image'); ?>); ">
  <div class="container">
    <a class="navbar-brand navigation__logo" href="#"><?php the_field("text"); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php 
    $args = array(
        'theme_location' => 'mainnav',
        'container_class'   => "navigation__container collapse navbar-collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
        "container_id" => "navbarSupportedContent",
        'menu_class'        => "navigation__links navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    );
    wp_nav_menu( $args );
    ?>
    <div class="navigation__content">
      <?php 
          $headline = get_field("headline");
          $text = get_field("info");
      ?>
      <h1 class="navigation__headline"><?php echo $headline ?></h1>
      <p class="navigation__info"><?php echo $text ?></p>

      <?php 
      
          if( have_rows('buttons') ):
            ?>
            <div class="d-flex flex-column align-items-center">
              <?php
            // Loop through rows.
            while( have_rows('buttons') ) : the_row();
        
                // Load sub field value.
                $text = get_sub_field('button_text');
                $link = get_sub_field('link');

                ?>
  
                  <?php if($link) { ?>
                    <a class="navigation__button" href="<?php echo $link ?>"><?php echo $text ?></a>
                  <?php } ?>
                <?php
                // Do something...
        
            // End loop.
            endwhile;
            ?>
            </div>
            <?php
        
        // No value.
        else :
            // Do something...
        endif;
      
      ?>
    </div>
  </div>
</nav>