<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 27/07/18
 * Time: 09:40
 */
require_once 'form_etude.php'
?>
<nav class="navbar navbar-expand-lg bg-dark fixed-top" style="background-image: url('assets/img/header9bis.png');">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="assets/img/logo-aplicaen.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="prestations.php">Nos prestations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="team.php">Notre équipe</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn btn-info btn-round font-weight-bold" data-toggle="modal" data-target="#etudeModal">Demander un devis</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
