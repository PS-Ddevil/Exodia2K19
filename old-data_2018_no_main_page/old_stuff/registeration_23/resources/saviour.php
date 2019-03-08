<?php
	
	function saviour($str){
		return htmlentities(trim($str), ENT_QUOTES, 'UTF-8');
	}
?>