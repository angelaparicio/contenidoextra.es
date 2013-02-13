<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/link/errors.html */
function haanga_9e8a1c25a55482b8ad62f82bace2163e2bf36eab($vars, $return=FALSE, $blocks=array())
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