<?php get_header(); ?>

<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<header>
    <div class="headerVideo">
        <!-- Dégragé au dessus de la vidéo pour lisser les couleurs -->
        <div class="container-fluid headerGradient">
        </div>



        <!-- Vidéo -->
        <video class="" height="100%" autoplay muted="muted" loop>
            <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/accueil.mp4" type="video/mp4">    					
            </video>
        </div>


        <div class="container headerText">
            <div class="row">
                <div class="col-lg-7 mediaQuery-center-end">
                    <h1 class="headerTitleBold text-white text-lg-left anim-1">   Pédagogie</h1>
                    <br/>
                    <h1 class="headerTitleLight text-white anim-2">Citoyen</h1>
                    <h1 class="headerTitleBold text-white text-lg-right anim-3">Transdisciplinaire</h1>
                    <br/>
                    <h1 class="headerTitleLight text-white text-lg-left anim-4">  Educatif</h1>
                </div>
            </div>
        </div>

    </header>

    <main>

        <!-- ************* Présentation ************* -->
        <!-- ***************************************** -->


        <!--button to scroll up -->
        <button onclick="topFunction()" id="btnUp" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

        <script>
        // after scrolling down from 20px, button become visible
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("btnUp").style.display = "block";
        } else {
            document.getElementById("btnUp").style.display = "none";
        }
        }

        // after clicking going to top
        function topFunction() {
            delay = 1000;
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
	
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else : ?>

        <h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
        <p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>


    <?php endif; ?>

	





</main>


<?php get_footer(); ?>