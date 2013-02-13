<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/link/submit2.html */
function haanga_d39984985250d312cff36a268ee93074128a7f55($vars, $return=FALSE, $blocks=array())
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
        echo ' '.Haanga::Load('link/errors.html', $vars, TRUE, $blocks).' <form class="genericform" action=""> <input class="button" type="button" onclick="window.history.go(-1)" value="&#171; '._('retroceder').'" /> </form> ';
    } else {
        if ($link) {
            echo ' <h2>'._('envío de una nueva historia: paso 3 de 3').'</h2> <div class="genericform"> <form action="submit.php" method="post" class="genericform" onSubmit="$(\'#working\') %}html(\''._('enviando trackbacks').'...&nbsp;<img src=\\\'\'+ img_src1 +\'\\\'/>\'); return true;"> <fieldset><legend><span class="sign">'._('detalles de la historia').'</span></legend> <div class="genericformtxt"><label>'._('ATENCIÓN: esto es sólo una muestra. Puedes retroceder o enviar a la cola y finalizar').'</label>&nbsp;&nbsp;</div> <div class="formnotice"> ';
            $dummy  = $link->print_summary('preview');
            echo ' </div> <input type="hidden" name="phase" value="3" /> <input type="hidden" name="key" value="'.$link->key.'" /> <input type="hidden" name="randkey" value="'.$link->randkey.'" /> <input type="hidden" name="timestamp" value="'.$globals['now'].'" /> <input type="hidden" name="id" value="'.$link->id.'" /> <input type="hidden" name="trackback" value="'.htmlspecialchars($_POST['trackback']).'" /> <br style="clear: both;" /><br style="clear: both;" /> <input class="button" type="button" onclick="window.history.go(-1)" value="&#171; '._('retroceder').'"/>&nbsp;&nbsp; <input class="button" type="submit" value="'._('enviar a la cola y finalizar').' &#187;"/>&nbsp;&nbsp;&nbsp;<span id="working">&nbsp;</span> </fieldset> </form> ';
            if ($related) {
                echo ' '.Haanga::Load('story/related.html', $vars, TRUE, $blocks).' ';
            }
            echo ' </div> ';
        }
        
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}