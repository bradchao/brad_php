<?php
	$year = 2016;
	/*
	 * $year % 4 == 0 => O
	 * $year % 100 == 0 => X
	 * $year % 400 == 0 => O
	 */
	if ($year % 4 == 0){
		if ($year % 100 == 0){
			if ($year % 400 == 0){
				// XXX 29
				echo '29';
			}else{
				// TODO 28
				echo '29';
			}
		}else{
			// TODO 29
			echo '29';
		}
	}else{
		// FIXME 28
		echo '28';
	}
	
	
?>