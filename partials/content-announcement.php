<div class="project-item">
    <div class="layout start justified">
        <div class="text">
            <h3 class="blue-text"><?php the_title(); ?></h3>
            <p>
                <?php the_excerpt(); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="button text-upper">
                More Information
            </a>
        </div>

        <div class="image">
            <img src="<?php if ( has_post_thumbnail() ) {
                the_post_thumbnail_url();
            } ?>" alt="">
        </div>
    </div>
</div>