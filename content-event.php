
<div class="event-item">
    <div class="layout vertical">
        <div class="image">
            <img src="<?php if ( has_post_thumbnail() ) {
                the_post_thumbnail_url();
            } ?>" alt="">

            <div class="event-date position-absolute pin-top pin-left">
                <span>OCT</span>
                <span>02</span>
            </div>
        </div>

        <div class="text flex layout vertical">
            <h3><?php the_title(); ?></h3>
            <p>
                <?php echo get_post_meta(get_the_ID(), 'duration', true); ?>, <?php echo get_post_meta(get_the_ID(), 'address', true); ?>
            </p>
        </div>
    </div>
</div>