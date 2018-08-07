<?php
foreach(explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']) as $each) {
	$locale = explode(';', $each)[0];
	if(file_exists(THEMEPATH . $locale . '/index.php')) {
		header('Location: ' . $_Oli->getUrlParam(0) . $locale . '/');
		exit;
	}
}

?>