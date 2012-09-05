<?php
	$gr = '<div style="height:30px;width:30px;background-color:green;float:left;margin-left:5px;border:solid 1px black;">';
	$wh = '<div style="height:30px;width:30px;background-color:yellow;float:left;margin-left:5px;border:solid 1px black;">';
	$alp = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",);
	$alpctr = 0;
	$ciden = 0;
	for ($i=1;$i<9;$i++) {
		for ($j=1;$j<9;$j++) {
			if($ciden == 0 && $j != 8) {
				echo $gr.$alp[$alpctr].'</div>';
				$ciden = 1;
					if($alpctr == 25) {
						$alpctr = 0;
					}
					else {
						$alpctr++;
					}
			}
			elseif($ciden == 1 && $j != 8) {
				echo $wh.$alp[$alpctr].'</div>';
				$ciden = 0;
					if($alpctr == 25) {
						$alpctr = 0;
					}
					else {
						$alpctr++;
					}
			}
			elseif ($ciden == 0 && $j == 8) {
				echo $gr.$alp[$alpctr].'</div>';
					if($alpctr == 25) {
						$alpctr = 0;
					}
					else {
						$alpctr++;
					}
				echo '<br><br>';
			}
			elseif ($ciden == 1 && $j == 8) {
				echo $wh.$alp[$alpctr].'</div>';
					if($alpctr == 25) {
						$alpctr = 0;
					}
					else {
						$alpctr++;
					}
				echo '<br><br>';
			}
		}
	}
?>
