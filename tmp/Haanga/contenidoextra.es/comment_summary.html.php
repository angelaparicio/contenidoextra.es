<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/comment_summary.html */
function haanga_eb842a3cb4de11dffb0cc2e7129ade1d4686c96c($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div id="c-'.$self->prefix_id.$self->html_id.'"> <div class="'.$self->comment_class.'" id="cid-'.$self->prefix_id.$self->id.'"> '.Haanga::Load('comment_summary_text.html', $vars, TRUE, $blocks).' </div> <div class="'.$self->comment_meta_class.'"> <div class="comment-votes-info"> ';
    if ($self->type != 'admin' AND $self->user_level != 'disabled') {
        
        if ($self->can_vote) {
            
            if ($self->user_can_vote) {
                echo ' <span id="c-votes-'.$self->id.'"> <a href="javascript:menealo_comment('.$current_user->user_id.','.$self->id.',1)" title="'._('informativo, opinión razonada, buen humor...').'"><img src="'.$globals['base_static'].'img/common/vote-up02.png" width="18" height="16" alt="'._('voto positivo').'"/></a>&nbsp; <a href="javascript:menealo_comment('.$current_user->user_id.','.$self->id.',-1)" title="'._('racismo, insulto, acoso, spam, magufo...').'"><img src="'.$globals['base_static'].'img/common/vote-down02.png" width="18" height="16" alt="'._('voto negativo').'"/></a>&nbsp; </span> ';
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
        echo ' '._('votos').': <span id="vc-'.$self->id.'">'.$self->votes.'</span>, '._('karma').': <span id="vk-'.$self->id.'">'.$self->karma.'</span>&nbsp; ';
    }
    
    if ($self->has_votes_info) {
        echo ' <a class="fancybox" href="'.$globals['base_url'].'backend/get_c_v.php?id='.$self->id.'" title="'._('votos').'"><span class="counter info">i</span></a>&nbsp; ';
    }
    echo ' <a href="'.$self->get_relative_individual_permalink().'" title="permalink"><img class="link-icon" src="'.$globals['base_static'].'img/common/link-02.png" width="18" height="16" alt="link" title="'._('enlace permanente').'"/></a> ';
    if ($current_user->user_id > 0) {
        echo ' <a id="fav-'.$self->prefix_id.$self->id.'" href="javascript:get_votes(\'get_favorite_comment.php\',\''.$current_user->user_id.'\',\'fav-'.$self->prefix_id.$self->id.'\',0,\''.$self->id.'\')">'.favorite_teaser($current_user->user_id, $self, 'comment').'</a> ';
    }
    
    if ($self->can_reply) {
        echo ' <a href="javascript:comment_reply('.$self->c_order.')" title="'._('responder').'"><img src="'.$globals['base_static'].'img/common/reply02.png" width="18" height="16" alt=""/></a> ';
    }
    echo ' </div> <div class="comment-info"> '.$self->author_info.' <img src="'.$self->avatar_img.'" width="20" height="20" ';
    if ($self->type != 'admin' AND $self->user_level != 'disabled') {
        echo ' class="tooltip u:'.$self->author.'" alt="'.$self->username.'" ';
    }
    echo ' /> </div> </div> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}