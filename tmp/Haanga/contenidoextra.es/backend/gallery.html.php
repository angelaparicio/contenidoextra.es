<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/backend/gallery.html */
function haanga_af7f338f5e1495cf541e8457cef5be03e6976049($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$globals['lang'].'" lang="'.$globals['lang'].'"> <head> </head> <body> <div id="gallery-container"> ';
    $forcounter1_1  = 1;
    foreach ($media as  $m) {
        echo ' <a id="gallery-'.$forcounter1_1.'" class="fancybox" rel="gallery" href="'.$globals['base_url'].'backend/media.php?type='.$m->type.'&amp;id='.$m->id.'&amp;image.jpg" title="'.$m->type.','.$m->id.','.$m->user.'"></a> ';
        $forcounter1_1  = ($forcounter1_1 + 1);
    }
    echo ' <script type="text/javascript"> function formatTitle(title, currentArray, currentIndex, currentOpts) { t_i_u = title.split(","); script = \'get_\'+t_i_u[0]+\'_tooltip.php\'; if (t_i_u[0] == \'post\') type = \''._('nota de').'\'; else type = \''._('comentario de').'\'; pages = (currentIndex + 1) + \'/\' + currentArray.length; url = base_url + \'backend/go.php?what=\' + t_i_u[0] + \'&id=\' + t_i_u[1]; who = \'<div><a class="fancybox" href="\'+url+\'" target="_blank" style="margin-bottom: 4px">\' + type + \'&nbsp;\' + t_i_u[2] + \'</a>\'+\'&nbsp;[<a href="\'+$(\'#fancybox-img\').attr(\'src\')+\'" target="_blank">'._('imagen').'</a>]\'+\'</div>\'; return who + pages; } function onComplete() { reportAjaxStats(\'image\', \'gallery\'); } $("#gallery-container > a.fancybox").fancybox( { \'type\': "image", \'transitionIn\' : \'none\', \'transitionOut\' : \'none\', \'showNavArrows\': true, \'cyclic\': true, \'titlePosition\': \'inside\', \'titleFormat\' : formatTitle, \'showCloseButton\' : true, \'autoDimensions\': true, \'autoScale\': true, \'onComplete\': onComplete, \'onClosed\': function() {$(\'#gallery\').remove()}, } ); $(document).ready(function() {$("#gallery-1").trigger(\'click\')}); </script> </div> </body> </html> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}