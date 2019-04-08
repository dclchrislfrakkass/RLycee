


////////////////////////////////////
Code ok sans bouton
////////////////////////////////

<?php

global $wpbd;
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = get_current_user_id( );
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
    echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
$wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
?>

////////////////////////////////////
Code ok avec bouton
////////////////////////////////
<?php

global $wpbd;
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = get_current_user_id( );
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
    echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
    ?>
    <form method="post" action="" >
    <input type="hidden" name="valid" value= "<?php echo $pageActuelle; ?>" >
    <input type="submit" name="Submit" class="btn-success" value="Valider le module">
    </form> 
    <?php
        if(isset($_POST['valid'])){
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
}

//////////////////////////////////////////////////////////////////////////////

<?php
    ?>
    <script>
    jQuery(document).ready(function(){
    jQuery('a#valid').click(function(){
        jQuery('#valid').hide();
        jQuery.post(
            'ajoutModule.php'{

                table : jQuery("#table").val(),
                data1 : jQuery("#data1").val(),
                data2 : jQuery("#data2").val(),
                data3 : jQuery("#data3").val(),
                format : jQuery("#format").val()
            },

            'text'
        );
        $wpdb->insert($table, $data, $format);
        echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";

    });
    });
    </script>
    <?php

    global $wpbd;
    $table = $wpdb->prefix.'modulesCours';
    $pageActuelle = get_the_title();
    $user_id = get_current_user_id( );
    $userName = $current_user->user_nicename;
    $pageUrl = get_page_link();

    $data = array(
        'module'=> $pageActuelle,
        'user'=> $user_id,
        'page'=> $pageUrl,);
        $format = array('%s', '%d');

    $requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
    $result = $wpdb->get_results($requete);

    if ($result != null) {
        echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
        }
    else {
        ?>
   

    <form method="post" action="" >
    <input type="hidden" name="table" value= "<?php echo $table; ?>" >
    <input type="hidden" name="data1" value= "<?php echo $pageActuelle; ?>" >
    <input type="hidden" name="data2" value= "<?php echo $user_id; ?>" >
    <input type="hidden" name="data3" value= "<?php echo $pageUrl; ?>" >
    <input type="hidden" name="format" value= "<?php echo $format; ?>" >
    <input type="submit" name="Submit" value="Valider le module">
    </form>
    <?php

}

//////








    if(isset($_POST['valid'])){
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
}
    











//////////////////////////////////////////////////////////////////////////////////////

<?php
?>

<script>
$(document).ready(function(){
$("p").click(function(){
    $(this).hide();
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
});
});
</script>
<?php

global $wpbd;
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = get_current_user_id( );
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
    echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
    ?>
    <p>Valider le module</p>
    <?php
}
    <form method="post" action="" >
    <input type="hidden" name="valid" value= "<?php echo $pageActuelle; ?>" >
    <input type="submit" name="Submit" value="Valider le module">
    </form> -->
    <?php
    if(isset($_POST['valid'])){
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
}
    


/////////////////////////////////
xxx 
///////////////////////////



<?php

$pageActuelle = get_the_title();
$current_user = wp_get_current_user();
$user_id = $current_user->ID;


update_user_meta($user_id , $pageActuelle, '1');


?>



////////////////////////////////////
A TESTER  2
////////////////////////////////

<?php
global $wpbd;
$current_user = wp_get_current_user();
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = $current_user->ID;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');
    
    // var_dump($data);
    // var_dump($user_name);
    
    $query = "SELECT * FROM $table WHERE user = $user_id AND module = $pageActuelle";
    echo $query;
    $wpdb->get_results($query);
    $result = $wpdb->get_results($query);
    if($result == 0) {
        $wpdb->insert($table, $data, $format);
    }
    echo $result;
    var_dump($result);
    
    ?>
    ////////////////////////////////////
    A TESTER  3
    ////////////////////////////////
    
    <?php
    global $wpbd;
    $current_user = wp_get_current_user();
    $table = $wpdb->prefix.'modulesCours';
    $pageActuelle = get_the_title();
    $user_id = $current_user->ID;
    $pageUrl = get_page_link();
    
    $data = array(
        'module'=> $pageActuelle,
        'user'=> $user_id,
        'page'=> $pageUrl,);
        $format = array('%s', '%d');
        
