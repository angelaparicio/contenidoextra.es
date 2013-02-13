<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/user/profile.html */
function haanga_cd557482724e3b46d608fceca504a8f2ca3cef60($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<ul class="subheader" style="margin-bottom: 20px"> ';
    if ($rss) {
        echo ' <li class="icon"> <a href="'.$globals['base_url'].$rss.'" title="'.$rss_title.'" rel="rss"> <img src="'.$globals['base_static'].'img/common/feed-icon-001.png" width="18" height="18" alt="rss2"/> </a> </li> ';
    } else {
        echo ' <li class="icon"> <img src="'.$globals['base_static'].'img/common/feed-icon-gy-001.png" width="18" height="18" alt=""/> </li> ';
    }
    
    if (is_array($options)) {
        
        $forcounter0_1  = 0;
        foreach ($options as  $text => $turl) {
            
            if ($forcounter0_1 == $selected) {
                echo ' <li class="selected"> ';
            } else {
                echo ' <li> ';
            }
            echo ' <a href="'.$turl.'">'.$text.'</a> </li> ';
            $forcounter0_1  = ($forcounter0_1 + 1);
        }
        
    } else {
        echo ' <h1>'.$options.'</h1> ';
    }
    echo ' </ul>  ';
    if ($post) {
        echo ' <div id="addpost"></div> <ol class="comments-list" id="last_post"> <li> '.$post->print_summary().' </li> </ol> ';
    }
    echo ' <fieldset> <legend>'._('información personal').'</legend> <div style="float:right;text-align:center"> <img id="avatar" class="avatar" src="'.get_avatar_url($user->id, $user->avatar, 80).'" width="80" height="80" alt="'.$user->username.'" title="avatar" /> ';
    if ($current_user->user_id == $user->id) {
        echo ' <div id="avatar_indicator" style="margin:0;padding:0;height:12px"></div> <button id="avatar_upload" style="margin:0" title="'._('imagen cuadrada de no más de 400 KB, sin transparencias').'">'._('cambiar avatar').'</button> 
<script type="text/javascript"> 
//<![CDATA[
$(document).ready(function() {
	new AjaxUpload("avatar_upload", {name: "image",
		action: base_url+"backend/avatar_upload.php",
		responseType: "json",
		onChange: function () {avatar_preupload()},
		onComplete: function (f, r) {avatar_uploaded(f, r)}
	});
});

function avatar_preupload() {
	$(\'#avatar_upload\').attr("disabled", true);
	$(\'#avatar_indicator\').html(\'<img src="\'+base_static+\'img/common/indicator_horizontal.gif"/>\');
}
 
function avatar_uploaded(file, response) {
	if (response.error) {
		alert(response.error);
	} 
	if (response.avatar_url.length > 0) { 
		$("#avatar").attr("src",response.avatar_url);
	}
	$(\'#avatar_indicator\').html(\'\');
	$(\'#avatar_upload\').attr("disabled", false);
}
 
function select_meta(input, meta) {
	if (input.checked) new_value = true;
	else new_value = false;
	meta_id = \'#meta-\'+meta;
	$(meta_id+\' input\').attr({checked: new_value});
	return false;
}
//]]>
</script>
  ';
    }
    
    if ($user->total_images) {
        echo ' <br/><br/> <button type="button" onclick="fancybox_gallery(\'all\', '.$user->id.')">'._('imágenes').' ['.$user->total_images.']</button> ';
    }
    echo ' </div> <div style="width:140px; float:left;"> ';
    if ($globals['do_geo']) {
        echo ' <div id="map" class="thumbnail" style="width:130px; height:130px; overflow:hidden; float:left"></div> ';
        if ($geodiv) {
            
            $distance  = geo_distance($my_latlng, $globals['latlng']);
            echo ' <p style="color: #FF9400; font-size: 90%">'.$user->username.' '._('está a').'<strong>'.intval($distance).' kms</strong></p> ';
        }
        
    }
    echo ' </div> <div style="float:left;min-width:65%"> <dl> ';
    if ($user->username) {
        echo ' <dt>'._('usuario').':</dt> <dd> ';
        if ($url) {
            echo ' <a href="'.$url.'" '.$nofollow.'>'.$user->username.'</a> ';
        } else {
            echo ' '.$user->username.' ';
        }
        echo ' '.$user->print_medals().' ';
        if ($current_user->admin AND $nclones) {
            echo ' (<a class="fancybox" href="'.$globals['base_url'].'backend/ip_clones.php?id='.$user->id.'" title="'._('clones').'">'._('clones').'</a><sup>'.$nclones.'</sup>) ';
        }
        
        if ($friend_icon) {
            echo ' &nbsp;<a id="friend-'.$current_user->user_id.'-'.$user->id.'" href="javascript:get_votes(\'get_friend.php\',\''.$current_user->user_id.'\',\'friend-'.$current_user->user_id.'-'.$user->id.'\',0,\''.$user->id.'\')">'.$friend_icon.'</a> ';
        }
        
        if ($user->id == $current_user->user_id OR $current_user->admin) {
            echo ' ('._('id').': <em>'.$user->id.'</em>, <em>'.$user->level.'</em>) ';
        }
        
        if ($current_user->admin) {
            echo ' (<em>'.$user->username_register.'</em>) ';
        }
        
        if ($user->friendship > 0) {
            echo ' <button style="font-size:85%;padding: 0px 1px;border: 0" type="button" onClick="javascript:priv_new('.$user->id.')" >'._('enviar privado').'</button> ';
        }
        echo ' </dd> ';
    }
    
    if ($user->names) {
        echo ' <dt>'._('nombre').':</dt><dd>'.$user->names.'</dd> ';
    }
    
    if ($show_email) {
        echo ' <dt>'._('IM/email').':</dt><dd> '.$user->public_info.'</dd> ';
    }
    
    if ($url) {
        echo ' <dt>'._('sitio web').'</dt><dd><a href="'.$url.'" '.$nofollow.'>'.$url.'</a></dd> ';
    }
    echo ' <dt>'._('desde').':</dt><dd>'.get_date_time($user->date).'</dd> ';
    if ($current_user->user_level == 'god') {
        echo ' <dt>'._('email').':</dt><dd>'.$user->email.' (<em>'.$user->email_register.'</em>)</dd> ';
    }
    
    if ($user->id == $current_user->user_id OR $current_user->user_level == 'god') {
        echo ' <dt>'._('clave API').':</dt> <dd><a class="fancybox" href="'.$globals['base_url'].'backend/get_user_api_key.php?id='.$user->id.'" title="API key">'._('leer clave API').'</a> ('._('no la divulgues').')</dd> ';
        if ($user->adcode) {
            echo ' <dt>'._('Código AdSense').':</dt><dd>'.$user->adcode.'&nbsp;</dd> <dt>'._('Canal AdSense').':</dt><dd>'.$user->adchannel.'&nbsp;</dd> ';
        }
        
    }
    echo ' <dt>'._('karma').':</dt><dd>'.$user->karma.' ';
    if ($user->id == $current_user->user_id OR $current_user->user_level == 'god') {
        echo ' (<a class="fancybox" href="'.$globals['base_url'].'backend/get_karma_numbers.php?id='.$user->id.'" title="'._('cálculo del karma').'">'._('detalle cálculo').'</a>) ';
    }
    echo ' </dd> <dt>'._('ranking').':</dt><dd>#'.$user->ranking().'</dd> <dt>'._('noticias enviadas').':</dt><dd>'.$user->total_links.'</dd> ';
    if ($entropy) {
        echo ' <dt><em>'._('entropía').'</em>:</dt><dd>'.$entropy.'%</dd> ';
    }
    echo ' <dt>'._('noticias publicadas').':</dt><dd>'.$user->published_links.' ('.$percent.'%)</dd> <dt>'._('comentarios').':</dt><dd>'.$user->total_comments.'</dd> <dt>'._('notas').':</dt><dd>'.$user->total_posts.'</dd> <dt>'._('número de votos').':</dt><dd>'.$user->total_votes.'</dd> ';
    if ($user->id == $current_user->user_id) {
        echo ' <div style="margin-top: 20px" align="center"> ';
        $foo  = print_oauth_icons($_REQUEST['return']);
        echo ' </div> ';
    }
    echo ' </dl> </div> </fieldset> ';
    if ($geo_form) {
        echo ' <div class="geoform"> '.$geo_form.' </div> ';
    }
    
    if ($user->total_votes > 20 AND ($current_user->user_id == $user->id OR $current_user->admin)) {
        echo ' '.Haanga::Load('user/chart_votes.html', $vars, TRUE, $blocks).' ';
    }
    
    if ($addresses) {
        echo ' <fieldset><legend>'._('últimas direcciones IP').'</legend> ';
        foreach ($addresses as  $address) {
            echo ' <p>'.$address.'</p> ';
        }
        echo ' </fieldset> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}