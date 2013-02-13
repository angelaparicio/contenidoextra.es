<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/priv_edit.html */
function haanga_8b66cc5e6868430523f2a80f2fffe6e857d17ae6($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="commentform" id="edit-form" style="text-align:left"> <fieldset><legend><span class="sign"> ';
    if ($self->id > 0) {
        echo ' '._('edición').' ';
    } else {
        echo ' '._('nuevo mensaje').' ';
    }
    echo ' </span></legend> <form action="'.$globals['base_url'].'backend/priv_edit.php?user='.$current_user->user_id.'" method="post" id="thisform'.$self->id.'" name="thisform'.$self->id.'" enctype="multipart/form-data"> ';
    $dummy  = print_simpleformat_buttons('post');
    echo ' <input type="hidden" name="key" value="'.$self->randkey.'" /> <input type="hidden" name="id" value="'.$self->id.'" /> <input type="hidden" name="author" value="'.$self->author.'" /> <label>'._('A:').'</label>&nbsp;<img id="to_user_avatar" ';
    if ($self->to > 0) {
        echo ' src="'.$globals['base_url'].'backend/get_avatar.php?user='.$self->to_username.'&amp;size=20" style="vertical-align:text-bottom" ';
    } else {
        echo ' src="'.get_no_avatar_url(20).'" style="vertical-align:text-bottom;visibility:hidden" ';
    }
    echo ' class="avatar" width="20" height="20"/> <input type="text" name="to_user" id="to_user" ';
    if ($self->to > 0) {
        echo ' readonly value="'.$self->to_username.'" ';
    } else {
        echo ' class="ac_user" ';
    }
    echo ' /> <textarea style="clear: both" name="post" rows="6" cols="40" id="post" class="droparea" ';
    if (!$globals['mobile']) {
        echo ' onKeyDown="textCounter(document.thisform'.$self->id.'.post,document.thisform'.$self->id.'.postcounter,'.$globals['posts_len'].')" ';
    }
    echo ' >'.$self->content.'</textarea> <div style="margin-top:-7px"> ';
    if (!$globals['mobile']) {
        echo ' <input readonly type="text" name="postcounter" size="3" maxlength="3" value="'.$self->body_left.'" /> <span class="note">'._('caracteres libres').'</span>&nbsp;&nbsp; ';
    }
    
    if ($current_user->user_karma > $globals['media_min_karma'] OR $current_user->admin) {
        echo ' <input type="hidden" name="MAX_FILE_SIZE" value="'.$globals['media_max_size'].'"/> <div style="float:right"> <label>'._('Subir imagen').': <input type="file" autocomplete="off" name="image" id="fileInput" accept="image/gif, image/jpeg, image/png"/></label> <div class="droparea_info" style="min-height:50px"></div> </div> ';
    }
    echo ' </div> <input class="button" type="submit" value="'._('enviar').'" /> </form> </fieldset> </div> <script type="text/javascript"> $(\'#thisform'.$self->id.'\').droparea({maxsize: '.$globals['media_max_size'].' }); </script> <script type="text/javascript"> var ac_minChars = 2; var ac_friends = true;  var options = { async: false, success: function(response) { if (/^ERROR:/.test(response)) mDialog.notify(response, 5); else { priv_show(response); } } }; $(\'#thisform'.$self->id.'\').ajaxForm(options); ';
    if (!$self->to > 0) {
        echo ' $(".ac_user").user_autocomplete({ minChars: 2, params: {friends: 1} }); ';
    }
    echo ' </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}