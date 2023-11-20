<?php
    //Setting cookie
    setcookie('Score', '0', time() + 3600);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Answer Page</title>
		<link rel="stylesheet" href="quetions.css">
	</head>

	<body>
	<?php

		$currentScore = (int)$_COOKIE['Score'];

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
		
		<?php
                if (strcasecmp($_POST["answer"], "ibm") == 0) {
                    echo "<h1> Correct Answer!</h1>";
					$currentScore += 500;

                } else {
                    print "<h1> Sorry, Incorrect Answer...</h1>";
					$currentScore -= 500;
                } 
				setcookie('Score', $currentScore, time() + 3600); 
				echo $currentScore;             
            
			?>
		Answer:<?php print $_POST["answer"] ?>
	</body>
</html> 