<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/do_tabs.html */
function haanga_46f7116ebb7241d125f70f4908c67b26d5c01c48($vars, $return=FALSE, $blocks=array())
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