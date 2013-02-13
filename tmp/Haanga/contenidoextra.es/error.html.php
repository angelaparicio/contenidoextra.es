<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/error.html */
function haanga_ebad826be291f90ef64673dafddb112f8a4e5ff3($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<STYLE TYPE="text/css" MEDIA=screen> <!-- .errt { text-align:center; padding-top:50px; font-size:300%; color:#FF6400;} .errl { text-align:center; margin-top:50px; margin-bottom:100px; } --> </STYLE> <p class="errt"> ';
    if ($mess) {
        echo ' '.$mess.' ';
    } else {
        echo ' '._('algún error nos ha petado').' ';
    }
    echo ' <br/> <span style="font-size: 80%"> ';
    if ($error) {
        echo ' '.sprintf(_('error %s'), $error).' ';
    }
    echo ' </span> </p> <div class="errl"> <img src="'.$globals['base_url'].'img/mnm/lame_excuse_01.png" width="362" height="100" alt="ooops logo" /> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}