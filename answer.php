<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
	<?php

		$error_message = "";

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (empty($_POST['answer'])) {
				$error_message = "You didn't submit an answer!";
			} else {
				$data = $_POST["answer"];
			}
		}

		if (!empty($error_message)) {
			echo "<h2>Sorry</h2>";
			echo "<p>" . $error_message . "</p>";
			echo '<a href="javascript:history.back()">Try again?</a>';
			exit;
		}

		?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Answer</dt>
			<dd><?php print $_POST["answer"] ?></dd>

			<dt>Correct</dt>
			<dd><?php
                if (strcasecmp($_POST["answer"], "ibm") == 0) {
                    print "yes";
                } else {
                    print "no";
                }                
            ?></dd>
		</dl>
	</body>
</html> 