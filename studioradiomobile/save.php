
<h3 class="text-center">Connexion</h3>
        <div class="form-group">
            <label for="formGroupExampleInput">Identifiant</label>
            <input type="text" class="form-control" id="userLogin" placeholder="Pseudo" name="log">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Mot de passe</label>
            <input type="text" class="form-control" id="userPass" placeholder="Votre mot de passe" name="pwd">
        </div>

        <!-- <p><label><input type="checkbox" tabindex="90" value="forever" id="rememberMe" name="rememberMe">Rester connecter</label>
        | <a href="http://www.VOTRE_SITE.com/wp-login.php?action=lostpassword">Mot de passe oublié</a></p>
        <p> -->
        <button type="submit" class="btn btn-warning">Connexion</button>
        </p>
        </form>
    </div>
<!-- formulaire d'inscription personnalisé-->

    <div class="col-6" id="inscription">

        <form method="post" action="" id="registerForm" name="registerForm">
        <h3 class="text-center">Inscription</h3>
        <div class="form-group">
            <label for="formGroupExampleInput">Identifiant</label>
            <input type="text" class="form-control" id="userLoginReg" placeholder="Pseudo" name="logReg">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Adresse mail</label>
            <input type="text" class="form-control" id="userMailReg" placeholder="Votre email" name="mailReg">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Mot de passe</label>
            <input type="text" class="form-control" id="userPassReg" placeholder="Votre mot de passe" name="pwdReg">
        </div>
  
        <div class="form-column">Vous êtes<br/>
            <div class="row">
            <div class="form-check-inline">
                <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label ml-5 pr-5" for="inlineRadio1">Elève</label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input ml-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Professeur</label>
            </div>
            </div>
        </div>
            
            <p>
            <button type="submit" class="btn btn-warning">Inscription</button>
            </p>
        </div>
 
        </form>
    </div>
