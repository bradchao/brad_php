<?php
date_default_timezone_set('Asia/Taipei');
$result = $x = $y = '';
if ( isset($_REQUEST['x']) ){
	$x = $_REQUEST['x']; $y = $_REQUEST['y'];
	$result = $x + $y;
}

?>
<form method='get'>
	<input type='text' name='x' 
		value='<?php echo $x; ?>' />
	+
	<input type='text' name='y' 
		value='<?php echo $y; ?>' />
	<input type='submit' value='=' />
	<?php echo $result; ?>
</form>