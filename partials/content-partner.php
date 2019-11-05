

<a href="<?php the_permalink(); ?>" class="featured-item">
    <div class="image">
        <img src="<?php if ( has_post_thumbnail() ) {
            the_post_thumbnail_url();
        } ?>" alt="">
    </div>
</a>