<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/get_total_answers_by_ids.html */
function haanga_a0e4adbbdfb51b121c208bd4f5a8517063b7d86d($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<script type="text/javascript"> $(window).load(get_total_answers_by_ids("'.$type.'", "'.$ids.'")); </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}