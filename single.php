
<?php
wp_enqueue_style('blog_detail', get_template_directory_uri() . '/css/blog_detail.css');
get_header();
?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part( 'partials/content-blog-detail', get_post_format());

endwhile; endif;
?>
<section id="otherBlogs">
    <h2>Show me <a href="<?php echo get_home_url(); ?>/blogs" class="blue-text">more.</a></h2>
    <div class="section-wrapper">
        <div class="overflow-hidden">
            <div id="blogItemList" class="layout">
                <?php
                $args = array(
                    'posts_per_page' => 100,
                );
                $custom_query = new WP_Query($args);
                if ( $custom_query->have_posts() ) : while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part( 'partials/content-blog-card-small', get_post_format() );
                endwhile; endif;
                ?>
            </div>
        </div>

        <div id="blogsMover" class="for-lg position-absolute pin-all pointer-events-none layout center justified">
            <button onclick="moveBlogs(-1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <button onclick="moveBlogs(1)" class="action-button pointer-events-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
    </div>
</section>
<!---->
<!--<section id="comments">-->
<!--    <div class="section-wrapper">-->
<!--        <h3>Comments</h3>-->
<!---->
<!--        <form id="newComment" method="POST" onsubmit="postComment(event)">-->
<!--            <div class="layout">-->
<!--                <div id="dpWrapper">-->
<!--                    <div class="dp">-->
<!--                        <img class="position-absolute pin-all" src="img/dp.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <textarea required class="flex" name="comment" cols="30" rows="4"-->
<!--                          placeholder="Be the first to comment on this post"></textarea>-->
<!--            </div>-->
<!---->
<!--            <div style="border-top: 1px solid #eee; padding: 0.6em">-->
<!--                <button type="submit" class="button">-->
<!--                    SUBMIT COMMENT-->
<!--                </button>-->
<!--            </div>-->
<!--        </form>-->
<!---->
<!--        <div id="commentList">-->
<!--            <div class="comment-item">-->
<!--                <div class="layout center">-->
<!--                    <div class="dp">-->
<!--                        <img class="position-absolute pin-all" src="" alt="">-->
<!--                    </div>-->
<!---->
<!--                    <div class="text">-->
<!--                        <strong>Julius Masika</strong>-->
<!--                        This is just a sample comment.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="comment-item">-->
<!--                <div class="layout center">-->
<!--                    <div class="dp">-->
<!--                        <img class="position-absolute pin-all" src="" alt="">-->
<!--                    </div>-->
<!---->
<!--                    <div class="text">-->
<!--                        <strong>Antanelle Shizda</strong>-->
<!--                        This is another sample comment-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<script>
    var blogsScroller = document.querySelector("#blogItemList");
    var blogsSlideIndex = 0;
    var blogItems = document.querySelectorAll('.blog-item');
    function moveBlogs(dir){
        var newIndex = blogsSlideIndex + dir;
        var canGoBack = newIndex >= 0 && dir === -1;
        var canGoForward = newIndex <= blogItems.length - 2 && dir === 1;

        if(canGoBack || canGoForward){
            blogsSlideIndex = newIndex;
            blogsScroller.style.transform = "translateX("+(-50 * newIndex)+"%)";
        }
    }

    var clapCountTimer;
    var clapCount = 0;
    var clapCountEl = document.querySelector("#clapCount");

    function incrementClapCount(onMobile){
        if(onMobile)
            clapCountEl = document.querySelector(".clapCountMob");
        else
            clapCountEl = document.querySelector("#clapCount");


        if(clapCount == 0){
            clapCount++;
            clapCountEl.textContent = "+" + clapCount;
        }

        setTimeout(() => {
            clapCountTimer = setInterval(() => {
                if(clapCount < 50){
                    clapCount++;
                    clapCountEl.textContent = "+" + clapCount;
                }
            }, 320);
        }, 150);
    }

    function stopIncrementingClapCount(){
        clearInterval(clapCountTimer);
    }

    function newCommentTemplate(dp, name, comment){
        return `
            <div class="comment-item">
                <div class="layout center">
                    <div class="dp">
                        <img class="position-absolute pin-all" src="${dp}" alt="">
                    </div>

                    <div class="text">
                        <strong>${name}</strong>
                        ${comment}
                    </div>
                </div>
            </div>
        `;
    }

    var commentList = document.querySelector("#commentList")
    function postComment(e) {
        e.preventDefault();
        var form = e.target;
        var submitButton = form.querySelector('button');
        var formData = new FormData(form);
        form.classList.add('saving');
        submitButton.textContent = "SAVING COMMENT...";

        fetch('post_comment.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then((res) => {
                console.log("Response: ", res);
                form.classList.remove('saving');
                form.querySelector('textarea').value = "";

                var newComment = newCommentTemplate('img/dp.png', 'Juma Mapera', formData.get('comment'));
                commentList.innerHTML += newComment;
                submitButton.textContent = "SUBMIT COMMENT";
            })
            .catch(error => console.error(error))
    }
</script>



<?php get_footer(); ?>