<?php
/* Template Name: connexion */
get_header(); ?>

<style>
body{
    margin-top:3%;
}
</style>
<!--utilisation du formulaire de wp-->
<?php 
// wp_login_form(); 

global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {

echo "<div class='container row mx-auto' id='forms'>";

/*
<!--formulaire  de connexion personalisé -->
*/
echo "<div class='col-6' id='connexion'>";

echo "<form method='post' action='' id='loginForm' name='loginForm'>";
echo "<h3 class='text-center'>Connexion</h3>";
echo "<div class='form-group'>";
echo "<label for='formGroupExampleInput'>Identifiant</label>";
echo "<input type='text' class='form-control' id='userLogin' placeholder='Pseudo' name='log'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='formGroupExampleInput'>Mot de passe</label>";
echo "<input type='text' class='form-control' id='userPass' placeholder='Votre mot de passe' name='pwd'>";
echo "</div>";
/*
<!-- <p><label><input type="checkbox" tabindex="90" value="forever" id="rememberMe" name="rememberMe">Rester connecter</label>
        | <a href="http://www.VOTRE_SITE.com/wp-login.php?action=lostpassword">Mot de passe oublié</a></p>
        <p> -->
*/
echo "<button type='submit' class='btn btn-warning'>Connexion</button>";
echo "</p>";
echo "</form>";
echo "</div>";
/*
<!-- formulaire d'inscription personnalisé-->
*/
echo "<div class='col-6' id='inscription'>";
echo "<form method='post' action='' id='registerForm' name='registerForm'>";
echo "<h3 class='text-center'>Inscription</h3>";
echo "<div class='form-group'>";
echo "<label for='formGroupExampleInput'>Identifiant</label>";
echo "<input type='text' class='form-control' id='userLoginReg' placeholder='Pseudo' name='logReg'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='formGroupExampleInput'>Adresse mail</label>";
echo "<input type='text' class='form-control' id='userMailReg' placeholder='Votre email' name='mailReg'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='formGroupExampleInput'>Mot de passe</label>";
echo "<input type='text' class='form-control' id='userPassReg' placeholder='Votre mot de passe' name='pwdReg'>";
echo "</div>";
echo "<div class='form-column'>Vous êtes<br/>";
echo "<div class='row'>";
echo "<div class='form-check-inline'>";
echo "<input class='form-check-input ml-5' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='option1'>";
echo "<label class='form-check-label ml-5 pr-5' for='inlineRadio1'>Elève</label>";
echo "</div>";
echo "<div class='form-check-inline'>";
echo "<input class='form-check-input ml-1' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>";
echo "<label class='form-check-label' for='inlineRadio2'>Professeur</label>";
echo "</div>";
echo "</div>";
echo "</div>";           
echo "<p>";
echo "<button type='submit' class='btn btn-warning'>Inscription</button>";
echo "</p>";
echo "</div>";
echo "</form>";
echo "</div>";
} if (is_user_logged_in()) {
   echo "<h3>Accèdez à votre <span class='text-orange'>contenu</span> :</h3>";
   global $current_user;
   get_currentuserinfo();
   $user_id= $current_user->ID;
   $key = 'statusUser';
   $single = true;
   $user_status = get_user_meta( $user_id, $key, $single );

echo "Bonjour " . $current_user->user_login ."<br/>";
echo "Votre contenu se trouve ici.";
echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
echo "<div class='elementor-widget-container'>";
echo "<div class='elementor-button-wrapper'>";
if ($user_status === '1') {
   echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
   }else{
   echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
   }
echo "<span class='elementor-button-content-wrapper'>";

// $current_user = wp_get_current_user();
// $user_id= $current_user->ID;
// $key = 'statusUser';
// $single = true;
// $user_status = get_user_meta( $user_id, $key, $single ); 
?>
               <span class="elementor-button-text">Accès <?php echo $user_status;?></span>
    
</span>
           </a>
</div>
</div>
<?php var_dump($user_status);?>
</div>
<?php

}; ?>



<?php
// message d'erreur si connexion vide


add_action( 'wp_authenticate', '_catch_empty_user', 1, 2 );

function _catch_empty_user( $username, $pwd ) {
if (empty($pwd)&&empty($username)) {
    wp_safe_redirect(home_url().'/connexion/?login=empty');
    exit();
}  if ( empty( $username )) {
    wp_safe_redirect(home_url() . '/connexion/?user=empty' );
    exit();
}
if (empty($pwd)) {
    wp_safe_redirect(home_url().'/connexion/?pwd=empty');
    exit();
}
}
?>


<?php get_footer(); ?>