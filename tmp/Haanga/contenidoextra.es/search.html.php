<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/search.html */
function haanga_5ede905777754a25d7556ba84d0eb6ff079a9d8b($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div id="newswrap"> <div class="genericform" style="text-align: center; margin-left: 20px; margin-right: 20px"> <fieldset> <form id="thisform"> <input type="search" placeholder="'._('buscar...').'" autofocus name="q" value="'.htmlspecialchars($_REQUEST['words']).'" class="form-full"/> <input class="button" type="submit" value="'._('buscar').'" /> <br /> ';
    foreach ($options as  $id => $values) {
        echo ' <select name="'.$id.'" id="'.$id.'"> ';
        $forcounter0_2  = 0;
        foreach ($values as  $oid => $option) {
            
            if (($forcounter0_2 === $oid OR $forcounter0_2 - 1 === $oid) AND $oid !== '') {
                echo ' <option value="'.$option.'"';
                if ($selected[$id] == $option) {
                    echo ' selected="selected"';
                }
                echo '>'.$option.'</option> ';
            } else {
                echo ' <option value="'.$oid.'"';
                if ($selected[$id] == $oid) {
                    echo ' selected="selected"';
                }
                echo '>'.$option.'</option> ';
            }
            
            $forcounter0_2  = ($forcounter0_2 + 1);
        }
        
        if ($id == 'p') {
            echo ' <option value="">'._('todo el texto').'</option> ';
        }
        
        if ($id == 's' || $id == 'h') {
            echo ' <option value="">'._('todas').'</option> ';
        }
        echo ' </select> ';
    }
    echo ' <div style="margin-top: 8px"> <label for="u">'._('usuario').':</label> <input type="text" name="u" id="u" value="'.htmlspecialchars($_REQUEST['u']).'" size="12" style="font-weight: bold;" class="ac_user"/> <img id="u_avatar" alt="avatar" ';
    if ($_REQUEST['u']) {
        echo ' src="'.$globals['base_url'].'backend/get_avatar.php?user='.htmlspecialchars($_REQUEST['u']).'&amp;size=20" style="vertical-align:text-bottom" ';
    } else {
        echo ' src="'.get_no_avatar_url(20).'" style="vertical-align:text-bottom;visibility:hidden" ';
    }
    echo ' class="avatar" width="20" height="20"/> </div> </form> <script type="text/javascript"> var do_change = function() { var type = $("#w").val(); if (type == "links") { $("#p").attr("disabled", false); $("#s").attr("disabled", false); } else { $("#p").attr("disabled", true); $("#s").attr("disabled", true); } }; $(document).ready(function() { $("#w").change(do_change); do_change(); }); </script> ';
    if ($_REQUEST['q']) {
        echo ' <div style="font-size:85%;margin-top: 5px"> '._('encontrados').': '.$response['rows'].', '._('tiempo total').': '.sprintf('%1.3f', $response['time']).' '._('segundos').' <a href="'.$globals['base_url'].$rss_program.'?'.htmlspecialchars($_SERVER['QUERY_STRING']).'"><img src="'.$globals['base_static'].'img/common/feed-icon-001.png" width="18" height="18" alt="rss2" style="vertical-align:top"/></a> </div> ';
    }
    echo ' </fieldset> </div> ';
    $dummy  = print_result();
    echo ' </div> <script type="text/javascript"> $(".ac_user").user_autocomplete(); </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}