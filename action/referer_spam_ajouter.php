<?php

    if (!defined("_ECRIRE_INC_VERSION")) {
	    return;
    }

    function action_referer_spam_ajouter($p,$arg) {
	    include_spip('base/abstract_sql');

	    $url = $_GET['url'];

        // if (sql_countsel("spip_referers", "referer LIKE '%$url%'")) 
        //     sql_delete("spip_referers", "referer LIKE '%$url%'");
        //
        // if (sql_countsel("spip_referers_articles", "referer LIKE '%$url%'"))
        //     sql_delete("spip_referers_articles", "referer LIKE '%$url%'");

        if (!sql_countsel("spip_referer_spam", "referer LIKE '%$url%'"))
            sql_insertq('spip_referer_spam',
                array(
                    'date' => date('Y-m-d H:i:s'),
                    'referer' => $url
                )
            );

    }
?>
