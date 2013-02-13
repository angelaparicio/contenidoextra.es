<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/fancybox.html */
function haanga_99d7ee28cece2af3cbf0231c41a610a3e42622b2($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    if ($globals['fancybox_enabled']) {
        echo ' <script type="text/javascript"> try { $(document).ready( function() { $("a.fancybox")';
        if ($current_user->user_id > 0) {
            echo '.click(fancybox_expand_images)';
        }
        echo '.fancybox({ transitionIn: "none", transitionOut: "none", titlePosition: \'inside\', titleFormat: function(title, cA, cI, cO) { if ($(\'#fancybox-img\').length ) return title + \'&nbsp;[\\x3Ca href="\'+$(\'#fancybox-img\').attr(\'src\')+\'">'._('enlace imagen').'\\x3C/a>]\'; else return title; }, onComplete: function() { reportAjaxStats(\'image\', \'single\'); }, }); } ); } catch(e) {}; </script> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}