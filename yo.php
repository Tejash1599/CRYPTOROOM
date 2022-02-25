<!DOCTYPE html>
<html>
<head>
	<title>sending email with php</title>
</head>
<body>
	<?php
		$to = "xyzsoamedomain.com";
		$subject = "this is subject";

		$msg = "this is message";
		$msg = "<h1>this is handing</h1>";

		$header = "From:abcsomedomain.com";
		$header = "Cc:efgsomedomain.com";
		$header = "MIME-Version: 1.0\r\n";
		$header = "content-type: text/html\r\n";

		$retval = mail($to, $subject, $msg, $header);

		if ($retval == trure) {
			echo "meassage send succesfully...";
		}else{
			echo "message coul not send...";
		}

	?>
</body>
</html>