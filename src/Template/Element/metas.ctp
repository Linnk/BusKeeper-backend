<?php 
if(!function_exists('recursive_metas')){
	function recursive_metas($metas) {
		foreach($metas as $name => $content) {
			if(is_array($content)):
				recursive_metas($content);
			else:
				echo "<meta name=\"$name\" content=\"$content\">";
				echo "<meta name=\"al:$name\" content=\"$content\">";
				echo "<meta name=\"og:$name\" content=\"$content\">";
				echo "<meta name=\"twitter:$name\" content=\"$content\">";
				echo "<meta itemprop=\"$name\" content=\"$content\">";
			endif;
		}
	}	
}
recursive_metas($metas);
?>