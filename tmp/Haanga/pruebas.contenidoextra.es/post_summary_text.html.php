<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/post_summary_text.html */
function haanga_409c29c75f21536b0b379d78cd0631d6d67c096e($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    if ($self->show_avatar) {
        echo ' <a href="'.get_user_uri($self->username).'" class="tooltip u:'.$self->author.'"><img class="avatar" src="'.get_avatar_url($self->author, $self->avatar, 40).'" width="40" height="40" alt="'.$self->username.'"/></a> ';
    }
    echo ' '.$self->content.' ';
    if ($self->media_size > 0) {
        echo ' &nbsp;  <a class="fancybox" title="'._('subida por').' '.$self->username.' ('.$self->media_size.' bytes)" href="'.$globals['base_url'].'backend/media.php?type=post&amp;id='.$self->id;
        if ($current_user->user_id > 0) {
            echo '&amp;image.jpg';
        }
        echo '"><img class="thumb" ';
        if ($globals['cache_redirector']) {
            echo ' src="'.$globals['base_static'].$self->media_thumb_dir.'/media_thumb-post-'.$self->id.'.jpg" width="'.$globals['media_thumb_size'].'" height="'.$globals['media_thumb_size'].'" ';
        } else {
            echo ' src="'.$globals['base_static'].'img/common/picture01.png" width="30" height="24" ';
        }
        echo ' alt="media" title="'._('Mayúsculas+Clic para expandir todas').'"/></a> ';
    }
    
    if ($self->can_edit) {
        echo ' &nbsp;&nbsp;<a href="javascript:post_edit('.$self->id.')" title="'._('editar').'"><img class="mini-icon-text" src="'.$globals['base_static'].'img/common/edit-misc01.png" alt="edit" width="18" height="12"/></a> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}