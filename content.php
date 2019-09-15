<div class="news-item">
    <div class="layout vertical">
        <div class="image">
            <img src="<?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>" alt="">
        </div>

        <div class="text flex layout vertical">
            <small><?php the_category(); ?></small>

            <h3><?php the_title(); ?></h3>

            <p>
                <?php the_excerpt(); ?>
            </p>

            <span class="blue-text text-upper text-bold"><?php the_date(); ?></span>
        </div>
    </div>
</div>