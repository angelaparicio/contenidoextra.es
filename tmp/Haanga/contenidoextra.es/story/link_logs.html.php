<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/story/link_logs.html */
function haanga_a988cf6bd22dfd2ea20cfaa280dbe7cd3e7be1e2($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<div class="voters" id="voters"> <fieldset><legend>'._('registro de eventos de la noticia').'</legend> <div id="voters-container"> ';
    if ($logs) {
        
        foreach ($logs as  $log) {
            echo ' <div style="width:100%; display: block; clear: both; border-bottom: 1px solid #FFE2C5;"> <div style="width:30%; float: left;padding: 4px 0 4px 0;">'.get_date_time($log->ts).'</div> <div style="width:24%; float: left;padding: 4px 0 4px 0;"><strong>'.$log->log_type.'</strong></div> <div style="width:45%; float: left;padding: 4px 0 4px 0;"> ';
            if ($link->author != $log->user_id AND ($log->user_level == 'admin' OR $log->user_level == 'god')) {
                echo '  <img src="'.get_no_avatar_url(20).'" width="20" height="20" alt=""/>&nbsp;'._('admin').' ';
                if ($current_user->admin) {
                    echo '&nbsp;('.$log->user_login.')';
                }
                
            } else {
                echo ' <a href="'.get_user_uri($log->user_login).'" title="'.$log->date.'"><img src="'.get_avatar_url($log->log_user_id, $log->user_avatar, 20).'" width="20" height="20" alt="'.$log->user_login.'"/>&nbsp;'.$log->user_login.'</a> ';
            }
            
            if ($log->annotation) {
                echo ' [<a class="fancybox" href="'.$globals['base_url'].'backend/annotation_unserialize.php?id=log-'.$log->log_id.'" title="'._('contenido previo').'">'._('ver contenido previo').'</a>] ';
            }
            echo ' </div> </div> ';
        }
        
    } else {
        echo ' '._('no hay registros').' ';
    }
    echo ' </div> </fieldset> </div> ';
    if ($annotations) {
        echo ' <script type="text/javascript"> var k_coef = new Array(); var k_old = new Array(); var k_annotation = new Array(); ';
        foreach ($annotations as  $log) {
            echo ' k_coef['.$log['time'].'] = '.$log['coef'].'; k_old['.$log['time'].'] = parseInt('.$log['old_karma'].'); if (typeof k_annotation['.$log['time'].'] == \'undefined\') k_annotation['.$log['time'].'] = \''.$log['annotation'].'\'; else k_annotation['.$log['time'].'] = k_annotation['.$log['time'].'] + \''.$log['annotation'].'\'; ';
        }
        echo ' //--> </script> <div class="voters"> <fieldset><legend>'._('registro de cálculos de karma').'</legend> <script src="'.$globals['base_static'].'js/jquery.flot.min.js" type="text/javascript"> </script> <div id="flot" style="width:100%;height:250px;"></div> 
	<script type="text/javascript">
	//<!--
	$(function () {
		var options = {
			lines: { show: true },
			points: { show: true },
			legend: { position: "nw" },
			xaxis: { mode: "time", minTickSize: [1, "hour"], },
			//yaxis: { min: 0 },
			//y2axis: { min: 0 },
			grid: { hoverable: true },
		};
		var data = [];
		var placeholder = $("#flot");
		$.getJSON(base_url+"backend/karma-story.json.php?id='.$link->id.'",
			function (json) {
				for (i=0; i<json.length; i++) {
					data.push(json[i]);
				}
				$.plot(placeholder, data, options);
			});

		function showTooltip(x, y, contents) {
			$(\'<div id="tooltip">\' + contents + \'</div>\').css( {
				position: \'absolute\',
				display: \'none\',
				top: y,
				left: x + 5,
				border: \'1px solid #e2d3b0\',
				padding: \'3px\',
				\'background-color\': \'#FFEEC7\',
				opacity: 0.85,
				\'text-align\': \'left\',
				\'font-size\': \'85%\',
			}).appendTo("body").fadeIn(200);
		}

		var previousPoint = null;
		$("#flot").bind("plothover", function (event, pos, item) {
			if (item) {
				if (previousPoint != item.datapoint) {
					previousPoint = item.datapoint;
					var txt = \'<strong>\'+item.series.label+\':</strong> \' + item.datapoint[1];
					if (item.series.label == \'karma\') {
						var ktime = item.datapoint[0]/1000; // to epoch time
						if (k_old[ktime] != 0) {
							if (item.datapoint[1] > k_old[ktime]) txt = txt + \'&nbsp;<img src="\'+base_static + \'img/common/vote-up02.png"/>\';
							else if (item.datapoint[1] < k_old[ktime]) txt = txt + \'&nbsp;<img src="\'+base_static + \'img/common/vote-down02.png"/>\';
							txt = txt + \'<br/><strong>previous karma:</strong> \'+k_old[ktime];
						}
						if (k_coef[ktime] != 0) txt = txt + \'<br/><strong>coefficient:</strong> \'+k_coef[ktime];
						if (k_annotation[ktime] != \'\') txt = txt + \'<br><strong>notes</strong><br/>\'+k_annotation[ktime];
					}
					$("#tooltip").remove();
					showTooltip(item.pageX, item.pageY, txt);
				}
			} else {
				$("#tooltip").remove();
				previousPoint = null;
			}
		})


		});
	//-->
	</script>
	 </fieldset> </div> ';
    }
    
    if ($return == TRUE) {
        return ob_get_clean();
    }
}