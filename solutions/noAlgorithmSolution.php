<?php 
  function noAlgorithmSolution(string $string, array $patterns) {
    return str_ireplace($patterns, "*", $string);
  }
?>