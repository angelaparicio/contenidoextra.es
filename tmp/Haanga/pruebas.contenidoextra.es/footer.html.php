<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/footer.html */
function haanga_836a87f6214e9c40fef85fbdd2849dc8d4d2e4bd($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '</div> <div id="footthingy"> <p>contenido Extra</p> <ul id="legalese">  ';
    if ($globals['is_meneame']) {
        echo ' <li><a href="'.$globals['legal'].'">'._('condiciones legales').'</a> <a href="'.$globals['legal'].'#tos">'._('y de uso').'</a>&nbsp;&#47;&nbsp;</li> <li><a href="'.$globals['base_url'].'faq-'.$globals['lang'].'.php#we">'._('quiénes somos').'</a>&nbsp;&#47;&nbsp;</li> <li>'._('licencias').':&nbsp; <a href="'.$globals['base_url'].'COPYING">'._('código').'</a>,&nbsp; <a href="http://creativecommons.org/licenses/by-sa/3.0/">'._('gráficos').'</a>,&nbsp; <a rel="license" href="http://creativecommons.org/licenses/by/3.0/es/">'._('contenido').'</a>&nbsp;&#47;&nbsp;</li> <li><a href="http://validator.w3.org/check?uri=referer">HTML5</a>&nbsp;&#47;&nbsp;</li> <li><a href="http://websvn.meneame.net/listing.php?repname=meneame&amp;path=/branches/version4/">'._('descargar código').'</a></li> ';
    } else {
        echo ' <li>Descargar <a href="http://contenidoextra.es/contenidoextra.tar.gz">c&oacute;digo</a>. Publicado bajo <a href="http://www.gnu.org/licenses/agpl.html">licencia Affero</a> y basado en el c&oacute;digo de <a href="http://www.meneame.net/">men&eacute;ame</a></li> <li>Contenido bajo<a href="http://creativecommons.org/licenses/by/3.0/es/">licencia CC BY 3.0</a>. <a href="http://en.wikipedia.org/wiki/File:Video-x-generic.svg">Video-x-generic.svg</a>, licencia Libre</li> <li>Contactar <a href="mailto:contacto@contenidoextra.es">aquí</a></li> ';
    }
    echo ' </ul>  </div> </div>  ';
    if ($globals['fancybox_enabled']) {
        echo ' <script type="text/javascript" src="'.$globals['base_static'].'js/fancybox/jquery.fancybox-1.3.4.pack.js"></script> '.Haanga::Load('fancybox.html', $vars, TRUE, $blocks).' ';
    }
    
    foreach ($globals['post_js'] as  $js) {
        
        if (substr($js, 0, 4) == 'http') {
            echo ' <script src="'.$js.'" type="text/javascript"></script> ';
        } else {
            echo ' <script src="'.$globals['base_static'].'js/'.$js.'" type="text/javascript"></script> ';
        }
        
    }
    echo '  
'.Haanga::Safe_Load('private/stats.html', $vars, TRUE, Array()).'
</body>
'.sprintf('<!--Delivered to you in %4.3f seconds-->', (microtime(TRUE) - $globals['start_time'])).'
 </html> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}