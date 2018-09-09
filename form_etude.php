<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 27/07/18
 * Time: 17:58
 */

require_once "config.php";
?>
<div class="modal fade" id="etudeModal" tabindex="-1" role="dialog" style="margin-top: 10px">
    <div class="modal-dialog" role="document">
        <div class="modal-content card">
            <div class="modal-header card-header card-header-primary">
                <div class="col-10">
                    <h2 class="modal-title card-title" id="exampleModalLongTitle">Demande de devis</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="send.php">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input required name="nom" type="text" class="form-control" id="nom"
                               placeholder="Entrez votre nom">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input required name="prenom" type="text" class="form-control" id="prenom"
                               placeholder="Entrez votre prénom">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">e-mail</label>
                        <input required name="email" type="email" class="form-control" id="e-mail"
                               aria-describedby="e-mail-help" placeholder="Entrez votre e-mail">
                        <small id="e-mail-help" class="form-text text-muted">
                            Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Numéro de téléphone</label>
                        <input name="telephone" type="number" class="form-control" id="telephone"
                               placeholder="Entrez votre numéro de téléphone">
                        <small id="telephone-help" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="societe">Société</label>
                        <input name="societe" type="text" class="form-control" id="societe"
                               placeholder="Entrez votre le nom de votre société">
                        <small id="societe-help" class="form-text text-muted">optionnel</small>
                    </div>

                    <div class="form-group">
                        <label for="message">Description de votre projet</label>
                        <textarea required name="message" class="form-control" id="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-round btn-block btn-primary">Envoyer</button>
                </form>
            </div>

        </div>
    </div>
</div>