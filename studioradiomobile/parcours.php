<?php /* Template name: Page_de_Parcours */ ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
main {
    justify-content: center;
}
.container {
    max-width: 1600px!important;

}
.row a{
    color: #37003d!important;
}
.row a:hover {
    color: #a3bd2f!important;
    text-decoration: none;
}
</style>
<?php get_header(); ?>


<?php 
$currentClassName = get_the_title(); ?>

<main>
<?php
$current_user = wp_get_current_user();
$user_name = $current_user->user_nicename;
echo "<div class='text-center'><br/><br/>Bienvenue <b> $user_name </b>, voici ton parcours actuel.</div><br/><br/>";


$user_id = $current_user->ID;
$urlImg = get_stylesheet_directory_uri();
$notOk = "<img src='$urlImg/assets/nOk.png'/>";
$isOk = "<img src='$urlImg/assets/ok.png'>";

/**
 * MODULE ELEVE PARTIE 1
 */

$eleveEG01 = get_user_meta($user_id, 'Prends le micro', 'true');
if (!$eleveEG01){
    // $VeleveEG01 = $notOk;   // ancienne div avec fond de div
    $VeleveEG01 = $notOk;
} else {
     $VeleveEG01 = $isOk;
}
$animateur = get_user_meta($user_id, 'Animateur', 'true');
if (!$animateur){
    $vAnimateur = $notOk;
} else {
    $vAnimateur = $isOk;
}
$chroniqueur = get_user_meta($user_id, 'Chroniqueur', 'true');
if (!$chroniqueur){
    $vChroniqueur = $notOk;
} else {
    $vChroniqueur = $isOk;
}
$journaliste= get_user_meta($user_id, 'Journaliste / Interview', 'true');
if (!$journaliste){
               $vJournaliste = $notOk;
} else {
               $vJournaliste = $isOk;
}
/**
* MODULE ELEVE PARTIE 2
*/
$eleveEG02 = get_user_meta($user_id, 'Technique', 'true');
if (!$eleveEG02){
    $VeleveEG02 = $notOk;
} else {
    $VeleveEG02 = $isOk;
}
$eleveEG02P01 = get_user_meta($user_id, 'Reportage / Prise de son', 'true');
if (!$eleveEG02P01){
    $veleveEG02P01 = $notOk;
} else {
    $veleveEG02P01 = $isOk;
}
$eleveEG02P02 = get_user_meta($user_id, 'Montage audio', 'true');
if (!$eleveEG02P02){
    $veleveEG02P02 = $notOk;
} else {
    $veleveEG02P02 = $isOk;
}
$eleveEG02P03= get_user_meta($user_id, 'Radio en direct', 'true');
if (!$eleveEG02P03){
            $veleveEG02P03 = $notOk;
} else {
            $veleveEG02P03 = $isOk;
}

/**
* MODULE ELEVE PARTIE 3
*/
$eleveEG03 = get_user_meta($user_id, 'Culture radio', 'true');
if (!$eleveEG03){
    $VeleveEG03 = $notOk;
} else {
    $VeleveEG03 = $isOk;
}
$lexique = get_user_meta($user_id, 'Lexique', 'true');
if (!$lexique){
    $vLexique = $notOk;
} else {
    $vLexique = $isOk;
}
$metierFormation = get_user_meta($user_id, 'Infos métier / Formation', 'true');
if (!$metierFormation){
    $vMetierFormation = $notOk;
} else {
    $vMetierFormation = $isOk;
}
/**
* MODULE ELEVE PARTIE 1-3
*/
$EG01M01 = get_user_meta($user_id, 'Ecrire pour l&#8217;oreille', 'true');
if (!$EG01M01){
    $vEG01M01 = $notOk;
} else {
    $vEG01M01 = $isOk;
}
$EG01M02 = get_user_meta($user_id, 'Parler à la radio', 'true');
if (!$EG01M02){
    $vEG01M02 = $notOk;
} else {
    $vEG01M02 = $isOk;
}
$EG01M03= get_user_meta($user_id, 'Conducteur radio', 'true');
if (!$EG01M03){
            $vEG01M03 = $notOk;
} else {
            $vEG01M03 = $isOk;
}

