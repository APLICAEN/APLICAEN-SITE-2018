<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 08/08/18
 * Time: 10:22
 */

require_once "config.php";
require_once "nav.php";

$equipe = [
    ["Achille Godineau", "assets/img/photo_equipe/achille.png", "Président", "Blah", "president@aplicaen.fr"],
    ["Paul Freifer", "assets/img/photo_equipe/paul.png", "Secrétaire Général", " ", "contact@aplicaen.fr"],
    ["Julien Chevron", "assets/img/photo_equipe/julien.png", "Responsable Suivi d'Etude", " ", "expert@aplicaen.fr"],
    ["Antoine Dechavanne", "assets/img/photo_equipe/antoine.png", "Responsable Suivi d'Etude", " ", "expert@aplicaen.fr"],
    ["Mathieu Seraphim", "assets/img/photo_equipe/mathieu.png", "Responsable Qualité", " ", "qualite@aplicaen.fr"],
    ["Aurélien Arcangeli", "assets/img/photo_equipe/aurelien.png", "Comptable", " ", "tresorier@aplicaen.fr"],
    ["Chams-eddine El Hayel", "assets/img/photo_equipe/chams.png", "Trésorier", " ", "tresorier@aplicaen.fr"],
    ["Rémi Lecouillard", "assets/img/photo_equipe/remi.png", "Responsable Communication", " ", "contact@aplicaen.fr"],
    ["Iliass Fendi", "assets/img/photo_equipe/iliass.png", "Responsable Développement Commercial", " ", "contact@aplicaen.fr"],
    ["Pierre Chopinet", "assets/img/photo_equipe/pierre.png", "D.S.I.", " ", "dsi@aplicaen.fr"],
];

function member($nom, $image, $poste, $description, $mail)
{

    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-4">
                <img src="<?php echo $image ?>" class="img-raised rounded img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <h3 class="title"> <?php echo $nom ?></h3>
                <h4><?php echo $poste ?></h4>
                <p><?php echo $description ?></p>
                <button type="button" class="btn btn-block btn-info btn-round fixed-bottom">
                    <a href="<?php echo "mailto:" . $mail ?>">Contacter</a>
                </button>
            </div>
        </div>
    </div>


    <?php
    return;
}


?>
    <section>
        <div class="page-header header-filter clear-filter" data-parallax="true"
             style="background-image: url('assets/img/photo_groupe.png'); width: 100%; height: 100%">
            <div class="container">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-center">
                        <h1 class="title">Notre Equipe</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="card container col-md-10">
            <div class="card-body">
                <div class="col-md-auto">
                    <h1 class="title">Qui sommes nous ?</h1>
                    <hr>
                    <div>
                        fgngz
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>

        <div class="card container col-md-10">
            <div class="card-body">
                <div class="col-md-auto">
                    <h2 class="title">Notre Equipe</h2>
                    <hr>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php member($equipe[0][0], $equipe[0][1], $equipe[0][2], $equipe[0][3], $equipe[0][4]); ?>
                            </div>
                            <?php
                            for ($i = 1; $i < sizeof($equipe); $i++) {
                                ?>
                                <div class="carousel-item">
                                    <?php member($equipe[$i][0], $equipe[$i][1], $equipe[$i][2], $equipe[$i][3], $equipe[$i][4]); ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <button class="btn btn-round"> <</button>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <button class="btn btn-round"> ></button>
                        </a>
                    </div>
                </div>
            </div>

            <br>
        </div>

    </section>


<?php
require_once "footer.php";
