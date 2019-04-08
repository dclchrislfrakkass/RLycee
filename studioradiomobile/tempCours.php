<?php /* Template name: Cours full page */ ?>
<style>
main {
    justify-content: center;
}

</style>
<?php get_header(); ?>




<?php 
$currentClassName = get_the_title(); ?>


<main>
	<?php
    $urlImg = get_stylesheet_directory_uri();
    ?>
    <img class="topBar img-fluid" src="<?php echo $urlImg ?>/assets/topBar.png" alt="topbar">
    

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
	
    <h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
    <p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>

<?php endif; ?>



</main>
<?php get_footer('Light'); ?>

<?php wp_footer(); ?>