/**
* MODULE PROFESSEUR PARTIE 1
*/
$R01 = get_user_meta($user_id, 'Internet pédagogique', 'true');
if (!$R01){
    $VR01 = $notOk;
} else {
    $VR01 = $isOk;
}
$R01P01 = get_user_meta($user_id, 'Atelier écriture', 'true');
if (!$R01P01){
    $VR01P01 = $notOk;
} else {
    $VR01P01 = $isOk;
}
$R01P02 = get_user_meta($user_id, 'Information et Communication', 'true');
if (!$R01P02){
    $VR01P02 = $notOk;
} else {
    $VR01P02 = $isOk;
}
$R01P03= get_user_meta($user_id, 'Atelier oral', 'true');
if (!$R01P03){
    $VR01P03 = $notOk;
} else {
    $VR01P03 = $isOk;
}
/**
* MODULE PROFESSEUR PARTIE 2
*/
$R02 = get_user_meta($user_id, 'Mise en place d&#8217;un projet', 'true');
if (!$R02){
    $VR02 = $notOk;
} else {
    $VR02 = $isOk;
}
$R02P01 = get_user_meta($user_id, 'Radio Lycée &#8211; Mise en place', 'true');
if (!$R02P01){
    $VR02P01 = $notOk;
} else {
    $VR02P01 = $isOk;
}
$R02P02 = get_user_meta($user_id, 'Gérer une grille de programme', 'true');
if (!$R02P02){
    $VR02P02 = $notOk;
} else {
    $VR02P02 = $isOk;
}
$R02P03= get_user_meta($user_id, 'Les outils pour faire de la radio', 'true');
if (!$R02P03){
    $VR02P03 = $notOk;
} else {
    $VR02P03 = $isOk;
}
/**
* MODULE PROVISEUR PARTIE 1
*/
$P01P01 = get_user_meta($user_id, 'Intérêt de la radio dans l&#8217;univers scolaire', 'true');
if (!$P01P01){
    $VP01P01 = $notOk;
} else {
    $VP01P01 = $isOk;
}
$divOne = "<div class='row col-12'><div class='col-1 pl-0 text-center'>";
$divTwo = "</div></div><div class='col-11 pl-0'>";


echo "<div class='container col-12 my-0 py-0'>";
echo "<div class='row'>";

echo "<div class='col-sm-12 col-xl-4'>";
echo "<h3>Modules lycéen :</h3><br/>";
echo "<div class='EG01'>";
echo "$divOne <div id='checkModuleEG01'> $VeleveEG01 $divTwo <div id='moduleEG01'><strong><a href='lyceen-eg01'>Passer au micro</a></strong></div></div></div>";
echo "$divOne <div id='checkModuleEG01P01'> $vAnimateur $divTwo <div id='moduleEG01P01'><a href='lyceen-eg01-p01'>Animateur</a></div></div></div>";
echo "$divOne <div id='checkModuleEG01P02'> $vChroniqueur $divTwo <div id='moduleEG01P02'><a href='lyceen-eg01-p02'>Chroniqueur</a></div></div></div>";
echo "$divOne <div id='checkModuleEG01P03'> $vJournaliste $divTwo <div id='moduleEG01P03'><a href='lyceen-eg01-p03'>Journaliste / Interview</a></div></div></div></div>";
echo "<br/>";
echo "<div class='EG01M'>";
echo "$divOne <div id='checkModuleEG01M01'> $vEG01M01 $divTwo <div id='moduleEG01M01'><a href='lyceen-eg01-m01'>Ecrire pour l'oreille</a></div></div></div>";
echo "$divOne <div id='checkModuleEG01M02'> $vEG01M02 $divTwo <div id='moduleEG01M02'><a href='lyceen-eg01-m02'>Parler à la radio</a></div></div></div>";
echo "$divOne <div id='checkModuleEG01M03'> $vEG01M03 $divTwo <div id='moduleEG01M03'><a href='lyceen-eg01-m03'>Conducteur radio</a></div></div></div>";
echo "</div>";
echo "<br/>";
echo "<div class='EG02'>";
echo "$divOne <div id='checkModuleEG02'> $VeleveEG02 $divTwo <div id='moduleEG02'><strong><a href='lyceen-eg02'>Technique</a></strong></div></div></div>";
echo "$divOne <div id='checkModuleEG02P01'> $veleveEG02P01 $divTwo <div id='moduleEG02P01'><a href='lyceen-eg02-p01'>Reportage / Prise de son</a></div></div></div>";
echo "$divOne <div id='checkModuleEG02P02'> $veleveEG02P02 $divTwo <div id='moduleEG02P02'><a href='lyceen-eg02-p02'>Montage audio</a></div></div></div>";
echo "$divOne <div id='checkModuleEG02P03'> $veleveEG02P03 $divTwo <div id='moduleEG02P03'><a href='lyceen-eg02-p03'>Radio en direct</a></div></div></div>";
echo "</div>";
echo "<br/>";
echo "<div class='EG03'>";
echo "$divOne <div id='checkModuleEG03'> $VeleveEG03 $divTwo <div id='moduleEG03'><strong><a href='lyceen-eg03'>Culture radio</a></strong></div></div></div>";
echo "$divOne <div id='checkModuleEG03P01'> $vLexique $divTwo <div id='moduleEG03P01'><a href='lyceen-eg03-p01'>Lexique</a></div></div></div>";
echo "$divOne <div id='checkModuleEG03P02'> $vMetierFormation $divTwo <div id='moduleEG03P02'><a href='lyceen-eg03-p02'>Infos métier / Formation</a></div></div></div>";
echo "</div>";
echo "</div>";

