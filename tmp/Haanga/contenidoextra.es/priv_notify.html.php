<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/priv_notify.html */
function haanga_68d4837ffce9af55a066446b3b17dc66a0790cc3($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div style="text-align: right"> <label for="notify">'._('recibir avisos por email:').'</label> <input name="notify" id="notify" type="checkbox" value="notify_priv" ';
    if ($notify) {
        echo 'checked="true"';
    }
    echo '/> </div> <script type="text/javascript"> function priv_notify() { var value; if (this.checked) value = 1; else value = 0; $.post(base_url + \'backend/pref.php\', {"id": '.$current_user->user_id.', "value": value, "key": this.value}, function (data) { if (data) this.checked = true; else this.checked = false; }, \'json\'); } $("#notify").change(priv_notify); </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}