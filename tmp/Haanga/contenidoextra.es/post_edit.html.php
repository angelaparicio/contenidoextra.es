<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/post_edit.html */
function haanga_9f3cd676744d27bc3b685210add61e0532afd0ea($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="commentform" id="edit-form"> <fieldset><legend><span class="sign"> ';
    if ($self->id > 0) {
        echo ' '._('edición nota').' ';
    } else {
        echo ' '._('nueva nota').' ';
    }
    echo ' </span></legend> ';
    $dummy  = print_simpleformat_buttons('post');
    echo ' <form action="'.$globals['base_url'].'backend/post_edit.php?user='.$current_user->user_id.'" method="post" id="thisform'.$self->id.'" name="thisform'.$self->id.'" enctype="multipart/form-data"> <input type="hidden" name="key" value="'.$self->randkey.'" /> <input type="hidden" name="post_id" value="'.$self->id.'" /> <input type="hidden" name="user_id" value="'.$self->author.'" /> <textarea style="clear: both" name="post" class="droparea" rows="6" cols="40" id="post" ';
    if (!$globals['mobile']) {
        echo ' onKeyDown="textCounter(document.thisform'.$self->id.'.post,document.thisform'.$self->id.'.postcounter,'.$globals['posts_len'].')" ';
    }
    echo ' >'.$self->content.'</textarea> <div style="margin-top:-7px"> ';
    if (!$globals['mobile']) {
        echo ' <input readonly type="text" name="postcounter" size="3" maxlength="3" value="'.$self->body_left.'" /> <span class="note">'._('caracteres libres').'</span>&nbsp;&nbsp; ';
    }
    
    if ($self->media_size > 0) {
        echo ' <label>'._('Eliminar imagen').': <input type="checkbox" name="image_delete" value="1"/></label>&nbsp; ';
    }
    
    if ($current_user->user_karma > $globals['media_min_karma'] OR $current_user->admin) {
        echo ' <input type="hidden" name="MAX_FILE_SIZE" value="'.$globals['media_max_size'].'"/> <div style="float:right"> <label>'._('Subir imagen').': <input type="file" autocomplete="off" name="image" id="fileInput" accept="image/gif, image/jpeg, image/png"/></label> <div class="droparea_info"></div> </div> ';
    }
    echo ' </div> <input class="button" type="submit" value="'._('guardar').'" /> </form> </fieldset> </div> <script type="text/javascript"> $(\'#thisform'.$self->id.'\').droparea({maxsize: '.$globals['media_max_size'].' }); </script> <script type="text/javascript"> /* prepare Options Object */ ';
    if ($self->id == 0) {
        echo ' var options = { async: false, success: function(response) { if (/^ERROR:/.test(response)) mDialog.notify(response, 5); else $("#newpost").html(response); $("#addpost").hide("fast"); } }; ';
    } else {
        echo ' var options = { async: false, success: function(response) { if (/^ERROR:/.test(response)) mDialog.notify(response, 5); else $("#pcontainer-'.$self->id.'").html(response); } }; ';
    }
    echo ' /* wait for the DOM to be loaded */ $(\'#thisform'.$self->id.'\').ajaxForm(options); </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}