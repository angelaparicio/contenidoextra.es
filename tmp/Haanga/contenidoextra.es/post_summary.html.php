<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/post_summary.html */
function haanga_2285fc11428d08cb7a0685d08bf65e7ffed6161d($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div id="pcontainer-'.$self->prefix_id.$self->id.'"> <div class="'.$post_class.'" id="pid-'.$self->prefix_id.$self->id.'"> ';
    if ($self->is_disabled) {
        echo ' &#187;&nbsp;<a href="javascript:get_votes(\'get_post.php\',\'post\',\'pid-'.$self->prefix_id.$self->id.'\',0,'.$self->id.')" title="'._('ver texto').'">'._('ver texto').'</a> ';
    } else {
        echo ' '.Haanga::Load('post_summary_text.html', $vars, TRUE, $blocks).' ';
    }
    echo ' </div> <div class="'.$post_meta_class.'"> <div class="comment-votes-info"> ';
    if ($self->can_vote) {
        
        if ($self->user_can_vote) {
            echo ' <span id="c-votes-'.$self->id.'"> <a href="javascript:menealo_post('.$current_user->user_id.','.$self->id.',1)" title="'._('voto positivo').'"><img src="'.$globals['base_static'].'img/common/vote-up02.png" width="18" height="16" alt="'._('voto positivo').'"/></a>&nbsp; <a href="javascript:menealo_post('.$current_user->user_id.','.$self->id.',-1)" title="'._('voto negativo').'"><img src="'.$globals['base_static'].'img/common/vote-down02.png" width="18" height="16" alt="'._('voto negativo').'"/></a>&nbsp; </span> ';
        } else {
            
            if ($self->voted > 0) {
                echo ' <img src="'.$globals['base_static'].'img/common/vote-up-gy02.png" width="18" height="16" alt="'._('votado positivo').'" title="'._('votado positivo').'"/> ';
            } else {
                if ($self->voted < 0) {
                    echo ' <img src="'.$globals['base_static'].'img/common/vote-down-gy02.png" width="18" height="16" alt="'._('votado negativo').'" title="'._('votado negativo').'"/> ';
                }
            }
            
        }
        
    }
    echo ' '._('votos').': <span id="vc-'.$self->id.'">'.$self->votes.'</span>, '._('karma').': <span id="vk-'.$self->id.'">'.$self->karma.'</span> ';
    if ($self->show_votes) {
        echo ' <a class="fancybox" href="'.$globals['base_url'].'backend/get_p_v.php?id='.$self->id.'" title="'._('votos').'"><span class="counter info">i</span></a>&nbsp; ';
    }
    echo ' <a href="'.post_get_base_url($self->id).'" title="permalink"><img class="link-icon" src="'.$globals['base_static'].'img/common/link-02.png" width="18" height="16" alt="link" title="'._('enlace permanente').'" /></a> ';
    if ($current_user->user_id > 0) {
        echo ' <a id="fav-'.$self->id.'" href="javascript:get_votes(\'get_favorite_post.php\',\''.$current_user->user_id.'\',\'fav-'.$self->prefix_id.$self->id.'\',0,\''.$self->id.'\')">'.favorite_teaser($current_user->user_id, $self, 'post').'</a> ';
    }
    
    if ($current_user->user_id > 0) {
        echo ' <a href="javascript:post_reply('.$self->id.',\''.$self->username.'\')" title="'._('responder').'"><img src="'.$globals['base_static'].'img/common/reply02.png" width="18" height="16"/></a> ';
    }
    echo ' </div> <div class="comment-info"> '.$self->comment_info.' </div> </div> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}