<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/private/stats.html */
function haanga_91795956bbcd438bc3f686731b4716aaa7843e5e($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!-- Start of StatCounter Code for Default Guide --> <script type="text/javascript"> var sc_project=8592741; var sc_invisible=1; var sc_security="c3801cdc"; var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www."); document.write("<sc"+"ript type=\'text/javascript\' src=\'" + scJsHost+ "statcounter.com/counter/counter_xhtml.js\'></"+"script>"); </script> <noscript><div class="statcounter"><a title="click tracking" href="http://statcounter.com/" class="statcounter"><img class="statcounter" src="http://c.statcounter.com/8592741/0/c3801cdc/1/" alt="click tracking" /></a></div></noscript> <!-- End of StatCounter Code for Default Guide -->';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}