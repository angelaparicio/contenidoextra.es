<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/profile.html */
function haanga_7e07f4bdfc45f9016ea79f7b3606cd1e73dffaec($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div id="singlewrap" style="margin: 0 40px;"> <div class="genericform" style="margin: 0 50px"> ';
    if ($messages) {
        
        foreach ($messages as  $e) {
            echo ' <div class="form-error-submit">&nbsp;&nbsp;'.$e.'</div> ';
        }
        
    }
    echo ' <form enctype="multipart/form-data" action="'.$form->auth_link.'profile.php" method="post" id="thisform" AUTOCOMPLETE="off"> <fieldset><legend> <span class="sign">'._('opciones de usuario').' <a href="'.get_user_uri($user->username).'">'.$user->username.'</a>: '.$user->level.'</span></legend> <img class="thumbnail" src="'.get_avatar_url($user->id, $user->avatar, 80).'" width="80" height="80" alt="'.$user->username.'" /> <input type="hidden" name="process" value="1" /> <input type="hidden" name="user_id" value="'.$user->id.'" /> <input type="hidden" name="form_hash" value="'.$form->hash.'" /> ';
    $dummy  = get_form_auth_ip();
    
    if ($form->admin_mode) {
        echo ' <input type="hidden" name="login" value="'.$user->username.'" /> ';
    }
    echo ' <p><label>'._('usuario').':</label><br/> <input type="text" autocomplete="off" name="username" id="username" value="'.$user->username.'" onkeyup="enablebutton(this.form.checkbutton1, null, this)" /> &nbsp;&nbsp;<span id="checkit"><input type="button" class="button" id="checkbutton1" disabled="disabled" value="'._('verificar').'" onclick="checkfield(\'username\', this.form, this.form.username)"/></span> &nbsp;<span id="usernamecheckitvalue"></span> </p> <p><label>'._('nombre real').':</label><br/> <input type="text" autocomplete="off" name="names" id="names" value="'.$user->names.'" /> </p> <p><label>'._('correo electrónico').':</label><br/> <input type="text" autocomplete="off" name="email" id="email" value="'.$user->email.'" onkeyup="enablebutton(this.form.checkbutton2, null, this)"/> &nbsp;&nbsp;<input type="button" class="button" id="checkbutton2" disabled="disabled" value="'._('verificar').'" onclick="checkfield(\'email\', this.form, this.form.email)"/> &nbsp;<span id="emailcheckitvalue"></span> </p> <p><label>'._('página web').':</label><br/> <input type="text" autocomplete="off" name="url" id="url" value="'.$user->url.'" size="30"/> </p> <p><label>'._('mensajero instantáneo público, invisible para los demás').':</label><br/> <span class="note">'._('necesario si te conectarás vía Jabber/Google Talk').'</span><br/> <input type="text" autocomplete="off" name="public_info" id="public_info" value="'.$user->public_info.'" /> </p> ';
    if ($user->id == $current_user->user_id) {
        echo ' <p><label>'._('teléfono móvil').':</label><br/> <span class="note">'._('sólo necesario si enviarás notas al nótame vía SMS').'</span><br/> <span class="note">'._('pon el número completo, con código de país: +34123456789').'</span><br/> <input type="text" autocomplete="off" name="phone" id="phone" value="'.$user->phone.'" /> </p> ';
    }
    
    if ($globals['external_user_ads']) {
        echo ' <p><label for="adcode">'._('codigo AdSense').':</label><br/> <span class="note">'._('tu código de usuario de AdSense, del tipo pub-123456789').'</span><br/> <input type="text" autocomplete="off" name="adcode" id="adcode" maxlength="20" value="'.$user->adcode.'" /><br /> <span class="note">'._('canal AdSense (opcional), del tipo 1234567890').'</span><br/> <input type="text" autocomplete="off" name="adchannel" id="adchannel" maxlength="12" value="'.$user->adchannel.'" /> </p> ';
    }
    
    if ($form->avatars_enabled) {
        echo ' <input type="hidden" name="MAX_FILE_SIZE" value="400000" /> <p><label>'._('avatar').':</label><br/> <span class="note">'._('imagen cuadrada de no más de 400 KB, sin transparencias').'</span><br/> <input type="file" class="button" autocomplete="off" name="image" /> ';
        if ($user->avatar > 0) {
            echo ' &nbsp;&nbsp;&nbsp;'._('Eliminar avatar').': <input type="checkbox" name="avatar_delete" value="1"/> ';
        }
        echo ' </p> ';
    }
    echo ' <fieldset><legend>'._('opciones de visualización').'</legend> <p><label>'._('mostrar todos los comentarios').':&nbsp; <input name="comment_pref" type="checkbox" value="1" ';
    if ((($user->comment_pref & 1)) > 0) {
        echo ' checked="true"';
    }
    echo '/> </label></p> </fieldset> <p>'._('introduce la nueva clave para cambiarla -no se cambiará si la dejas en blanco-:').'</p> <p><label for="password">'._('clave').':</label><br /> <input type="password" autocomplete="off" id="password" name="password" size="25" onkeyup="return securePasswordCheck(this.form.password);"/></p> <p><label for="verify">'._('repite la clave').': </label><br /> <input type="password" autocomplete="off" id="verify" name="password2" size="25" onkeyup="checkEqualFields(this.form.password2, this.form.password)"/></p> ';
    if ($form->admin_mode) {
        echo ' <p><label for="verify">'._('estado').': </label><br /> <select name="user_level"> ';
        foreach ($form->user_levels as  $level) {
            echo ' <option value="'.$level.'" ';
            if ($user->level == $level) {
                echo ' selected="selected" ';
            }
            echo '>'.$level.'</option> ';
        }
        echo ' </select> <p><label for="karma">'._('karma').':</label><br/> <input type="text" autocomplete="off" name="karma" id="karma" value="'.$user->karma.'" /> </p> ';
    }
    echo ' <p><input type="submit" name="save_profile" value="'._('actualizar').'" class="button" /></p> </fieldset>  ';
    if ($user->id == $current_user->user_id) {
        echo ' <br/><fieldset><legend>'._('deshabilitar cuenta').'</legend> <p>'._('¡atención! la cuenta será deshabilitada.').'</p> <p class="note">'._('se eliminarán automáticamente los datos personales.').'<br/> '._('las notas serán eliminadas, los envíos y comentarios NO se borrarán.').'</p> <p><label>'._('sí, quiero deshabilitarla').': <input name="disable" type="checkbox" value="1"/> </label></p> <p><input type="submit" name="disabledme" value="'._('deshabilitar cuenta').'" class="button" /></p> </fieldset> ';
    }
    echo ' </form></div> </div>  ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}