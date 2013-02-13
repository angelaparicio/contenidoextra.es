<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/comment_edit.html */
function haanga_628e7691486baa202897cc62cd153b5661a8f81d($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<input type="hidden" name="link_id" value="'.$link->id.'" /> <input type="hidden" name="user_id" value="'.$current_user->user_id.'"/> ';
    if ($comment->media_size > 0) {
        echo ' &nbsp;&nbsp;<label>'._('Eliminar imagen').': <input type="checkbox" name="image_delete" value="1"/></label>&nbsp; ';
    }
    
    if ($current_user->user_karma > $globals['media_min_karma'] OR $current_user->admin) {
        echo ' <input type="hidden" name="MAX_FILE_SIZE" value="'.$globals['media_max_size'].'" /> <div style="float:right"> <label>'._('Subir imagen').': <input type="file" autocomplete="off" name="image" id="fileInput" accept="image/gif, image/jpeg, image/png"/></label> <div class="droparea_info" style></div> </div> <script type="text/javascript"> $(\'form.comment\').droparea({maxsize: '.$globals['media_max_size'].' }); </script> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}