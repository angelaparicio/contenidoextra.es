<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/link/edit.html */
function haanga_93a2ed74505342a02ea1cb90f62e5cefb7c2ce70($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    if ($link->is_new) {
        echo ' <div class="genericform"> <form action="submit.php" method="post" id="thisform" name="thisform"> <input type="hidden" name="url" id="url" value="'.htmlspecialchars($link->url).'" /> <input type="hidden" name="phase" value="2" /> <fieldset><legend><span class="sign">'._('información del enlace').'</span></legend> <p class="genericformtxt"><strong>'.$link->url_title.'</strong><br/> '.htmlspecialchars($link->url).' </p> </fieldset> ';
    } else {
        echo ' <h2>'._('editar noticia').'</h2> <div class="genericform"> <form action="editlink.php?user='.$current_user->user_id.'" method="post" id="thisform" name="thisform"> <input type="hidden" name="phase" value="1" /> ';
    }
    echo ' <input type="hidden" name="key" value="'.$link->key.'" /> <input type="hidden" name="randkey" value="'.$link->randkey.'" /> <input type="hidden" name="timestamp" value="'.$globals['now'].'" /> <input type="hidden" name="id" value="'.$link->id.'" /> <fieldset><legend><span class="sign">'._('detalles de la noticia').'</span></legend> ';
    if (!$link->is_new && $current_user->admin) {
        echo ' <label for="url" accesskey="1">'._('url de la noticia').':</label> <p><span class="note">'._('url de la noticia').'</span> <br/><input type="url" id="url" name="url" value="'.htmlspecialchars($link->url).'" size="80" /> </p> ';
    }
    echo ' <label for="title" accesskey="2">'._('título de la noticia').':</label> <p><span class="note">'._('título de la noticia. máximo: 120 caracteres').'</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div style="display: none"> '.Haanga::Load('link/content_type_buttons.html', $vars, TRUE, $blocks).' </div> <br/> ';
    if (!$link->title == '') {
        echo ' <input type="text" id="title" name="title" value="'.$link->title.'" size="80" maxlength="120" /> ';
    } else {
        echo ' <input type="text" id="title" name="title" value="'.$link->url_title.'" size="80" maxlength="120" /> ';
    }
    
    if (!$link->is_new && ($link->votes > 0 && ($link->status != 'published' || $current_user->user_level == 'god') && ((!$link->discarded && $current_user->user_id == $link->author) || $current_user->admin))) {
        echo ' &nbsp;&nbsp;&nbsp;&nbsp; <select name="status"> <option value="'.$link->status.'" selected="selected">'.$link->status_text.'</option> ';
        if ($link->status == 'queued') {
            echo ' <option value="autodiscard">'.$link->get_status_text('autodiscard').'</option> ';
            if ($current_user->user_id != $link->author) {
                echo ' <option value="abuse">'.$link->get_status_text('abuse').'</option> ';
            }
            
            if ($current_user->user_level == 'god') {
                echo ' <option value="published">'.$link->get_status_text('published').'</option> ';
            }
            
        } else {
            
            if ($link->discarded) {
                
                if ($current_user->admin) {
                    echo ' <option value="queued">'.$link->get_status_text('queued').'</option> <option value="autodiscard">'.$link->get_status_text('autodiscard').'</option> <option value="abuse">'.$link->get_status_text('abuse').'</option> ';
                }
                
            } else {
                
                if ($current_user->user_level == 'god') {
                    echo ' <option value="abuse">'.$link->get_status_text('abuse').'</option> <option value="autodiscard">'.$link->get_status_text('autodiscard').'</option> <option value="queued">'.$link->get_status_text('queued').'</option> ';
                }
                
            }
            
        }
        echo ' </select> ';
    }
    echo ' </p> <label for="tags" accesskey="3">'._('etiquetas').':</label> <p><span class="note"><strong>'._('pocas palabras, separadas por «,»').'</strong></span> <br/><input type="text" id="tags" name="tags" value="'.htmlspecialchars($link->tags).'" size="70" maxlength="70" /></p> ';
    $dummy  = print_simpleformat_buttons('bodytext');
    echo ' <p><label for="bodytext" accesskey="4">'._('descripción de la noticia').':</label> <br /><span class="note"><strong>'._('describe con fidelidad el contenido del enlace').'</strong></span> <br/> <textarea name="bodytext" rows="10" cols="60" id="bodytext" onKeyDown="textCounter(document.thisform.bodytext,document.thisform.bodycounter,550)" onKeyUp="textCounter(document.thisform.bodytext,document.thisform.bodycounter,550)" >'.$link->content.'</textarea> </p> <div style="margin-top:-7px"> <input readonly type="text" name="bodycounter" size="3" maxlength="3" value="'.$link->chars_left.'" /><span class="note">'._('caracteres libres').'</span></div> ';
    $dummy  = print_categories_form($link->category);
    
    if ($link->trackback) {
        echo ' <p><label for="trackback">'._('trackback').':</label><br /> <span class="note">'.$link->trackback.'</span> <input type="hidden" name="trackback" id="trackback" value="'.$link->trackback.'"/></p> ';
    }
    
    if (!$link->is_new && $current_user->admin > 0) {
        
        if ($link->thumb_url) {
            echo ' <label>'._('Eliminar imagen').': <input type="checkbox" name="thumb_delete" value="1"/></label><br/> ';
        } else {
            echo ' <label>'._('Obtener imagen (puede tardar varios segundos)').': <input type="checkbox" name="thumb_get" value="1"/></label><br/> <label>'._('o especificar url de la imagen').': <input type="url" name="thumb_url" size="80"/></label><br/> ';
        }
        
    }
    
    if ($link->is_new) {
        echo ' <input class="button" type="button" onclick="window.history.go(-1)" value="&#171; '._('retroceder').'" />&nbsp;&nbsp; <input class="button" type="submit" value="'._('continuar').' &#187;" /> ';
    } else {
        echo ' <input class="button" type="submit" value="'._('guardar').' &#187;" /> ';
    }
    echo ' </fieldset> </form> </div>';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}