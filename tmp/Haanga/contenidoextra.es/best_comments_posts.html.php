<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/best_comments_posts.html */
function haanga_d8f3f2fa3d9c38550bee42716186a7b8a2561b00($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="sidebox"><div class="header"> <h4><a href="'.$url.'">'.$title.'</a></h4> </div> <div class="comments"><ul> ';
    foreach ($objects as  $obj) {
        echo ' <li><img src="'.get_avatar_url($obj->user_id, $obj->avatar, 20).'" alt="" width="20" height="20" class="tooltip u:'.$obj->user_id.' avatar"/> <p><strong>'.$obj->username.'</strong> '._('en').' <a class="tooltip '.$obj->tooltip.':'.$obj->id.'" href="'.$obj->link.'" rel="nofollow">'.$obj->title.'</a> </p></li> ';
    }
    echo ' </ul></div></div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}