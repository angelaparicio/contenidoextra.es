<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/simpleformat_buttons.html */
function haanga_3f35599eea6543f3003d8f57f307798e440fd709($vars, $return=FALSE, $blocks=array())
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