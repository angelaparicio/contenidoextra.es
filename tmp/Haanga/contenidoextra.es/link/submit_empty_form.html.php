<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/link/submit_empty_form.html */
function haanga_d8860d91fc4d29fc09b2e632fd9f6dc535a79c79($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '
<SCRIPT type="text/javascript">
<!--
var img_src1=\''.$globals['base_static'].'img/common/indicator_orange.gif\';
var img1= new Image();
img1.src = img_src1;
//-->
</SCRIPT>
 ';
    if ($errors) {
        echo ' <div> ';
        foreach ($errors as  $title => $messages) {
            echo ' <p class="error">'.$title.'</p> ';
            foreach ($messages as  $m) {
                echo ' <p class="error-text">'.$m.'</p> ';
            }
            
        }
        echo ' </div> ';
    }
    echo ' <div class="genericform"> <fieldset><legend><span class="sign">'._('dirección de la historia').'</span></legend> <form action="submit.php" method="post" id="thisform" onSubmit="$(\'#working\').html(\''._('verificando').'...&nbsp;<img src=\\\'\' + img_src1 + \'\\\'/>\'); return true;"> <p><label for="url">'._('url').':</label><br /> <input type="url" name="url" id="url" placeholder="http://" ';
    if ($link->url) {
        echo ' value="'.htmlspecialchars($link->url).'" ';
    } else {
        echo ' value="http://" ';
    }
    echo ' class="form-full" onblur="if(this.value==\'\') this.value=\'http://\'" onclick="if(this.value==\'http://\') this.value=\'\'" /></p> <input type="hidden" name="phase" value="1" /> <input type="hidden" name="key" value="'.$link->key.'" /> <input type="hidden" name="randkey" value="'.$link->randkey.'" /> <input type="hidden" name="id" value="c_1" /> <p><input class="button" type="submit" value="'._('continuar').' &#187;" />&nbsp;&nbsp;&nbsp;<span id="working">&nbsp;</span></p> </form> </fieldset> </div> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}