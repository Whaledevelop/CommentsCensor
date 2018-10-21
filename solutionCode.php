<?php 
  if (isset($_REQUEST['isCodeShown']) && isset($_REQUEST['solution'])) :
    $solutionFilePath = "./solutions/".$_REQUEST['solution'].".php";
    $fileCode = htmlspecialchars(file_get_contents($solutionFilePath));
?>

    <div id = "solutionCodeBlock" class = "contentBlock">
      <h5>Код решения</h5> 
      <pre><?= $fileCode ?></pre>
    </div>

<?php endif ?>