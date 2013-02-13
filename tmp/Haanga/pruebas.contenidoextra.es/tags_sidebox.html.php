<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/tags_sidebox.html */
function haanga_7101d2dc1bc4c9c053800cf5ea609c26f3e1b79e($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="sidebox"> <div class="header"> <h4> ';
    if ($url) {
        echo ' <a href="'.$url.'">'.$title.'</a> ';
    } else {
        echo ' '.$title.' ';
    }
    echo ' </h4> </div> <div class="cell"> <p class="tagcloud"> '.$content.' </p> </div> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}