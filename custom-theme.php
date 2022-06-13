<?php
/*
Template Name: Custom Template (:
*/
?>

<?php get_header(); ?>

<header>
    <section class="container header">
        <div class="row no-gutters">
            <div class="col-12 header">
                <!-- BEGIN NAVBAR -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">FITNESS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="#">ABOUT</a>
                            <a class="nav-item nav-link" href="#">HOW IT WORKS</a>
                            <a class="nav-item nav-link" href="#">SERVICES</a>
                            <a class="nav-item nav-link" href="#">FAQ</a>
                            <a class="nav-item nav-link" href="#">CONTACT</a>
                        </div>
                    </div>
                </nav>
                <!-- EINDE NAVBAR -->
                <img src='<?php bloginfo('template_url'); ?> /imgs/couple-exercising2.jpg' class='img-fluid img-fit' alt="Couple exercising">
                <div class="header-text">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h3><?php bloginfo('description'); ?></h3>
                </div>
            </div>
        </div>
    </section>
</header>


<main class="container defaultpage">

    <section class="row">
        <div class="offset-1 col-7">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_title('<h2>', '</h2>');
                    the_content();
                }
            }
            ?>
        </div>


        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente fuga dolor, ab tenetur molestiae ut molestias possimus. Illo earum dolor labore dignissimos doloribus praesentium molestiae. Veritatis sunt modi distinctio eius. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore nisi quibusdam facilis, voluptatem assumenda voluptate neque veniam culpa dolorem recusandae aut incidunt temporibus nemo, fugiat minus ducimus error
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut aperiam omnis laboriosam ut sequi nemo ea, quidem atque. Quo enim neque dicta perspiciatis dolorum, dolor magni molestias illo illum quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas iure architecto laudantium voluptate sed deleniti est ipsum, facilis quae atque magnam veritatis aliquam possimus nesciunt vitae? Recusandae nam iusto nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste tempore magnam vel? Quas soluta, odit quo suscipit praesentium quam error repellendus repudiandae dolorum, deserunt distinctio ad ex quidem id quod.
        <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod explicabo dicta laboriosam adipisci illum nam natus ut accusamus itaque dolore expedita, dignissimos minima, totam at obcaecati ratione optio, officiis hic.
        <br><br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio maiores sapiente facere. Mollitia.
    </section>
</main>



<?php get_footer(); ?>