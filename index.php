<?php
	define("ROOT", __DIR__);
	
	foreach (glob(ROOT."/solutions/*.php") as $solutionFileName) {
		require_once $solutionFileName;
	}

	if (isset($_REQUEST['resetSolution'])) {
		unset($_REQUEST);
	}

	require_once ROOT."/createCommentsObjectsArray.php";
	$commentsObjectsArray = createCommentsObjectsArray();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comments</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/student.css?v1">
</head>
<body>

	<div id = "commentsBlock">
		<div class = "header">COMMENTS </div>	
	
		<?php require_once ROOT."/commentWrapper.php" ?>
	</div>

	<div class = "columnsContainer">
		<div id = "sidebarColumn">
			<?php 
				require_once ROOT."/selectSolutionForm.php";
				require_once ROOT."/productivityTestBlock.php" 
			?>
		</div>
	
		<div id = "codeColumn">
			<?php require_once ROOT."/solutionCode.php" ?>
		</div>
	</div>
	
</body>
</html>