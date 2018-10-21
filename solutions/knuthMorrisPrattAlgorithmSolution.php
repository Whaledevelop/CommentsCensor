<?php
  function prefixFunction($pattern) {
    $pi = [0]; 
    $j = 0; 

    for($i = 1; $i < strlen($pattern); ) {
      if ($pattern[$i] === $pattern[$j]) {
        $pi[$i] = $j + 1;       
        $j++;
        $i++;
      } else if ($j === 0) {
        $pi[$i] = 0;
        $i++;
      } else {
        $j = $pi[$j - 1]; 
      }
    } 
    return $pi;
  }

  function knuthMorrisPrattAlgorithmSolution($comment, $banned) {
    $m = strlen($comment);

    foreach ($banned as $pattern) {
      $k = 0;
      $l = 0; 
      
      $n = strlen($pattern);
      while ($k < $m) {
        if ($comment[$k] === $pattern[$l]) {
          $k++;
          $l++;
          if ($l === $n) {
            $comment = substr_replace($comment, "*", $k - $l, $l);
          }
        } else if ($l === 0) {
          $k++;
        } else {
          $l = prefixFunction($pattern)[$l-1];
        }
      }
    }  
    return $comment;  
  }
?>