<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 27/07/18
 * Time: 17:52
 */
?>
<html>
<?php
require_once "config.php";
require_once "nav.php";
?>
<section>
    <br>
    <br>
    <br>
    <br>
</section>

<section id="actu">
    <div class="container">
        <div class="card">
            <div class="card-header card-header-info">
                <h3 class="card-title">Notre actualité</h3>
            </div>
            <div class="card-body row">
                <div class="col-md-4 col-12">
                    <a class="twitter-timeline" data-height="700"
                       href="https://twitter.com/aplicaen?ref_src=twsrc%5Etfw">
                        Tweets by aplicaen
                    </a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-4 col">
                    <a class="twitter-timeline" data-height="700"
                       href="https://twitter.com/aplicaen?ref_src=twsrc%5Etfw">
                        Tweets by aplicaen
                    </a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="col-md-4 col">
                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-page" data-href="https://www.facebook.com/Aplicaen/" data-tabs="timeline"
                         data-height="700" data-small-header="true" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Aplicaen/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/Aplicaen/">APLICAEN</a>
                        </blockquote>
                    </div>
                </div>
            </div>


        </div>
    </div>


</section>
<br><br>
<?php
require_once "footer.php";
?>
</html>