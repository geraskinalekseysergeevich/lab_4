<?php
	$xml = simplexml_load_file('db.xml');
	$products = json_decode(json_encode($xml), true);
