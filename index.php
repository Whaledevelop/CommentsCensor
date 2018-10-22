<?php
	define("ROOT", __DIR__);

	if (isset($_REQUEST['resetSolution'])) {
		unset($_REQUEST);
	}

	require_once ROOT."/comments/createCommentsObjectsArray.php";
	$commentsObjectsArray = createCommentsObjectsArray();
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
	
		<?php require_once ROOT."/comments/commentWrapper.php" ?>
	</div>

	<div class = "columnsContainer">
		<div id = "sidebarColumn">
			<?php 
				require_once ROOT."/sidebar/selectSolutionFormBlock.php";
				require_once ROOT."/sidebar/productivityTestBlock.php" 
			?>
		</div>
	
		<div id = "mainColumn">
			<?php require_once ROOT."/main/solutionCodeBlock.php" ?>
		</div>
	</div>
	
</body>
</html>