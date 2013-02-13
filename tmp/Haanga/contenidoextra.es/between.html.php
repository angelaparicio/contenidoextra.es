<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/between.html */
function haanga_eeb0a58ba45eb42eab26fd08cf8144bca595cbf7($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo ' <div class="genericform" style="text-align: center; margin-left: 20px; margin-right: 20px"> <fieldset> <form id="thisform" action=""> <select name="type" id="type"> ';
    foreach ($options['types'] as  $option) {
        echo ' <option value="'.$option.'" ';
        if ($option == $options['type']) {
            echo ' selected="selected" ';
        }
        echo '>'.$option.' </option> ';
    }
    echo ' </select> &nbsp;&nbsp; <label for="u1">'._('usuario 1').':</label> <img id="u1_avatar" alt="avatar 1" ';
    if ($options['u1']) {
        echo ' src="'.$globals['base_url'].'backend/get_avatar.php?user='.$options['u1'].'&amp;size=20" style="vertical-align:text-bottom" ';
    } else {
        echo ' src="'.get_no_avatar_url(20).'" style="vertical-align:text-bottom;visibility:hidden" ';
    }
    echo ' class="avatar" width="20" height="20"/> <input type="text" name="u1" id="u1" value="'.$options['u1'].'" size="12" class="ac_user"/> &nbsp;&nbsp; <label for="u2">'._('usuario 2').':</label> <img id="u2_avatar" alt="avatar 2" ';
    if ($options['u2']) {
        echo ' src="'.$globals['base_url'].'backend/get_avatar.php?user='.$options['u2'].'&amp;size=20" style="vertical-align:text-bottom" ';
    } else {
        echo ' src="'.get_no_avatar_url(20).'" style="vertical-align:text-bottom;visibility:hidden" ';
    }
    echo ' class="avatar" width="20" height="20"/> <input type="text" name="u2" id="u2" value="'.$options['u2'].'" size="12" class="ac_user"/> <br /> <input class="button" type="submit" value="'._('mostrar').'" /> </form> </fieldset> </div> <script type="text/javascript"> $(".ac_user").user_autocomplete(); </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}