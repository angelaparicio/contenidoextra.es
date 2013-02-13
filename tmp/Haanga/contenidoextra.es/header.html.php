<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/header.html */
function haanga_d129ca96ffc1375cdb220c17793c10cd8aef577f($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!DOCTYPE html> <html lang="'.$globals['lang'].'"> <head> <meta charset="utf-8" /> <meta name="ROBOTS" content="NOARCHIVE" /> <meta name="generator" content="meneame" /> ';
    if ($globals['noindex']) {
        echo ' <meta name="robots" content="noindex,follow" /> ';
    }
    
    if ($globals['tags']) {
        echo ' <meta name="keywords" content="'.$globals['tags'].'" /> ';
    }
    
    if ($globals['description']) {
        echo ' <meta name="description" content="'.$globals['description'].'" /> ';
    }
    echo '  <title>'.$title.'</title>  ';
    if ($globals['fancybox_enabled']) {
        echo ' <link rel="stylesheet" href="'.$globals['base_static'].'js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" /> ';
    }
    
    if ($globals['css_main']) {
        echo ' <link rel="stylesheet" type="text/css" media="all" href="'.$globals['base_static'].$globals['css_main'].'"/> ';
    }
    
    if ($globals['css_color']) {
        echo ' <link rel="stylesheet" type="text/css" media="all" href="'.$globals['base_static'].$globals['css_color'].'"/> ';
    }
    
    foreach ($globals['extra_css'] as  $css) {
        echo ' <link rel="stylesheet" type="text/css" media="all" href="'.$globals['base_static'].'css/'.$css.'"/> ';
    }
    echo '  ';
    if ($globals['mobile']) {
        echo ' <link rel="stylesheet" type="text/css" media="all" href="'.$globals['base_static'].'css/handheld.css"/> ';
    } else {
        echo ' <style type="text/css"> @import url('.$globals['base_static'].'css/handheld.css) print,tv,handheld,screen and (max-device-width: 680px); </style> ';
    }
    echo '  ';
    if ($globals['link']) {
        echo ' <link rel="pingback" href="http://'.$globals['server_name'].$globals['base_url'].'xmlrpc.php"/>  ';
    }
    echo ' <link rel="search" type="application/opensearchdescription+xml" title="'._('búsqueda').'" href="http://'.$globals['server_name'].$globals['base_url'].'opensearch_plugin.php"/> <link rel="alternate" type="application/rss+xml" title="'._('publicadas').'" href="http://'.$globals['server_name'].$globals['base_url'].'rss2.php" /> <link rel="alternate" type="application/rss+xml" title="'._('pendientes').'" href="http://'.$globals['server_name'].$globals['base_url'].'rss2.php?status=queued" /> <link rel="alternate" type="application/rss+xml" title="'._('comentarios').'" href="http://'.$globals['server_name'].$globals['base_url'].'comments_rss2.php" /> ';
    if ($globals['favicon']) {
        echo ' <link rel="shortcut icon" href="'.$globals['base_static'].$globals['favicon'].'" type="image/x-icon"/> <link rel="icon" href="'.$globals['base_static'].$globals['favicon'].'" type="image/x-icon"/> ';
    } else {
        echo ' <link rel="shortcut icon" href="'.$globals['base_static'].'img/favicons/favicon4.ico" type="image/x-icon"/> <link rel="icon" href="'.$globals['base_static'].'img/favicons/favicon4.ico" type="image/x-icon"/> ';
    }
    echo ' <link rel="apple-touch-icon" href="'.$globals['base_static'].'img/favicons/apple-touch-icon.png"/> <link rel="license" href="http://creativecommons.org/licenses/by/3.0/es/"/>  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script> <script src="'.$globals['base_url'].'js/'.$globals['js_main'].'" type="text/javascript" charset="utf-8"></script> ';
    foreach ($globals['extra_js'] as  $js) {
        
        if (substr($js, 0, 4) == 'http') {
            echo ' <script src="'.$js.'" type="text/javascript"></script> ';
        } else {
            echo ' <script src="'.$globals['base_static'].'js/'.$js.'" type="text/javascript"></script> ';
        }
        
    }
    
    if ($globals['extra_js_text']) {
        echo ' <script type="text/javascript"> '.$globals['extra_js_text'].' </script> ';
    }
    echo ' <script type="text/javascript"> if(top.location != self.location)top.location = self.location; base_key="'.$globals['security_key'].'"; ';
    if ($globals['link']) {
        echo 'link_id = '.$globals['link']->id;
    }
    echo '; user_id = '.$current_user->user_id.'; user_login = \''.$current_user->user_login.'\'; mobile_client = '.$globals['mobile'].'; </script> ';
    if ($globals['extra_head']) {
        echo ' '.$globals['extra_head'].' ';
    }
    echo ' <script type="text/javascript"> var _gaq = _gaq || []; _gaq.push([\'_setAccount\', \'UA-34355582-1\']); _gaq.push([\'_trackPageview\']); (function() { var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true; ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\'; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s); })(); </script> </head> <body id="'.$id.'" '.$globals['body_args'].'> <a name="Top"></a> <div id="headerwrap"> <div id="header"> <a href="'.$globals['base_url'].'" title="'._('inicio').'" id="logo">'._('contenido Extra').'</a> ';
    if ($globals['ads_branding']) {
        echo ' '.Haanga::Safe_Load('private/ad-sponsored.html', $vars, TRUE, Array()).' ';
    }
    echo ' <ul class="headtools"> <li class="searchbox"> <form action="'.$globals['base_url'].'search.php" method="get" name="top_search"> <img src="'.$globals['base_static'].'img/common/search-left-04.png" width="6" height="22" alt=""/> ';
    if ($globals['q']) {
        echo ' <input type="search" name="q" value="'.htmlspecialchars($globals['q']).'" /> ';
    } else {
        echo ' <input name="q" type="text" value="'._('buscar').'..." onblur="if(this.value==\'\') this.value=\''._('buscar').'...\';" onfocus="if(this.value==\''._('buscar').'...\') this.value=\'\';" /> ';
    }
    echo ' <a href="javascript:document.top_search.submit()"><img class="searchIcon" alt="'._('buscar').'" src="'.$globals['base_static'].'img/common/search-04.png" id="submit_image" width="28" height="22"/></a> ';
    if ($globals['search_options']) {
        
        foreach ($globals['search_options'] as  $name => $value) {
            echo ' <input type="hidden" name="'.$name.'" value="'.$value.'"/> ';
        }
        
    }
    echo ' </form> </li> ';
    if ($current_user->authenticated) {
        echo ' <li><a href="'.get_user_uri($current_user->user_login).'" ';
        if ($globals['greetings']) {
            echo ' title="'._('contenido Extra te saluda en').' '.$globals['greetings'][$greeting].'" ';
        }
        echo '> '.$greeting.'&nbsp;'.$current_user->user_login.'&nbsp;<img class="tooltip u:'.$current_user->user_id.'" src="'.get_avatar_url($current_user->user_id, $current_user->user_avatar, 20).'" width="20" height="20" alt="'.$current_user->user_login.'"/></a></li> <li><a href="'.$globals['base_url'].'login.php?op=logout&amp;return='.urlencode($globals['uri']).'">'._('cerrar sesión').' <img src="'.$globals['base_static'].'img/common/logout-bt-02.png" alt="logout" title="logout" width="22" height="16" /></a></li> ';
    } else {
        echo ' <li><a href="'.$globals['base_url'].'register.php"> '._('registrarse').' <img src="'.$globals['base_static'].'img/common/register-bt-02.png" alt="register" title="register" width="16" height="18" /></a></li> <li><a href="'.$globals['base_url'].'login.php?return='.urlencode($globals['uri']).'">'._('login').' <img src="'.$globals['base_static'].'img/common/login-bt-02.png" alt="login" title="login" width="22" height="16" /></a></li> ';
    }
    echo ' </ul></div> <div id="naviwrap"> <ul id="navigation"> <li><a href="'.$globals['base_url'].'submit.php">'._('enviar historia').'</a></li> <li><a href="'.$globals['base_url'].'shakeit.php">'._('pendientes').'</a></li> <!--<li><a href="'.$globals['base_url'].'sneak.php">'._('fisgona').'</a></li>--> <li><a href="javascript:fancybox_gallery(\'all\');">'._('galería').'</a></li> <li><a href="'.$globals['base_url'].'notame/">'._('charla').'</a></li> </ul> <ul class="headtools"> <li><a href="http://meneame.wikispaces.com/Comenzando"><img src="'.$globals['base_static'].'img/common/help-bt-02.png" alt="help" title="'._('ayuda').'" width="13" height="16" /></a>&nbsp;</li> ';
    if ($current_user->user_id > 0) {
        
        if ($current_user->admin) {
            echo ' <li><a href="'.$globals['base_url'].'admin/bans.php">admin <img src="'.$globals['base_static'].'img/common/tools-bt-02.png" alt="tools button" title="'._('administración').'" width="16" height="16" /> </a></li> ';
        }
        
        if ($current_user->private_messages || $globals['show_conv_counters']) {
            echo ' <li><a href="'.post_get_base_url('_priv').'" title="';
            if (!$globals['show_conv_counters']) {
                echo $current_user->private_messages;
            }
            echo ' '._('privados nuevos').'"><span id="p_mess_c">'.$current_user->private_messages.'</span>&nbsp;<img src="'.$globals['base_static'].'img/common/icon_message-01.png" alt="" width="19" height="19"/></a></li> ';
        }
        
        if ($current_user->posts_answers || $globals['show_conv_counters']) {
            echo ' <li><a href="'.post_get_base_url($current_user->user_login).'/_conversation" title="';
            if (!$globals['show_conv_counters']) {
                echo $current_user->posts_answers;
            }
            echo ' '._('respuestas a notas').'"><span id="p_conv_c">'.$current_user->posts_answers.'</span>&nbsp;<img src="'.$globals['base_static'].'img/common/icon_post-01.png" alt="" width="19" height="19"/></a></li> ';
        }
        
        if ($current_user->comments_answers || $globals['show_conv_counters']) {
            echo ' <li><a href="'.get_user_uri($current_user->user_login, 'conversation').'" title="';
            if (!$globals['show_conv_counters']) {
                echo $current_user->comments_answers;
            }
            echo ' '._('respuestas a comentarios').'"><span id="c_conv_c">'.$current_user->comments_answers.'</span>&nbsp;<img src="'.$globals['base_static'].'img/common/icon_comment-01.png" alt="" width="19" height="19"/></a></li> ';
        }
        
        if (!$globals['mobile'] AND ($current_user->new_friends || $globals['show_conv_counters'])) {
            echo ' <li><a href="'.get_user_uri($current_user->user_login, 'friends_new').'" title="';
            if (!$globals['show_conv_counters']) {
                echo $current_user->new_friends;
            }
            echo ' '._('nuevos amigos').'"><span id="n_friends_c">'.$current_user->new_friends.'</span>&nbsp;<img src="'.$globals['base_static'].'img/common/icon_friend_other_00.png" alt="" width="18" height="16"/></a></li> ';
        }
        
    }
    echo ' </ul> </div> </div> <div id="wrap"> ';
    $foo  = do_banner_top();
    echo ' <div id="container"> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}