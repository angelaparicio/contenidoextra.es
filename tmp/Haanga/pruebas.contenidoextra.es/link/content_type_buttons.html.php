<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/link/content_type_buttons.html */
function haanga_c6d02ab5d870a776197028793ef535b0381d730e($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="display: none" type="radio" ';
    if ($link->content_type == 'text') {
        echo 'checked="checked"';
    }
    echo ' name="type" value="text" />&nbsp;'._('texto').' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="display: none" type="radio" ';
    if ($link->content_type == 'image') {
        echo 'checked="checked"';
    }
    echo ' name="type" value="image" />&nbsp;<img src="'.$globals['base_static'].'img/common/is-photo02.png" class="media-icon" width="18" height="15" alt="'._('¿es una imagen?').'" title="'._('¿es una imagen?').'" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="display: none" type="radio" ';
    if ($link->content_type == 'video') {
        echo 'checked="checked"';
    }
    echo ' name="type" value="video" />&nbsp;<img src="'.$globals['base_static'].'img/common/is-video02.png" class="media-icon" width="18" height="15" alt="'._('¿es un vídeo?').'" title="'._('¿es un vídeo?').'" /> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}