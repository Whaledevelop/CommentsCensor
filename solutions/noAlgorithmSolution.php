<?php 
  function noAlgorithmSolution($comment, $banned) {
    return str_replace($banned, "*", $comment);
  }
?>