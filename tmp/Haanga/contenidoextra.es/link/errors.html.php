<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/link/errors.html */
function haanga_038bb98f2eaa71150c5da72b9e21bb1f0852e6a0($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    if ($errors) {
        echo ' <div> ';
        foreach ($errors as  $title => $messages) {
            echo ' <p class="error">'.$title.'</p> ';
            foreach ($messages as  $m) {
                echo ' <p class="error-text">'.$m.'</p> ';
            }
            
        }
        echo ' </div> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}