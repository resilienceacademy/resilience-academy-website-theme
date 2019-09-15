
</main>

<footer>
    <div class="section-wrapper text-center text-bold layout center-center">
        All content licensed under CC-BY-SA, Tanzania Resilience Academy 2019
    </div>
</footer>
<script>
    var header = document.querySelector('header');
    var body = document.body;
    function toggleMenu(){
        if(!header.classList.contains('nav-open')){
            header.classList.add('nav-open');
            body.classList.add('locked');
        }
        else{
            header.classList.remove('nav-open');
            body.classList.remove('locked');
        }
    }
</script>
<?php wp_footer(); ?>
</body>
</html>