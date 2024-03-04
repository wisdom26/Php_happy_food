<?php include 'header.php';?>
<body>

    
    <div class="hero__section">
        <div class="hero__text">
            <h1 id="text"></h1>
            <p>Rich Healthy and Natural Food</p>

            <a href="Recipe.php" class="btn__dark margin__top">Read Recipes</a>

        </div>
    </div>

    <div class="recipe__section"></div>

    <div class="about__section"></div>

    <div class="extra__section"></div>

    <div class="subscribe__section"></div>


    <div class="category__section"></div>
    <!-- <div class="container">
        <section id="Story" class="">

            <h3 class="btn__dark margin__top">Story</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab impedit temporibus, soluta eveniet hic nostrum provident recusandae labore ullam unde illo ipsum eos facilis culpa deserunt sint nihil eligendi ad.
            </p>
        </section>
        <section id="About">
            <h3 class="btn__dark margin__top">About Us</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab impedit temporibus, soluta eveniet hic nostrum provident recusandae labore ullam unde illo ipsum eos facilis culpa deserunt sint nihil eligendi ad.
            </p>
        </section>
        <section id="contact" class="">
            <h3 class="btn__dark margin__top">Contact</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quia quasi molestiae laborum dolores pariatur architecto perferendis illum voluptate praesentium. Tenetur numquam omnis optio saepe id, blanditiis ducimus ipsum maiores!
            </p>
        </section>
    </div> -->
   

</body>
<script type="text/javascript">
    var i = 0,
        text, text1;
    // text = "The Visioners";
    text= "Happy Food";

    function typing() {
        if (i < text.length) {
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setInterval(typing, 10000);
            setTimeout(typing, 800);
        }
    }
    typing();
</script>

<?php include 'footer.php';?>
