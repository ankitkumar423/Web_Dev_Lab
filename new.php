<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
</head>
<body>
	<h1>writing my php code</h1>
	<?php
		$myfile = fopen("input.txt","r");
		$txt = fread($myfile,filesize('input.txt'));
		$out = fopen("output.txt","w");
		$ans = "";
		for($i=0;$i<strlen($txt);$i++)
		{
			$char = strtolower($txt[$i]);
			if($char=='a' || $char=='e' || $char=='i' || $char=='o' || $char=='u')
			{
				$ans = $ans . $char;
			}
		}

		fwrite($out, $ans);

		echo 'success';
		fclose($myfile);
		fclose($out);

	?>
</body>
</html>