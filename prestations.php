<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 17/08/18
 * Time: 11:49
 */

require_once 'config.php';
require_once 'nav.php';


function prestation($nom, $description, $logo)
{
    ?>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top"
                 src="<?php echo $logo ?>"
                 alt="Card image cap">
            <div class="card-header ">
                <h4 class="card-title"><?php echo $nom ?></h4>
            </div>
            <div class="card-body">
                <?php echo $description ?>
            </div>
        </div>
    </div>
    <?php

}

?>
    <div class="page-header header-filter clear-filter" data-parallax="true"
         style="background-image: url('assets/img/background_info.jpg'); width: 100%; height: 100%">
        <div class="container">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand text-center card">
                    <h1 class="title" style="color: #3c4858">Nos prestations</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");
            prestation("Site web", "loreme ibgbe bbg ", "https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80");

            ?>

        </div>
    </div>

<?php

require_once 'footer.php';


