<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/link/submit0.html */
function haanga_2f1310102c9656f2368ecd60cb7d6633519fb5af($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<h2>'._('envío de una nueva historia: paso 1 de 3').'</h2> <div class="faq"> <h3>'._('por favor, respeta estas instrucciones para mejorar la calidad:').'</h3> <ul class="instruction-list"> <li><strong>'._('contenido externo').':</strong> '._('Este no es un sitio para generar noticias').'</li> <li><strong>'._('contenido interesante').':</strong> '._('¿interesará a una cantidad razonable de lectores?').'</li> <li><strong>'._('enlaza la fuente original').':</strong> '._('no enlaces a sitios intermedios que no añaden nada al original').'</li> <li><strong>'._('busca antes').':</strong> '._('evita duplicar historias').'</li> <li><strong>'._('sé descriptivo').':</strong> '._('explica el enlace de forma fidedigna, no distorsiones').'</li> <li><strong>'._('respeta el voto de los demás').'</strong>. '._('si los votos te pueden afectar personalmente, es mejor que no envíes la historia').'</li> </ul></div> '.Haanga::Load('link/submit_empty_form.html', $vars, TRUE, $blocks).' ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}