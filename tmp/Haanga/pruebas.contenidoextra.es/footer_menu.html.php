<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/footer_menu.html */
function haanga_8f0128c84794d24be583112a2c9f6bffad51763e($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div id="footwrap"> <div id="footcol1"> <h5>'._('suscripciones por RSS').'</h5> <ul> <li><a href="'.$globals['base_url'].'rss2.php" >'._('publicadas').'</a></li> <li><a href="'.$globals['base_url'].'rss2.php?status=queued" >'._('en cola').'</a></li> ';
    if ($current_user->user_id > 0) {
        echo ' <li><a href="'.$globals['base_url'].'comments_rss2.php?conversation_id='.$current_user->user_id.'" title="'._('comentarios de las noticias donde has comentado').'">'._('mis conversaciones').'</a></li> <li><a href="'.$globals['base_url'].'comments_rss2.php?author_id='.$current_user->user_id.'" >'._('comentarios a mis noticias').'</a></li> ';
    }
    echo ' <li><a href="'.$globals['base_url'].'comments_rss2.php" >'._('todos los comentarios').'</a></li> </ul> </div> <div id="footcol2"> ';
    if ($globals['is_meneame']) {
        echo ' <h5>ayuda</h5> <ul id="helplist"> <li><a href="'.$globals['base_url'].'faq-es.php">'._('faq').'</a></li> <li><a href="http://meneame.wikispaces.com/Ayuda">'._('ayuda').'</a></li> <li><a href="http://meneame.wikispaces.com/">'._('wiki').'</a></li> <li><a href="http://meneame.wikispaces.com/Bugs">'._('avisar errores').'</a></li> <li><a href="'.$globals['legal'].'#contact">'._('avisar abusos').'</a></li> </ul> ';
    }
    echo ' </div> <div id="footcol3"> ';
    if ($globals['is_meneame']) {
        echo ' <h5>+contenido Extra</h5> <ul id="moremenelist"> <li><a href="http://m.meneame.net/">'._('versión móvil').'</a></li> <li><a href="http://tv.meneame.net/">'._('contenido Extra TV').'</a></li> <li><a href="http://twitter.com/meneame_net">'._('síguenos en twitter').'</a></li> <li><a href="http://meneame.jaiku.com/">'._('síguenos en jaiku').'</a></li> <li><a href="/notame/">'._('nótame').'</a></li> <li><a href="http://blog.meneame.net/">'._('blog').'</a></li> </ul> ';
    }
    echo ' </div> <div id="footcol4"> <h5>'._('estadísticas').'</h5> <ul id="statisticslist"> <li><a href="'.$globals['base_url'].'topusers.php">'._('usuarios').'</a></li> <li><a href="'.$globals['base_url'].'topstories.php">'._('populares').'</a></li> <li><a href="'.$globals['base_url'].'topcommented.php">'._('más comentadas').'</a></li> <li><a href="'.$globals['base_url'].'topcomments.php">'._('mejores comentarios').'</a></li> <li><a href="'.$globals['base_url'].'cloud.php">'._('nube de etiquetas').'</a></li> <li><a href="'.$globals['base_url'].'sitescloud.php">'._('nube de webs').'</a></li> <li><a href="'.$globals['base_url'].'promote.php">'._('candidatas').'</a></li> <li><a href="'.$globals['base_url'].'values.php">'._('parámetros básicos').'</a></li> </ul> </div> <div id="footcol5"> <h5>'._('relax').'</h5> <ul id="mapslist"> ';
    if ($globals['fancybox_enabled']) {
        echo ' <li><a href="javascript:fancybox_gallery(\'all\');">'._('imágenes').'</a></li> ';
    }
    echo ' <li><a href="'.$globals['base_url'].'geovision.php">'._('geovisión').'</a></li> ';
    if ($globals['google_maps_in_links']) {
        echo ' <li><a href="'.$globals['base_url'].'map.php">'._('noticias').'</a></li> ';
    }
    echo ' </ul> ';
    if ($globals['is_meneame']) {
        echo ' <h5>tienda</h5> <ul id="shoplift"> <li><a href="http://meneame.wikispaces.com/menechandising">'._('camisetas').'</a></li> <li><a href="http://www.socialmediasl.com/">'._('publicidad').'</a></li> </ul> ';
    }
    echo ' </div> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}