// var_dump($data);
// var_dump($user_name);
$result = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE user = $user_id AND module = $pageActuelle" ) );
print_r($result);
if ($user_id  and $pageActuelle == true){
    echo "On les a !";
} else {
    echo "je rajoute !";
    $wpdb->insert($table, $data, $format);
}

echo $result;
var_dump($result);

?>
       
////////////////////////////////////
CODE  VALIDE
////////////////////////////////
<?php

global $wpbd;
// $current_user = wp_get_current_user();
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
// $user_id = $current_user->ID;
$user_id = get_current_user_id();
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '$pageActuelle' AND page like '$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
     echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
}


    ?>   
////////////////////////////////////
CODE presque VALIDE
////////////////////////////////

<?php


global $wpbd;
$current_user = wp_get_current_user();
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = $current_user->ID;
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id";
    
$result = $wpdb->get_results($requete);
echo "requete : ";
var_dump($requete);
echo "<br/>";
echo "page actuelle : ";
var_dump($pageActuelle);
echo "<br/>";
echo "id de l'utilisateur : ";
var_dump($user_id);
echo "<br/>";
echo "url de la page : ";
var_dump($pageUrl);
echo "<hr>";
echo "<br/> requete :";
var_dump($result);
echo "<hr>";
    if ($result){
        foreach($result as $reponse){

            if (($reponse->module === $pageActuelle) && ($reponse->user === $user_id) && ($reponse->page === $pageUrl)){
                echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
            }
            elseif ((($reponse->module === $pageActuelle) && ($reponse->user != $user_id) && ($reponse->page != $pageUrl))){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
            }
            elseif (($reponse->module != $pageActuelle) && ($reponse->user === $user_id) && ($reponse->page === $pageUrl)){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
            }
            elseif (($reponse->module === $pageActuelle) && ($reponse->user === $user_id) && ($reponse->page != $pageUrl)){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";   
            }
            elseif (($reponse->module != $pageActuelle) && ($reponse->user === $user_id) && ($reponse->page != $pageUrl)){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
            }
            elseif (($reponse->module != $pageActuelle) && ($reponse->user != $user_id) && ($reponse->page != $pageUrl)){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
            }
            elseif (($reponse->module != $pageActuelle) && ($reponse->user != $user_id) && ($reponse->page != $pageUrl)){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
            }
            elseif (($reponse->module === $pageActuelle) && ($reponse->user != $user_id) && ($reponse->page === $pageUrl)){
                $wpdb->insert($table, $data, $format);
                echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
            }
            else {
                echo "Hey $userName, je sais pas pourquoi je suis là !";
            }
        }
    }
    if (!$result) {
            $wpdb->insert($table, $data, $format);
            echo "Merci $userName d'avoir validé le module : <b> $pageActuelle </b>!";
        }              
    ?>
            ////////////////////////////////////
            A TESTER 
            ////////////////////////////////
            
            
            <?php
            global $wpbd;
            $current_user = wp_get_current_user();
            $modulesCours = $wpdb->prefix.'modulesCours';
            $pageActuelle = array('nom_module' => get_the_title());
            $user_id = array('id_user' => $current_user->ID);
            $pageUrl = array('page'=> get_page_link());
            
            $req = $wpdb->update($modulesCours, array('id'=>''), $pageActuelle, $user_id, $pageUrl);
            $wpdb->update($modulesCours, array('id'=>''), $pageActuelle, $user_id, $pageUrl);
            var_dump($req);
            
            ?>
            
            
            
            
            ///////////////////////////////////////////////////
            test avec JQUERY
            //////////////////////////////////////////////////
            
            <script>
            jQuery("form").submit(function(){
                jQuery(this).hide();
                add();
            });
            function add(){
                $current_user = wp_get_current_user();
                $user_id = $current_user->ID;
                $pageActuelle = get_the_title();
                update_user_meta($user_id , $pageActuelle, '1');
                update_user_meta($user_id, $pageActuelle, '');
                alert('Validé!');
            };
            </script>
            <?php
            
            $pageActuelle = get_the_title();
            //echo $pageActuelle;
            
            $current_user = wp_get_current_user();
            $user_id = $current_user->ID;
            $verif = get_user_meta($user_id, $pageActuelle, '1');
            
            if (!$verif){
                echo "test";
                echo "<form action=''>";
                echo "<input class='btn btn-success' type='submit' value='Valider ce module'>";
                echo "</form>";
                var_dump($verif);
                
                
            }
            if ($verif) {
                echo" Déjà validé !";
                var_dump($verif);
            }
            ?>
            
            
            //////////////////////////////////////////////
            <script>
            jQuery("form").submit(function(){
                jQuery(this).hide();
                add();
            });
            function add(){
                $current_user = wp_get_current_user();
                $user_id = $current_user->ID;
                $pageActuelle = get_the_title();
                update_user_meta($user_id , $pageActuelle, '1');
                alert('Validé!');
            };
            </script>
            <?php
            
            
            $pageActuelle = get_the_title();
            //echo $pageActuelle;
            
            $current_user = wp_get_current_user();
            $user_id = $current_user->ID;
            $verif = get_user_meta($user_id, $pageActuelle, '1');
            
            if (!$verif){
                echo "test";
                echo "<form action=''>";
                echo "<input class='btn btn-success' type='submit' value='Valider ce module'>";
                echo "</form>";
                var_dump($verif);
                
                
            }
            if ($verif) {
                echo" Déjà validé !";
                var_dump($verif);
            }
            ?>
            
            ////////////////////////////////////////////////////////////////////////////
            <script>
            jQuery(document).ready(function(){
                jQuery("form").submit(function(){
                    jQuery(this).hide();
                    <?php
                    $current_user = wp_get_current_user();
                    $user_id = $current_user->ID;
                    $pageActuelle = get_the_title();
                    update_user_meta($user_id , $pageActuelle, '1'); ?>
                    alert('Validé!');
                });
            });
            </script>
            <?php
            
            
            $pageActuelle = get_the_title();
            //echo $pageActuelle;
            
            $current_user = wp_get_current_user();
            $user_id = $current_user->ID;
            $verif = get_user_meta($user_id, $pageActuelle, '1');
            
            if (!$verif){
                echo "je suis dans !verif";
                echo "<form action=''>";
                echo "<input class='btn btn-success' type='submit' value='Valider ce module'>";
                echo "</form>";
                var_dump($verif);
                
                
            }
            if ($verif) {
                echo" Déjà validé !";
                var_dump($verif);
            }
            ?>
            
            
            
            
            
            
            
            $("form").submit(function(){
                alert("Submitted");
            });
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            Voir si un utilisateur est connecté -->
            <?php
            $current_user = wp_get_current_user();
            if (0 == $current_user->ID){
                // pas connecté
            } else {
                // connecté
            }
            ?>
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            Voir si un utilisateur est connecté ma méthode -->
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                // pas connecté
            } else {
                //connnecté
            }
            ?>
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            si un utilisateur est connecté afficher le bouton de déconnexion -->
            
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo do_shortcode('[wpmem_form login]');
            } else {
                echo "<br/>";
                echo "<button type='button' class='btn btn-warning'>Déconnexion</button>";
            }
            ?>
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            récupère le status pour l'afficher dans le bouton accès  -->
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo do_shortcode('[wpmem_form register]');
            } else {
                echo 'Bonjour' . $current_user->user_login."\n";
                echo 'Votre contenu se trouve ici.';
            }
            ?>
            
            
            <div data-id="0133545" class="elementor-element elementor-element-0133545 elementor-widget elementor-widget-button" data-element_type="button.default">
            <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
            <a href="http://studioradiomobile.test/professeur" class="elementor-button-link elementor-button elementor-size-sm" role="button">
            <span class="elementor-button-content-wrapper">
            <span class="elementor-button-text">Accès <?php echo $user_status;?></span>
            
            </span>
            </a>
            </div>
            </div>
            </DIV>
            
            
            
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            récupère le status eleve ou professseur du membre--->
            <?php
            $current_user = wp_get_current_user();
            $user_id= $current_user->ID;
            $key = 'statusUser';
            $single = true;
            $user_status = get_user_meta( $user_id, $key, $single ); 
            ?>
            <span class="elementor-button-text">Accès <?php echo $user_status;?></span>
            
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            se déconnecter et rester sur la même page -->
            <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Déconnexion</a>
            
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            vérification du login, du status de l'utilisateur et définition du lien en fonction du status-->
            
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo do_shortcode('[wpmem_form register]');
            } else {
                echo "Bonjour " . $current_user->user_login ."<br/>";
                echo "Votre contenu se trouve ici.";
                echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
                echo "<div class='elementor-widget-container'>";
                echo "<div class='elementor-button-wrapper'>";
                if ($user_status == 'Elève') {
                    echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
                }else{
                    echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
                }
                echo "<span class='elementor-button-content-wrapper'>";
                
                $current_user = wp_get_current_user();
                $user_id= $current_user->ID;
                $key = 'statusUser';
                $single = true;
                $user_status = get_user_meta( $user_id, $key, $single ); 
                ?>
                <span class="elementor-button-text">Accès <?php echo $user_status;?></span>
                
                </span>
                </a>
                </div>
                </div>
                <?php var_dump($user_status);?>
                </div>
                <?php
            }
            ?>
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            le code pour la page d'accès et la comparaison de status //CODE UTILISE AVANT REGROUPEMENT DES UTILISATEURS//
            -->
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo do_shortcode('[wpmem_form register]');
            } else {
                global $current_user;
                get_currentuserinfo();
                $user_id= $current_user->ID;
                $key = 'statusUser';
                $single = true;
                $user_status = get_user_meta( $user_id, $key, $single );
                
                // echo 'Bonjour ' . $current_user->user_login.'<br/>';
                // echo 'Votre contenu se trouve ici.';
                echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
                echo "<div class='elementor-widget-container'>";
                echo "<div class='elementor-button-wrapper'>";
                if ($user_status === '1') {
                    echo "Votre compte est un compte Elève,<br/>voici votre accès.<br/>";
                    echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
                    $titreStatus = 'Elève';
                }else{
                    echo "Votre compte est un compte Professeur,<br/>voici votre accès.<br/>";
                    echo "Vous avez également la possibilité d'accèder à la partie proviseur pour plus d'informations.<br/>";
                    
                    
                    
                    echo "<a href='http://studioradiomobile.test/proviseur' class='elementor-button-link elementor-button elementor-size-sm' role='button'><span class='elementor-button-text'>Accès Proviseur</span>";
                    echo "</span>";
                    echo "</a>";
                    
                    echo "<span class='elementor-button-content-wrapper ml-3'>";
                    echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
                    $titreStatus = 'Professeur';
                }
                
                echo "<span class='elementor-button-content-wrapper'>";
                ?>
                <span class="elementor-button-text">Accès <?php echo $titreStatus; ?></span>
                </span>
                </a>
                </div>
                </div>
                </div>
                <a class="btn btn-warning" href="<?php echo wp_logout_url(get_permalink()); ?>">Déconnexion</a>
                <?php
            }
            ?>
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            Accès automatique à la page selon le status // pas utilisé //
            -->
            
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo do_shortcode('[wpmem_form register]');
            } else {
                global $current_user;
                get_currentuserinfo();
                $user_id= $current_user->ID;
                $key = 'statusUser';
                $single = true;
                $user_status = get_user_meta( $user_id, $key, $single );
                
                //echo 'Bonjour ' . $current_user->user_login.'<br/>';
                //echo 'Votre contenu se trouve ici.';
                echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
                echo "<div class='elementor-widget-container'>";
                echo "<div class='elementor-button-wrapper'>";
                if ($user_status === '1') {
                    $url = 'http://studioradiomobile.test/eleve';
                    wp_redirect( $url );
                    exit;
                }else{
                    $url = 'http://studioradiomobile.test/professeur';
                    wp_redirect( $url );
                    exit;
                }
                
                
                
            }
            ?>
            
            
            
            
            
            
            
            
            
            //////////////////////////////
            
            
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo do_shortcode('[wpmem_form register]');
            } else {
                global $current_user;
                get_currentuserinfo();
                $user_id= $current_user->ID;
                $key = 'statusUser';
                $single = true;
                $user_status = get_user_meta( $user_id, $key, $single );
                
                //echo 'Bonjour ' . $current_user->user_login.'<br/>';
                //echo 'Votre contenu se trouve ici.';
                echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
                echo "<div class='elementor-widget-container'>";
                echo "<div class='elementor-button-wrapper'>";
                if ($user_status === '1') {
                    echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
                    $titreStatus = 'Elève';
                }else{
                    echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
                    $titreStatus = 'Professeur';
                }
                
                
                echo "<span class='elementor-button-content-wrapper'>";
                
                ?>
                
                
                
                <span class="elementor-button-text">Accès <?php echo $titreStatus; ?></span>
                
                </span>
                </a>
                </div>
                </div>
                </div>
                <a class="btn btn-warning" href="<?php echo wp_logout_url(get_permalink()); ?>">Déconnexion</a>
                <?php
            }
            ?>
            
            
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            Code simplifié de connexion/deconnexion 
            -->
            
            
            
            
            <?php
            global $current_user;
            get_currentuserinfo();
            if (!is_user_logged_in()) {
                echo "<div class='row'>";
                echo do_shortcode('[wpmem_form register]');
                echo do_shortcode('[wpmem_form login]');
                echo "</div>";
            } else {
                ?>
                <a class="btn btn-warning mx-auto" href="<?php echo wp_logout_url(get_permalink()); ?>">Déconnexion</a>
                <?php
            }
            ?>
            
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            acces eleve  // OK
            -->
            
            
            <?php
            global $current_user;
            get_currentuserinfo();
            if (is_user_logged_in()) {
                echo "<div class='column'>";
                echo "<a href='http://studioradiomobile.test:8080/eleve/' class='btn btn-warning' role='button'><span class='button-text'><i class='fa fa-caret-right' aria-hidden='true'></i> Accès</span>";
                echo "</span>";
                echo "</a>";
                echo "<br/><br/>";
                $link = wp_logout_url(get_permalink());
                echo "<a class='btn btn-warning mx-auto' href='".$link."'>Déconnexion</a>";
                echo "</div>";
                
                
            } else {
                
                
                echo "<div class='row'>";
                echo "<a href='#' id='wow-modal-id-1' class='btn btn-warning' role='button'><span class='button-text'><i class='fa fa-caret-right' aria-hidden='true'></i> Accès</span></a></div>";
                echo "</div>";
            }
            ?>
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            acces professeur  // OK
            -->
            <?php
            global $current_user;
            get_currentuserinfo();
            if (is_user_logged_in()) {
                echo "<div class='column'>";
                echo "<a href='http://studioradiomobile.test:8080/professeur/' class='btn btn-warning' role='button'><span class='button-text'><i class='fa fa-caret-right' aria-hidden='true'></i> Accès</span>";
                echo "</span>";
                echo "</a>";
                echo "<br/><br/>";
                $link = wp_logout_url(get_permalink());
                echo "<a class='btn btn-warning mx-auto' href='".$link."'>Déconnexion</a>";
                echo "</div>";
                
                
            } else {
                
                
                echo "<div class='row'>";
                echo "<a href='#' id='wow-modal-id-1' class='btn btn-warning' role='button'><span class='button-text'><i class='fa fa-caret-right' aria-hidden='true'></i> Accès</span></a></div>";
                echo "</div>";
            }
            ?>
            
            
            <!--
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            acces proviseur  // OK
            -->
            <?php
            global $current_user;
            get_currentuserinfo();
            if (is_user_logged_in()) {
                ?>
                <a href="http://studioradiomobile.test:8080/proviseur/" class="btn btn-warning" role="button"><i class="fa fa-caret-right" aria-hidden="true"></i> Accès</a>
                <?php
                
                
                
                
            } else {
                
                
                echo "<div class='row'>";
                echo "<a href='#' id='wow-modal-id-1' class='btn btn-warning' role='button'><span class='button-text'><i class='fa fa-caret-right' aria-hidden='true'></i> Accès</span></a></div>";
                echo "</div>";
            }
            ?>
            