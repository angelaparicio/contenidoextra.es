<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/simpleformat_buttons.html */
function haanga_9050fa4c825da245dfca1d8eb86e665d4d100da6($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div style="margin-bottom: 4px"> <button type="button" onclick="applyTag(\''.$id.'\', \'del\');" class="rich-edit-key"><del>D</del></button> <button type="button" onclick="applyTag(\''.$id.'\', \'i\');" class="rich-edit-key"><i>I</i></button> <button type="button" onclick="applyTag(\''.$id.'\', \'b\');" class="rich-edit-key"><b>B</b></button> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}