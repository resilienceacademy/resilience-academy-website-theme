<div class="method-item" style="background-image: url('<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail_url();
} ?>')">
<!--    <div class="image">-->
<!--        <img src="'.$item['image'].'" alt="">-->
<!--    </div>-->
    <div class="text layout vertical center-center">
        <h3>
           <?php the_title(); ?>
        </h3>
        <a class="button" href="<?php the_permalink(); ?>">
            LEARN MORE
        </a>
    </div>
</div>