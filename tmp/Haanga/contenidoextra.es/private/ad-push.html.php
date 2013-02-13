<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/private/ad-push.html */
function haanga_d64a81079b1a9d25a2614c79ceabcebe40823110($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="ad_right"> <a href="https://play.google.com/store/apps/details?id=com.lgvalle.pushtolive&feature=search_result#?t=W251bGwsMSwxLDEsImNvbS5sZ3ZhbGxlLnB1c2h0b2xpdmUiXQ"> <img src="http://pruebas.contenidoextra.es/img/ads/push_to_live_banner.jpg" alt="Push to live"> </a> </div>';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}