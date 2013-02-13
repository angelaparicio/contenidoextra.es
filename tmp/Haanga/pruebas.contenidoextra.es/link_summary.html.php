<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/link_summary.html */
function haanga_58705a98c5f490b5b48d79b2230eb856d3693581($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="news-summary"> <div class="news-body"> ';
    if ($self->show_shakebox) {
        echo ' <div class="news-shakeit"> <div class="'.$self->box_class.'"> <a id="a-votes-'.$self->id.'" href="'.$self->permalink.'">'.$self->total_votes.'</a> '._('votos').' </div> ';
        if (!$globals['bot']) {
            echo ' <div class="menealo" id="a-va-'.$self->id.'"> ';
            if (!$self->votes_enabled) {
                echo ' <span>'._('cerrado').'</span> ';
            } else {
                
                if (!$self->voted) {
                    echo ' <a href="javascript:menealo('.$current_user->user_id.', '.$self->id.')" id="a-shake-'.$self->id.'">'._('vótalo').'</a> ';
                } else {
                    
                    if ($self->voted > 0) {
                        echo ' <span id="a-shake-'.$self->id.'">'._('¡chachi!').'</span> ';
                    } else {
                        echo ' <span id="a-shake-'.$self->id.'" class="negative">'.$globals['negative_votes_values'][$self->voted].'</span> ';
                    }
                    
                }
                
            }
            echo ' </div> ';
        }
        
        if ($type == 'full' AND $self->id >= $globals['click_counter'] AND $self->clicks > 0) {
            echo ' <div class="clics">'.$self->clicks.' '._('clics').'</div> ';
        }
        echo ' </div> ';
    }
    
    if ($self->status == 'abuse' OR $self->has_warning) {
        
        if ($self->status == 'abuse') {
            echo ' <div class="warn"><strong>'._('Aviso').'</strong> '._('noticia descartada por violar las').' <a href="'.$globals['legal'].'#tos">'._('normas de uso').'</a> </div> ';
        } else {
            
            if ($self->has_warning) {
                echo ' <div class="warn"><strong>'._('Aviso automático').'</strong>: ';
                if ($self->status == 'published') {
                    echo ' '._('noticia errónea o controvertida, por favor lee los comentarios.').' ';
                } else {
                    
                    if ($self->author == $current_user->user_id AND $self->is_editable) {
                        echo ' '._('Esta noticia tiene varios votos negativos.').' '._('Tu karma no será afectado si la descartas manualmente.').' ';
                    } else {
                        
                        if ($self->negative_text) {
                            echo ' '._('Esta noticia podría ser').' <strong>'.$self->negative_text.'</strong> ';
                        } else {
                            echo ' '._('Esta noticia tiene varios votos negativos.').' ';
                        }
                        echo ' <a href="'.$self->permalink.'">'._('Asegúrate').'</a> '._('antes de votar').' ';
                    }
                    
                }
                echo ' </div> ';
            }
            
        }
        
    }
    
    if ($globals['ads']) {
        echo '<!-- google_ad_section_start -->';
    }
    echo ' <h1> <a href="'.htmlspecialchars($self->url).'" ';
    if ($globals['click_counter']) {
        echo ' onmousedown="return clk(this, '.$self->id.')" ';
    }
    
    if ($self->status != 'published') {
        echo ' rel="nofollow"';
    }
    echo '>'.$self->title.' </a> ';
    if ($self->content_type == 'image') {
        echo ' &nbsp;<img src="'.$globals['base_static'].'img/common/is-photo01.png" class="media-icon" width="18" height="15" alt="'._('imagen').'" title="'._('imagen').'" /> ';
    }
    
    if ($self->content_type == 'video') {
        echo ' &nbsp;<img src="'.$globals['base_static'].'img/common/is-video01.png" class="media-icon" width="18" height="15" alt="'._('vídeo').'" title="'._('vídeo').'" /> ';
    }
    echo ' </h1> <div class="news-submitted"> ';
    if ($type != 'short') {
        echo ' <a href="'.get_user_uri($self->username).'" class="tooltip u:'.$self->author.'"><img src="'.get_avatar_url($self->author, $self->avatar, 25).'" width="25" height="25" alt=""/></a> ';
    }
    echo ' <strong>'.$self->url_str.'</strong>&nbsp;<br /> '.sprintf(_('por %s'), $self->username_str).' ';
    if ($self->print_date) {
        echo ' '._('el').' '.get_date_time($self->sent_date).' ';
        if ($self->status == 'published') {
            echo ' '._('publicado el').' '.get_date_time($self->date).' ';
        }
        
    } else {
        echo ' '._('hace').' '.txt_time_diff($self->sent_date).' ';
        if ($self->status == 'published') {
            echo ' '._('publicado hace').' '.txt_time_diff($self->date).' ';
        }
        
    }
    echo ' </div> ';
    if ($type == 'full' || $type == 'preview') {
        
        if ($self->thumb_url) {
            echo ' <img src=\''.$self->thumb_url.'\' width=\''.$self->thumb_x.'\' height=\''.$self->thumb_y.'\' alt=\'\' class=\'thumbnail\'/> ';
        }
        echo ' <p> '.$self->content.' ';
        if ($type != 'preview') {
            
            if ($self->is_editable) {
                echo ' &nbsp;&nbsp;<a href="'.$globals['base_url'].'editlink.php?id='.$self->id.'&amp;user='.$current_user->user_id.'" title="'._('editar noticia').' #'.$self->id.'"><img class="mini-icon-text" src="'.$globals['base_static'].'img/common/edit-misc01.png" alt="edit" width="18" height="12"/></a> ';
            }
            
            if ($self->map_editable) {
                echo ' &nbsp;&nbsp;<a href="#" onclick="$(\'#geoedit\').load(\''.$globals['base_url'].'geo/get_form.php?id='.$self->id.'&amp;type=link&amp;icon='.$self->status.'\'); return false;"> <img class="mini-icon-text" src="'.$globals['base_static'].'img/common/edit-geo01.png" alt="edit" title="'._('editar geolocalización').'"/></a> ';
            }
            
        }
        echo ' </p> ';
    }
    
    if ($self->do_inline_friend_votes AND $self->friend_votes) {
        echo ' <div style="padding: 3px 0 2px 0;"> ';
        foreach ($self->friend_votes as  $vote) {
            echo ' <a href="'.get_user_uri($vote->user_login).'" title="'.$vote->user_login.': '._('valor').' '.$vote->vote_value.'"><img class="avatar" src="'.get_avatar_url($vote->user_id, $vote->user_avatar, 40).'" width="40" height="40" alt=""/></a>&nbsp;&nbsp; ';
        }
        echo ' </div> ';
    }
    
    if ($globals['link'] || (($self->is_editable OR $self->status == 'queued') AND $globals['now'] - $self->date < 7200) || $type == 'short') {
        
        if ($self->show_tags AND $self->tags) {
            echo ' <div class="news-details"> <strong>'._('etiquetas').'</strong>: ';
            $tags_array  = explode(',', $self->tags);
            
            foreach ($tags_array as  $id => $tag) {
                
                if ($id > 0) {
                    echo ', ';
                }
                
                if ($globals['base_search_url']) {
                    echo '<a href="'.$globals['base_url'].$globals['base_search_url'].'tag:'.urlencode($tag).'">'.$tag.'</a>';
                } else {
                    echo '<a href=\''.$globals['base_url'].'search.php?p=tags&amp;q='.urlencode($tag).'\'>'.$tag.'</a>';
                }
                
            }
            echo '  ';
            if ($globals['fancybox_enabled'] AND $globals['sphinx_server'] AND $self->is_editable OR $self->author == $current_user->user_id) {
                echo ' &nbsp;[<a class="fancybox" href="'.$globals['base_url'].'backend/tags_analysis.php?id='.$self->id.'" title="'._('diagnóstico de etiquetas').'"><strong>'._('diagnosticar').'</strong></a>] ';
            }
            echo ' </div> ';
        }
        
    }
    
    if ($globals['ads']) {
        echo '<!-- google_ad_section_end -->';
    }
    
    if ($globals['link'] || $type == 'short') {
        
        if ($type != 'short') {
            echo ' <div class="news-details"> <strong>'._('negativos').'</strong>: <span id="a-neg-'.$self->id.'">'.$self->negatives.'</span>&nbsp;&nbsp; <strong>'._('usuarios').'</strong>: <span id="a-usu-'.$self->id.'">'.$self->votes.'</span>&nbsp;&nbsp; <strong>'._('anónimos').'</strong>: <span id="a-ano-'.$self->id.'">'.$self->anonymous.'</span>&nbsp;&nbsp; ';
            if ($current_user->user_id > 0) {
                echo ' <span class="tool"> <a id="fav-'.$self->id.'" href="javascript:get_votes(\'get_favorite.php\',\''.$current_user->user_id.'\', \'fav-'.$self->id.'\',0,\''.$self->id.'\')"> '.favorite_teaser($current_user->user_id, $self).' </a> </span> ';
            }
            echo ' <div style="display:inline" class="tool"> ';
            if (!$self->is_discarded()) {
                
                $shortlink  = $self->get_short_permalink();
                
                $enc_shortlink  = urlencode($shortlink);
                
                $enc_title  = urlencode($self->title);
                echo ' <strong><a href="'.$shortlink.'" title="'._('enlace corto').'">'._('compartir').'</a></strong>:  &nbsp;<a href="http://twitter.com/share?url='.$enc_shortlink.'&amp;text='.$enc_title;
                if ($globals['twitter_user']) {
                    echo '&amp;via='.$globals['twitter_user'];
                }
                echo '" target="_blank"><img src="'.$globals['base_static'].'img/favicons/twitter.gif" alt="twitter" title="'.sprintf(_('compartir en %s'), 'twitter').'" width="16" height="16"/></a> &nbsp;<a href="http://www.facebook.com/share.php?u='.$enc_shortlink.'" target="_blank"><img src="'.$globals['base_static'].'img/favicons/fb.gif" alt="facebook" title="'.sprintf(_('compartir en %s'), 'facebook').'" width="16" height="16"/></a> &nbsp;<a href="http://www.tuenti.com/share?url='.urlencode($self->permalink).'" target="_blank"><img src="'.$globals['base_static'].'img/favicons/tuenti.png" alt="tuenti" title="'.sprintf(_('compartir en %s'), 'tuenti').'" width="16" height="16"/></a> &nbsp;<div class="g-plusone" style="display:inline" data-size="small" data-count="false"></div>  <script type="text/javascript"> window.___gcfg = {lang: \'es\'}; $(function () { $.getScript("https://apis.google.com/js/plusone.js"); }); </script>  ';
            }
            echo ' </div> </div> ';
        }
        
    }
    echo ' <div class="news-details main"> <span class="comments-counter"><a href="'.$self->permalink.'">';
    if ($self->comments > 0) {
        echo '<span class="counter">'.$self->comments.'</span> '._('comentarios');
    } else {
        echo _('sin comentarios');
    }
    echo '</a></span> <span class="tool"> <a href="'.$globals['base_url'].'?meta='.$self->meta_uri.'" title="'._('meta').'"> '.$self->meta_name.'</a>, <a href="'.$globals['base_url'].'?meta='.$self->meta_uri.'&amp;category='.$self->category.'" title="'._('categoría').'"> '.$self->category_name.'</a> </span> <span class="tool">karma: <span id="a-karma-'.$self->id.'"> '.intval($self->karma).' </span></span> ';
    if ($self->can_vote_negative) {
        echo ' <form class="tool" action="" id="problem-'.$self->id.'"> <select name="ratings" onchange="report_problem(this.form,'.$current_user->user_id.', '.$self->id.')"> <option value="0" selected="selected">'._('problema').'</option> ';
        foreach ($globals['negative_votes_values'] as  $pkey => $pvalue) {
            echo ' <option value="'.$pkey.'">'.$pvalue.'</option> ';
        }
        echo ' </select> </form> ';
    }
    echo ' </div> ';
    $dummy  = do_banner_story();
    
    if ($self->best_comment) {
        echo ' <div class="box" style="font-size: 80%; border: 1px solid; border-color: #dadada; background: #fafafa; margin: 7px 50px 7px 25px; padding: 4px; overflow:hidden"> <a class="tooltip c:'.$self->best_comment->comment_id.'" href="'.$self->permalink.'/000'.$self->best_comment->comment_order.'"> <strong>'.$self->best_comment->comment_order.'</strong></a>:&nbsp;'.text_to_summary($self->best_comment->content, 200).' </div> ';
    }
    echo ' </div> </div> ';
    if ($self->map_editable) {
        echo ' <div id="geoedit" class="geoform" style="margin-left:20px"> ';
        if ($self->add_geo) {
            
            $geotxt  = _('ubica al origen de la noticia o evento (ciudad, país)');
            
            $dummy  = geo_coder_print_form('link', $self->id, $globals['latlng'], $geotxt);
            
        }
        echo ' </div> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}