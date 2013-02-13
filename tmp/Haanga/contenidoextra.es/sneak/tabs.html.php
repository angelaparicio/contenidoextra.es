<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/sneak/tabs.html */
function haanga_96e14de1bdf2892ef611cf44ecc7b212225225b9($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<ul class="tabmain"> <li ';
    if ($option == 1) {
        echo 'class="tabmain-this"';
    }
    echo '> <a href="'.$globals['base_url'].'sneak.php">'._('todos').'</a> </li> <li ';
    if ($option == 2) {
        echo 'class="tabmain-this"';
    }
    echo '> <a href="'.$globals['base_url'].'sneak.php?friends=1">'._('amigos').'</a> </li> ';
    if ($current_user->user_id > 0 && $current_user->admin) {
        echo ' <li ';
        if ($option == 3) {
            echo 'class="tabmain-this"';
        }
        echo '> <a href="'.$globals['base_url'].'sneak.php?admin=1">'._('admin').'</a> </li> ';
    }
    echo ' <li> <a href="'.$globals['base_url'].'telnet.php">&nbsp;<img src="'.$globals['base_static'].'img/common/konsole.png" alt="telnet"/>&nbsp;</a> </li> </ul> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}