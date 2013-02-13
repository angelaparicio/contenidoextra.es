<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/link/duplicated.html */
function haanga_1ca5fbb0e0809847e523f40f472a8b83042282a1($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<p class="error"><strong>'._('noticia repetida').'</strong></p> <p class="error-text">'._('disculpas').'</p> ';
    $dummy  = $link->print_summary();
    echo ' <br style="clear: both;" /><br/> <form class="genericform" action=""> <input class="button" type="button" onclick="window.history.go(-1)" value="&#171; '._('retroceder').'" /> </form> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}