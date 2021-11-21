<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once "assets/headers.php";?>
    </head>
    <body class="">
      <!-- Pushy Menu -->
		<?php require_once "assets/arrays_two.php";?>
		<?php require_once "assets/menu.php";?>
      <!-- Site Overlay -->
      <div class="site-overlay"></div>
        <?php require_once "modules/blocks/top_block.php"?>
        <section id="feat">
            <div class="container">
                <div class="row features">
				   <?php 
				for ($row = 0; $row < 3; $row++) {				
				echo '<div class="col-md-4 text-center wow fadeInUp" data-wow-delay="'.$features[$row]["wDelay"].'">
                        <span class="typcn typcn-'.$features[$row]["icon"].' x3"></span>
                        <h4>'.$features[$row]["title"].'</h4>
                        <p>'.$features[$row]["text"].'</p>
                    </div>';
				}	
					?>
                </div>
            </div>
        </section>
		<?php require_once "modules/blocks/static_sec_block.php"?>
        <section id="photos" class="gallery wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="masonry image-gallery">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
							<?= $content; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
					<?php 
					foreach ($plang as $key) {
						echo '<div class="col-md-2">
							<img src="images/'.$key.'" class="img-responsive">
						</div>';
					}
					?>
                </div>
            </div>
        </section>
        <?php require_once "assets/footer.php";?>
    </body>
</html>
