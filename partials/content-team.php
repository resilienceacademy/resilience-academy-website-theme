<div class="team-member">
    <div class="image">
        <img src="<?php if ( has_post_thumbnail() ) {
            the_post_thumbnail_url();
        } ?>" alt="">
    </div>

    <div class="text">
        <h3><?php echo get_post_meta(get_the_ID(), 'name', true); ?></h3>
        <h5><?php echo get_post_meta(get_the_ID(), 'title', true); ?></h5>
    </div>
</div>