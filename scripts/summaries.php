                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               vote_type='$type' and vote_date < '$maxdate' and vote_id > $previous_maxid");
	$maxid = (int) $db->get_var("select vote_id from votes where vote_type='$type' and vote_date < '$maxdate' and vote_id > $previous_maxid order by vote_id desc limit 1");
	$total_count = $previous_count + $count;
	if ($count > 0 && $maxid > 0) {
		echo "Maxid/count: $maxid, $count\n";
		$db->query("REPLACE INTO votes_summary (votes_year, votes_month, votes_type, votes_maxid, votes_count) VALUES ($year, $month, '$type', $maxid, $total_count)");
		//$db->query("delete LOW_PRIORITY from votes where vote_type='$type' and vote_date < '$maxdate' and vote_id <= $maxid");
		$absolute_maxid = max($absolute_maxid, $maxid);
		if ($previous_maxid > 0 || $last_month_maxid > 0) {
			if ($absolute_previous_maxid == 0) $absolute_previous_maxid = max($previous_maxid, $last_month_maxid);
			else $absolute_previous_maxid = min(max($previous_maxid, $last_month_maxid), $absolute_previous_maxid);
			echo "Previous max id: $previous_maxid, $last_month_maxid -> $absolute_previous_maxid\n";
		}

	}
	flush();
}

if (!$absolute_maxid > 0) {
	echo "Nothing to delete, bye\n";
	die;
}
echo "Have to delete up to $absolute_maxid\n";
flush();

if ($absolute_previous_maxid > 0) {
	$start = microtime(true);
	$max_to_delete = 1000;
	$total_deleted = 0;
	$deleted = $max_to_delete;
	while ($deleted >= $max_to_delete) {
		$db->query("delete from votes where vot