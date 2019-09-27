<section id="subscribe">
    <div class="section-wrapper layout wrap center justified">
        <h3>Subscribe to our newsletter</h3>
        <div class="layout wrap center flex">
            <input type="text" placeholder="">
            <button class="button">
                SIGN UP
            </button>
        </div>
    </div>
</section>

<script>
    var projectsScroller = document.querySelector("#projectsScroller");
    var projectsSlideIndex = 0;
    var projects = document.querySelectorAll('.project-item');
    function moveProjects(dir){
        var newIndex = projectsSlideIndex + dir;
        var canGoForward = newIndex >= 0 && dir === -1;
        var canGoBack = newIndex < projects.length && dir === 1;

        if(canGoBack || canGoForward){
            projectsSlideIndex = newIndex;
            projectsScroller.style.transform = "translateX("+(-100 * newIndex)+"%)";
        }
    }


    var bannerChangingTexts = document.querySelectorAll("#bannerChangingText small");
    var bannerChangingTextsScroller = document.querySelector("#bannerChangingText span");
    var bannerChangingTextIndex = 0;
    var bannerChangingTextHeight = bannerChangingTexts[0].getBoundingClientRect().height;

    setInterval(() => {
        bannerChangingTextIndex = bannerChangingTextIndex === bannerChangingTexts.length - 1 ? 0 : bannerChangingTextIndex + 1;
        bannerChangingTextsScroller.style.transform = "translateY("+(-bannerChangingTextHeight * bannerChangingTextIndex)+"px)";
        document.querySelector("#bannerChangingText .current").classList.remove('current');
        bannerChangingTexts[bannerChangingTextIndex].classList.add('current');
    }, 3000);
</script>
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