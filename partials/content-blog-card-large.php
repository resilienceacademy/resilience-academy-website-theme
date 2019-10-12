

<div class="blog-item">
    <div class="image">
        <img src="<?php if ( has_post_thumbnail() ) {
            the_post_thumbnail_url();
        } ?>" alt="">
    </div>

    <div class="text">
        <strong>FROM OUR <?php the_category(); ?></strong>
        <h2>
            <?php the_title(); ?>
        </h2>
        <p class="for-lg"></p>
        <p class="for-mob">
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>">LEARN MORE</a>
    </div>
</div>