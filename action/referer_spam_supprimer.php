<?php
    
    if (!defined("_ECRIRE_INC_VERSION")) {
	    return;
    }
    
    function action_referer_spam_supprimer($p,$arg) {
	    include_spip('base/abstract_sql');

	    $url =$_GET['url'];

        if (sql_countsel("spip_referer_spam", "referer LIKE '%$url%'"))
            sql_delete("spip_referer_spam", "referer LIKE '%$url%'");
            
    }
?>
