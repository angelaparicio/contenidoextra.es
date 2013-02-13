<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/link/edit_result.html */
function haanga_2c3c02870ee4935dc569273573a25421c2cec6b6($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="genericform"> ';
    if (!$errors) {
        echo ' <div class="form-error-submit">&nbsp;&nbsp;'._('noticia actualizada').'</div> ';
    } else {
        
        foreach ($errors as  $e) {
            echo ' <div class="form-error-submit">&nbsp;&nbsp;'.$e.'</div> ';
        }
        
    }
    echo ' <div class="formnotice"> ';
    $dummy  = $link->print_summary('preview');
    echo ' </div> <form class="note" method="GET" action="story.php" > <input type="hidden" name="id" value="'.$link->id.'" /> <input class="button" type="button" onclick="window.history.go(-1)" value="&#171; '._('modificar').'">&nbsp;&nbsp; <input class="button" type="submit" value="'._('ir a la noticia').'" /> </form> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}