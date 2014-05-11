<html>
<head>
<title>Background Colors change based on the day of the week</title>
</head>
<?php 

$today = date("l");
// get's the day in a string.

/*

the switch is a nicer if, elseif, elseif, ...., else function

if($today=='Sunday){
	$bgcolor = "#FEF0C5";
}
elseif($today=='Monday'){
	$bgcolor = '#FFFFFF';
}
.... (cutted out some code)
else {
 #its Saturday.
 $bgcolor = "#F0F4F1";
}

*/
switch ($today) {
	case 'Sunday':
		// Since it is Sunday
		$bgcolor = "#FEF0C5";
	break;

	case 'Monday':
		// Since it is Monday
		$bgcolor = "#FFFFFF";
	break;

	case 'Tuesday':
		// Since it is Tuesday
		$bgcolor = "#FBFFC4";
	break;
			
	case 'Wednesday':
		// Since it is Wednesday
		$bgcolor = "#FFE0DD";
	break;
			
	case 'Thursday':
		// Since it is Thursday
		$bgcolor = "#E6EDFF";
	break;
			
	case 'Friday':
		// Since it is Friday
		$bgcolor = "#E9FFE6";
	break;
			
	default:
		// Since it is not any of the days above it must be Saturday
		$bgcolor = "#F0F4F1";
	break;
}

print("<body style=\"background: {$bgcolor};\">\n"); 

print("$today");

?>
<br>This just changes the color of the screen based on the day of the week
</body>
</html>