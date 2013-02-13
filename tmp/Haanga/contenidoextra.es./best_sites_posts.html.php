<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/best_sites_posts.html */
function haanga_d7bbb9603c2f78a927aa254217a383ae1e41d7ef($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="sidebox"> <div class="header"> <h4>'._('sitios más votados').'</h4> </div> <div class="mainsites"> <ul> ';
    $forcounter1_1  = 1;
    foreach ($res as  $site) {
        echo ' <li>'.$forcounter1_1.'. <a href="'.$globals['base_url'].'search.php?q='.urlencode($site->blog_url).'&amp;p=site&amp;h=48&amp;s=published" title="'._('votos 48 horas').': '.$site->total.' (coef: '.intval($site->coef).')">'.parse_url($site->blog_url, PHP_URL_HOST).'</a> </li> ';
        $forcounter1_1  = ($forcounter1_1 + 1);
    }
    echo ' </ul> </div> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}