
<section id="subscribe">
    <div class="section-wrapper layout wrap center justified">
        <h3>Subscribe to our newsletter</h3>
        <?php es_subbox( $namefield =  "NO", $desc = "", $group = "" );  ?>
    </div>
</section>
<script>
    const submitButton = document.getElementsByClassName('es_subscription_form_submit')[0];
    submitButton.value = 'SIGN UP'
</script>
