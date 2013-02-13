<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/private/ad-right.html */
function haanga_25e17d104fe40d00b9540b80b0e6c4305deaa965($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '¡Anuncio!';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}