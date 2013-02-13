<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/most_clicked_stories.html */
function haanga_14d3c993f926fbcc88eb2ccc976c5024b091536a($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="sidebox"> <div class="header"> <h4><a href="'.$url.'">'.$title.'</a></h4> </div> ';
    foreach ($links as  $l) {
        echo ' <div class="cell"> <div class="clics">'.$l->clicks.'<br/>'._('clics').'</div> ';
        if ($l->thumb) {
            echo ' <img src="'.$l->thumb.'" width="'.$l->thumb_x.'" height="'.$l->thumb_y.'" alt=\'\' class="thumbnail"/> ';
        }
        echo ' <h5 ';
        if ($l->warn) {
            echo 'style="padding-left:20px;background: url('.$globals['base_static'].'img/common/error_s.png) no-repeat left center"';
        }
        echo '> <a href="'.$l->url.'" class="tooltip l:'.$l->id.'">'.$l->title.'</a></h5> </div> ';
    }
    echo ' </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}