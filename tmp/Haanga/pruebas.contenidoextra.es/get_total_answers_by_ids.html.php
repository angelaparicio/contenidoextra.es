<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/get_total_answers_by_ids.html */
function haanga_fe7f3ff0641ef1162b7956a455a16ce5b2c1cd11($vars, $return=FALSE, $blocks=array())
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