echo "<div class='col-sm-12 col-xl-4'>";
echo "<h3>Modules professeur :</h3><br/>";
echo "<div class='R01'>";
echo "$divOne <div id='checkModuleR01'> $VR01 $divTwo <div id='moduleR01'><strong><a href='professeur-r01'>Internet pédagogique</a></strong></div></div></div>";
echo "$divOne <div id='checkModuleR01P01'> $VR01P01 $divTwo <div id='moduleR01P01'><a href='r01-p01'>Atelier écriture</a></div></div></div>";
echo "$divOne <div id='checkModuleR01P02'> $VR01P02 $divTwo <div id='moduleR01P02'><a href='r01-p02'>Information et Communication</a></div></div></div>";
echo "$divOne <div id='checkModuleR01P03'> $VR01P03 $divTwo <div id='moduleR01P03'><a href='r01-p03'>Atelier oral</a></div></div></div>";
echo "</div>";
echo "<br/>";
echo "<div class='R02'>";
echo "$divOne <div id='checkModuleR01'> $VR02 $divTwo <div id='moduleR01'><strong><a href='professeur-r02'>Mise en place d'un projet</a></strong></div></div></div>";
echo "$divOne <div id='checkModuleR01P01'> $VR02P01 $divTwo <div id='moduleR01P01'><a href='r02-p01'>Radio Lycée - Mise en place</a></div></div></div>";
echo "$divOne <div id='checkModuleR01P02'> $VR02P02 $divTwo <div id='moduleR01P02'><a href='professeur-r02-p02'>Grille de programme</a></div></div></div>";
echo "$divOne <div id='checkModuleR01P03'> $VR02P03 $divTwo <div id='moduleR01P03'><a href='professeur-r02-p03'>Outils pour faire de la radio</a></div></div></div>";
echo "</div>";
echo "</div>";

echo "<div class='col-sm-12 col-xl-4'>";
echo "<h3>Modules proviseur :</h3><br/>";
echo "<div class='R01'>";
echo "$divOne <div id='checkModuleR01P01'> $VP01P01 $divTwo <div id='module'P01P01'><a href='p01-p01'>Interet de la radio dans le milieu scolaire</a></div></div></div>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
<br/>
<?php

?>
<div class="d-flex auto-mx mt-5">
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
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
</div>

	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
	
    <h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
    <p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>

<?php endif; ?>
<section>
</section>




</main>


<?php get_footer(); ?>
