<?php
	foreach (glob("./solutions/*.php") as $solutionFileName) {
		require_once $solutionFileName;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comments</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/student.css">
</head>
<body>

	<div id = "commentsBlock">
		<div class = "header">COMMENTS </div>	
	
		<?php require_once 'commentWrapper.php' ?>
	</div>

	<div class = "columnsContainer">
		<div id = "sidebarColumn">
			<?php require_once 'selectSolutionForm.php'?>
		</div>
	
		<div id = "codeColumn">
			<?php require_once 'solutionCode.php'?>
		</div>
	</div>
	
</body>
</html>