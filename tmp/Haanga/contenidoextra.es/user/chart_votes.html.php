<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/user/chart_votes.html */
function haanga_db094c482308379260ecf692ec06f9da7e73195f($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<fieldset><legend>'._('votos/hora últimos 30 días').'</legend> <script src="'.$globals['base_static'].'js/jquery.flot.min.js" type="text/javascript"></script> <div id="flot" style="width:100%;height:150px;"></div> 
<script type="text/javascript"> 
//<!--
$(function () {
	var options = {
		legend: { position: "nw" },
		xaxis: { mode: "time", tickSize: [1, "day"], timeformat: "%d"},
		series: {
			lines: { show: false },
			points: { show: true, radius: 1, fill: false },
			shadowSize: 0,
		},
		grid: { markings: weekendAreas }
	};
	var data = [];
	var placeholder = $("#flot");
	$.getJSON(base_url+"backend/user-votes-history.json.php?id='.$user->id.'", 
		function (json) {
			for (i=0; i<json.length; i++) {
				data.push(json[i]); 
			}
			$.plot(placeholder, data, options);
		});


    function weekendAreas(axes) {
        var markings = [];
        var d = new Date(axes.xaxis.min);
        
        d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
        d.setUTCSeconds(0);
        d.setUTCMinutes(0);
        d.setUTCHours(0);
        var i = d.getTime();
        do {
            
            markings.push({ xaxis: { from: i, to: i + 2 * 24 * 60 * 60 * 1000 } });
            i += 7 * 24 * 60 * 60 * 1000;
        } while (i < axes.xaxis.max);

        return markings;
    }

});
//-->
</script> 
 </fieldset> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}