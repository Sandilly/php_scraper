<?php
	include_once('./psysh');
	include_once('./simplehtmldom_1_5/simple_html_dom.php');

	function scrape_site($url) {
		$html = file_get_html($url);

		// foreach($html->find('div.blist_tr') as $row)
			// foreach ($row as $eachrow => $field) {
				// eval(\Psy\sh());
				// echo($field);
		
		
	}

	$site = scrape_site('https://openpaymentsdata.cms.gov/dataset/General-Payment-Data-Detailed-Dataset-2014-Reporti/mw4g-bs44');

?>