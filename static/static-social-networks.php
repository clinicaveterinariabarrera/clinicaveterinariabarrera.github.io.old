<?php /* Static Name: Social Links */ ?>
<ul class="social">
	<?php 	
		$social_networks = array("twitter", "google", "facebook", "feed");
		for($i=0, $array_lenght=count($social_networks); $i<$array_lenght; $i++){
			if(of_get_option($social_networks[$i]) != "") {
				echo '<li><a href="'.of_get_option($social_networks[$i]).'" title="'.$social_networks[$i].'"><img src="'.of_get_option($social_networks[$i]."_icon").'" alt="'.$social_networks[$i].'"></a></li>';
			};
		};
	?>
</ul>