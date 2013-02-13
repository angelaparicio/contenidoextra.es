<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/comment_summary_text.html */
function haanga_15d96d568e4f913ace49a52ced145d1c415afa29($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<a href="'.$self->link_permalink.'/000'.$self->c_order.'" rel="nofollow"><strong>#'.$self->c_order.'</strong></a>&nbsp;&nbsp; ';
    if ($self->hide_comment) {
        echo ' &#187;&nbsp;<a href="javascript:get_votes(\'get_comment.php\',\'comment\',\'cid-'.$self->prefix_id.$self->id.'\',0,'.$self->id.')" title="'._('ver comentario').'">'._('ver comentario').'</a> ';
    } else {
        echo ' '.$self->txt_content.' ';
        if ($self->media_size > 0) {
            echo ' &nbsp;<a class="fancybox" title="'._('subida por').' '.$self->username.' ('.$self->media_size.' bytes)" href="'.$globals['base_url'].'backend/media.php?type=comment&amp;id='.$self->id;
            if ($current_user->user_id > 0) {
                echo '&amp;image.jpg';
            }
            echo '"><img class="thumb" ';
            if ($globals['cache_redirector']) {
                echo ' src="'.$globals['base_static'].$self->media_thumb_dir.'/media_thumb-comment-'.$self->id.'.jpg"" width="'.$globals['media_thumb_size'].'" height="'.$globals['media_thumb_size'].'" ';
            } else {
                echo ' src="'.$globals['base_static'].'img/common/picture01.png" width="30" height="24" ';
            }
            echo ' alt="media" title="'._('Mayúsculas+Clic para expandir todas').'"/></a> ';
        }
        
        if ($self->can_edit) {
            echo ' &nbsp;&nbsp;<a href="javascript:get_votes(\'comment_edit.php\',\'edit_comment\',\'c-'.$self->html_id.'\',0, '.$self->id.')" title="'._('editar comentario').'"><img class="mini-icon-text" src="'.$globals['base_static'].'img/common/edit-misc01.png" alt="edit" width="18" height="12"/></a> ';
        }
        
        if ($self->is_truncated) {
            echo ' &nbsp;&nbsp;<a href="javascript:get_votes(\'get_comment.php\',\'comment\',\'cid-'.$self->prefix_id.$self->id.'\',0,'.$self->id.')" title="'._('resto del comentario').'">&#187;&nbsp;'._('ver todo el comentario').'</a> ';
        }
        
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}