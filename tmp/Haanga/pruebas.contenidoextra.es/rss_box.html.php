<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/rss_box.html */
function haanga_2d79c22102955d1cc9a7f5fd60ac2d62277299e6($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="sidebox"> <div class="header"> <h4>'._('suscripciones por RSS').'</h4> </div> <div class="rss"> <ul> ';
    if ($_REQUEST['q']) {
        echo ' <li> <a href="'.$globals['base_url'].$search_rss.'?'.htmlspecialchars($_SERVER['QUERY_STRING']).'">'._('búsqueda').': '.htmlspecialchars($_REQUEST['q']).'</a> </li> ';
    }
    
    if ($globals['link_id']) {
        
        if ($globals['link']->meta_name) {
            echo ' <li> <a href="'.$globals['base_url'].'rss2.php?meta='.$globals['link']->meta_id.'&amp;status=all" >'._('temática').': <em>'.$globals['link']->meta_name.'</em></a> </li> ';
        }
        
        if ($globals['link']->category_name) {
            echo ' <li> <a href="'.$globals['base_url'].'rss2.php?category='.$globals['link']->category.'&amp;status=all" >'._('categoría').': <em>'._($globals['link']->category_name).'</em></a> </li> ';
        }
        
    }
    echo ' <li> <a href="'.$globals['base_url'].'rss2.php" >'._('publicadas').'</a> </li> <li> <a href="'.$globals['base_url'].'rss2.php?status=queued" >'._('en cola').'</a> </li> ';
    if ($globals['link_id']) {
        echo ' <li> <a href="'.$globals['base_url'].'comments_rss2.php?id='.$globals['link_id'].'" > '._('comentarios de esta noticia').' </a> </li> ';
    }
    
    if ($current_user->user_id > 0) {
        echo ' <li> <a href="'.$globals['base_url'].'comments_rss2.php?conversation_id='.$current_user->user_id.'" title="'._('comentarios de las noticias donde has comentado').'"> '._('mis conversaciones').' </a> </li> <li> <a href="'.$globals['base_url'].'comments_rss2.php?author_id='.$current_user->user_id.'" >'._('comentarios a mis noticias').'</a> </li> ';
    }
    echo ' <li> <a href="'.$globals['base_url'].'comments_rss2.php" >'._('todos los comentarios').'</a> </li> </ul> </div> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}