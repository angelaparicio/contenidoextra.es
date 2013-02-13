<pre>
<?php 

	date_default_timezone_set('Europe/Madrid');
	
	require_once('../config.php');
	require_once('simplepie.inc');
	
	$blogs = $db->get_results("SELECT blog_rss2 FROM BLOGS");
	
	print_r($blogs);
	
	//$feed_url = $vars['feed_url'];
	
	die('Hola');
	// Parse it
	$feed = new SimplePie();
	if (!empty($feed_url))
	{
		if (get_magic_quotes_gpc())
		{
			$feed_url = stripslashes($feed_url);
		}
		$feed->set_feed_url($feed_url);
		$feed->init();
	}
	$feed->handle_content_type();
	
	
?>
</pre>

<?php if ($feed->data): ?>
	
	<div id="rss_results">
		
	<?php $items = $feed->get_items(0, 10); ?>
	
	<?php foreach($items as $item): ?>
		<div class="rss_element">
			<h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a> <?php echo $item->get_date('j M Y'); ?></h4>
			<?php echo str_replace( array('<br/>', 'Escuchar'), '', $item->get_description()); ?>
		</div>
	<?php endforeach; ?>
	
	</div>
<?php endif; ?>