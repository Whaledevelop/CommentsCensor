<?php
  function naiveAlgorithmSolution($comment, $banned) {
    $commentLength = strlen($comment);
    foreach($banned as $bannedStr) {
      $bannedStrLength = strlen($bannedStr);
      for ($i = 0; $i <= $commentLength - $bannedStrLength; $i++) {
        $wordFromPosI = substr($comment, $i, $bannedStrLength);
        if ($wordFromPosI === $bannedStr) {
          $comment = str_replace($wordFromPosI, "*", $comment);
        }
      }
    }
    return $comment;
  }
?>