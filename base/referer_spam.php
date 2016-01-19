<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function referer_spam_declarer_tables_auxiliaires($tables_auxiliaires) {
	$spip_referer_spam = array(
		"date" => "DATE NOT NULL",
		"referer" => "VARCHAR (255)",
	);

	$spip_referer_spam_key = array(
		"PRIMARY KEY" => "referer"
	);
	$tables_auxiliaires['spip_referer_spam'] = array(
		'field' => &$spip_referer_spam,
		'key' => &$spip_referer_spam_key
	);

	return $tables_auxiliaires;
}

?>
