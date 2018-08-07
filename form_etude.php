<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 27/07/18
 * Time: 17:58
 */

?>

<form id="etudeForm" method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 left">
            <input name="nom" id="nom" class="infos" type="text" required placeholder="Nom"/>
            <input name="prenom" id="prenom" class="infos" type="text" required placeholder="Prénom"/>
            <input name="mail" id="mail" class="infos" type="text" required placeholder="Email"
                   onblur="verifMail(this)"/>
            <input name="telephone" id="telephone" class="infos" type="text" required placeholder="Téléphone"/>
        </div>
        <div class="col-md-6 right">
            <input name="societe" id="societe" class="infos" type="text" required placeholder="Société"/>
            <textarea name="message" id="message" class="infos" rows="4" required
                      placeholder="Description de votre projet"></textarea>
        </div>
    </div>
    <input type="button" id="submitButton" class="btn btn-danger btn-lg" Value="Envoyer" onclick="submitForm()"/>
</form>