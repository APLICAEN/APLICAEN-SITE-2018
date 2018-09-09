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
    ["Achille Godineau",
        "assets/img/photo_equipe/achille.png",
        "Président",
        "Être président c'est avoir une compréhension claire de tous les autres postes afin d'être un leader compétent. C'est aussi incarner et porter haut l'image de la Junior et de son école.",
        "president@aplicaen.fr"],
    ["Paul Freifer",
        "assets/img/photo_equipe/paul.png",
        "Secrétaire Général",
        "Être secrétaire général, c'est gérer la Junior, tant du point de vue légal que de celui des ressources humaines. Mais c'est aussi assurer la cohésion et la motivation de l'équipe.",
        "contact@aplicaen.fr"],
    ["Julien Chevron",
        "assets/img/photo_equipe/julien.png",
        "Responsable Suivi d'Etude",
        "Le RSE assure le bon déroulement d'une étude, de son début jusqu'à sa fin. Il a ainsi pour mission de rédiger les documents administratifs de celle ci.",
        "expert@aplicaen.fr"],
    ["Antoine Dechavanne",
        "assets/img/photo_equipe/antoine.png",
        "Responsable Suivi d'Etude",
        "Le responsable suivi d’étude doit faire le lien entre l'entreprise et le chef de projet afin que l'étude se déroule correctement.", "expert@aplicaen.fr"],
    ["Mathieu Seraphim",
        "assets/img/photo_equipe/mathieu.png",
        "Responsable Qualité",
        "L'erreur est humaine. C'est le rôle de la Qualité de les corriger; mais aussi de s'assurer d'un déroulement optimal des processus de la Junior, et d'en faire état.",
        "qualite@aplicaen.fr"],
    ["Aurélien Arcangeli",
        "assets/img/photo_equipe/aurelien.png",
        "Comptable",
        "Être comptable, c'est utiliser la comptabilité pour analyser et piloter la junior. C'est aussi assister le trésorier et assurer un contrôle sur la trésorerie de la junior.",
        "tresorier@aplicaen.fr"],
    ["Chams-eddine El Hayel",
        "assets/img/photo_equipe/chams.png",
        "Trésorier",
        "Le trésorier doit s'assurer que la Junior aie suffisamment d'argent pour continuer son activité sans risque. Pour cela, il élabore un budget prévisionnel, s'occupe des déclarations fiscales et sociales de la junior et prend des décisions de la validation ou non des dépenses.",
        "tresorier@aplicaen.fr"],
    ["Rémi Lecouillard",
        "assets/img/photo_equipe/remi.png",
        "Responsable Communication",
        "Responsable Communication c'est s'occuper des réseaux sociaux et élaborer des graphismes. Dev'Co c'est démarcher les clients, et comprendre leurs besoins.",
        "contact@aplicaen.fr"],
    ["Iliass Fendi",
        "assets/img/photo_equipe/iliass.png",
        "Responsable Développement Commercial",
        " ",
        "contact@aplicaen.fr"],
    ["Pierre Chopinet",
        "assets/img/photo_equipe/pierre.png",
        "D.S.I.",
        "Le directeur des systèmes d'information doit s'occuper de tout les services informatique de la junior, aussi bien le site internet que nos outils internes.",
        "dsi@aplicaen.fr"],
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
                <a href="<?php echo "mailto:" . $mail ?>">
                    <button type="button" class="btn btn-block btn-info btn-round fixed-bottom">
                        Contacter
                    </button>
                </a>
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

        <div class="card container parallax-card">
            <div class="card-body">
                <div class="col-md-auto">
                    <h1 class="title">Qui sommes nous ?</h1>
                    <hr>
                    <div>
                        <div class="container">

                            <div class="row">
                                <p>Blabla bla aplicaen bla bla ensicaen</p>
                            </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <br><br>
                                    <img class="rounded img-fluid" src="assets/img/junior-entreprises.png">
                                </div>
                                <div class="col-md-9">
                                    <h3>Les Junior-Entreprises</h3>
                                    <p>Une Junior-Entreprise est une association d’étudiants de Grande École qui réalise
                                        des
                                        études à caractère pédagogique
                                        pour des professionnels (entreprises, particuliers, collectivités locales) sur
                                        le
                                        modèle des cabinets de conseil
                                        ou des sociétés de service en ingénierie.</p>
                                    <p>Les Junior-Entreprises sont des associations loi 1901 à but non lucratif mais à
                                        vocation économique. Leur intérêt
                                        est à la fois économique et pédagogique. Les Junior-Entreprises permettent de
                                        mettre
                                        en application l’enseignement
                                        dispensé au sein de leur établissement en réalisant des études pour des
                                        professionnels. Elles offrent à leurs membres
                                        une formation aux mécanismes de la gestion d’une entreprise et de management
                                        d’une
                                        équipe.</p>
                                    <h3>La CNJE</h3>
                                    <p>La Confédération Nationale des Junior-Entreprises (CNJE) est une association loi
                                        1901
                                        fédérant les Junior-Entreprises
                                        françaises. La CNJE conseille et forme les Junior-Entrepreneurs tout en
                                        coordonnant
                                        et en animant le mouvement
                                        des Junior-Entreprises.</p>
                                    <a href="https://junior-entreprises.com" target="_blank">
                                        <button type="button" class="btn btn-info btn-round">
                                            Plus d'informations
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>ENSICAEN</h3>
                                    <p>L’ENSICAEN, école publique située au coeur du plateau scientifique, au Nord de
                                        Caen,
                                        forme des ingénieurs à l’innovation
                                        et à l’entreprenariat, avec une solide formation scientifique. Vous bénéficiez
                                        de la
                                        proximité de nos 6 laboratoires
                                        de recherche communs (CNRS, CEA, UNICAEN). Les enseignements sont orientés «
                                        métiers
                                        » vous garantissent la meilleure
                                        qualité pour vos projets. À l’ENSICAEN, la formation, la recherche et
                                        l’entreprise
                                        interagissent pour former les ingénieurs
                                        de demain.</p>
                                    <p>Former des ingénieurs compétents et opérationnels capables de s’adapter aux
                                        besoins
                                        d’un monde en perpétuelle évolution,
                                        telle est l’ambition de l’ENSICAEN.</p>
                                    <a href="https://ensicaen.fr" target="_blank">
                                        <button type="button" class="btn btn-info btn-round">
                                            Plus d'informations
                                        </button>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <img src="assets/img/ensicaen.png" width="200" height="200">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>


        <div class="card container">
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
