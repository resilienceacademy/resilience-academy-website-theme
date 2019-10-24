
<?php
wp_enqueue_style('form', get_template_directory_uri() . '/css/form.css');
get_header();
?>

<section id="form">
<h2>Upload your thesis</h2>
</section>
<section id="form-content">
<div class="section-wrapper">
<code class="xml plain">
<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true tabindex=49]'); ?>
    </code>
</div>
</section>


<?php get_footer(); ?>
