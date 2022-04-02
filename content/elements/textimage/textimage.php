<?php
    function textimage($img, $txt, $headline, $type) { ?>
    <div class="textimage">

        <div class="container">
            <div class="row">

                <div class="textimage__textContainer col-12 col-lg-6">
                    <<?php echo $type ?> class="w-100 textimage__headline"><?php echo $headline ?></<?php echo $type ?>>
                    <p class="textimage__text"><?php echo $txt ?></p>
                </div>

                <div class="textimage__imageContainer col-12 col-lg-6">
                    <img src="<?php echo $img ?>" class="textimage__image" alt="Bild" title="Bild" />
                </div>
                
            </div>
        </div>

    </div>

<?php } ?>
