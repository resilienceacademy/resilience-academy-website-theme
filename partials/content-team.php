<div class="team-member">
    <div class="image">
        <img src="<?php if ( has_post_thumbnail() ) {
            the_post_thumbnail_url();
        } ?>" alt="">
        <div class="for-lg learn-more layout end center-justified">
            <a href="<?php the_permalink(); ?>" class="button">
                LEARN MORE
            </a>
        </div>
    </div>

    <div class="text">
        <h3><?php echo get_post_meta(get_the_ID(), 'name', true); ?></h3>
        <h5><?php echo get_post_meta(get_the_ID(), 'title', true); ?></h5>
        <a href="<?php the_permalink(); ?>" class="button for-mob">
            LEARN MORE
        </a>
    </div>
</div>