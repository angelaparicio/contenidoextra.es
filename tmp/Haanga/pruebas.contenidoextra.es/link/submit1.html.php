<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/link/submit1.html */
function haanga_2e696aede985d7b6224aea9bd611f4959412c11b($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    if ($errors) {
        echo ' '.Haanga::Load('link/errors.html', $vars, TRUE, $blocks).' ';
    }
    
    if ($link) {
        
        if (!$errors) {
            echo ' <h2>'._('envío de una nueva historia: paso 2 de 3').'</h2> ';
        }
        echo ' '.Haanga::Load('link/edit.html', $vars, TRUE, $blocks).' ';
    } else {
        echo ' '.Haanga::Load('link/submit_empty_form.html', $vars, TRUE, $blocks).' ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}