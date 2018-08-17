<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 08/08/18
 * Time: 10:22
 */

require_once "config.php";
require_once "nav.php";


function member($nom, $image, $poste, $description, $mail)
{

    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10 col-md-4">
                <img src="<?php echo $image ?>" class="img-raised rounded img-fluid">
            </div>
            <div class="col-10 col-md-6">
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

        <div class="card container col-md-10">

            <div class="col-md-auto">
                <h2 class="title">Notre Equipe</h2>
                <hr>
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <?php member("Pierre", "assets/img/photo_equipe/pierre.png", "D.S.I.", "blabla", "dsi@aplicaen.fr"); ?>
                        </div>
                        <div class="carousel-item">
                            <?php member("Pierre", "assets/img/photo_equipe/pierre.png", "D.S.I.", "blabla", "dsi@aplicaen.fr"); ?>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
        </div>

    </section>


<?php
require_once "footer.php";
