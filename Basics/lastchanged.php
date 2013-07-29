<html>
<head>
<title>Page last updated on month/date/year hour:min PHP Script</title>
</head>
<?php
$last_modified = filemtime("lastchanged.php");
				//fileModifyedtime...

print("Last Modified ");

print(date("m/j/y h:i", $last_modified));
?>
</body>
</html>