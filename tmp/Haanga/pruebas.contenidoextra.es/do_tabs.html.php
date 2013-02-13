<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/do_tabs.html */
function haanga_5e12fde74ac7b1bbad3f22c63e1a7501b7ec5607($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<ul class="'.$tabname.'"> ';
    foreach ($items as  $item) {
        
        if ($tab_selected == $item['name']) {
            echo ' <li '.$active.'> <a href="';
            if ($item['rel']) {
                echo $globals['base_url'];
            }
            echo $item['url'].'" title="'.$reload_text.'">'.$item['title'].'</a> </li> ';
        } else {
            echo ' <li> <a href="';
            if ($item['rel']) {
                echo $globals['base_url'];
            }
            echo $item['url'].'">'.$item['title'].'</a> </li> ';
        }
        
    }
    echo ' </ul> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}