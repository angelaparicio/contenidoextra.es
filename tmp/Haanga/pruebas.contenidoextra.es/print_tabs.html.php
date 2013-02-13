<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/print_tabs.html */
function haanga_cebd869d276afdca008484e6e81be8194865cfcb($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<ul class="subheader"> ';
    foreach ($items as  $item) {
        echo ' <li';
        if ($item['id'] == $option OR $item['selected']) {
            echo ' class="selected"';
        }
        echo '> <span> <a href="'.$globals['base_url'].$item['url'].'" title="+/-">'.$item['title'].'</a> ';
        if ($item['id'] == $option OR $item['selected']) {
            echo ' <script type="text/javascript"> var plus = \''.$globals['static_server'].'\' + base_url + \'img/common/plus-001.png\'; var minus = \''.$globals['static_server'].'\' + base_url + \'img/common/minus-001.png\'; bindTogglePlusMinus(\'toggle_i_0\', \'toggle_l_0\', \''.$container_id.'\'); </script> <a class=\'toggler\' id=\'toggle_l_0\' href=\'\' title="+/-"> ';
            if ($toggle_enabled) {
                echo ' <img src=\''.$globals['base_static'].'img/common/minus-001.png\' id=\'toggle_i_0\' alt=\'-\' width=\'18\' height=\'18\'/> ';
            } else {
                echo ' <img src=\''.$globals['base_static'].'img/common/plus-001.png\' id=\'toggle_i_0\' alt=\'+\' width=\'18\' height=\'18\'/> ';
            }
            echo ' </a>  ';
        }
        echo ' </span> </li> ';
    }
    
    if ($feed) {
        echo ' <li class="icon"> <a href="'.$globals['base_url'].'rss2.php'.$feed['url'].'" title="'.$feed['title'].'" > <img src="'.$globals['base_static'].'img/common/feed-icon-001.png" width="18" height="18" alt="rss2"/> </a> </li> ';
    }
    echo ' </ul> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}