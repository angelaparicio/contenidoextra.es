<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/fancybox.html */
function haanga_6fdfaa2103a2335ea3109de139f46fe95d460ee1($vars, $return=FALSE, $blocks=array())
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