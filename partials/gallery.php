<?php

$images = get_field('gallery_1');

if( $images ): ?>
    <div class="gallery">
            <?php foreach( $images as $image ): ?>
                <a class="gallery-item fancybox" href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </a>
            <?php endforeach; ?>
    </div>
<?php endif; ?>
