<?php 
  /**
   * Первое, что пришло в голову. Здесь нет регулярных выражений, однако
   * это наверняка не то, что требовалось, поэтому в списке решений есть
   * реализации через различные алгоритмы поиска
   */
  function noAlgorithmSolution(string $string, array $patterns) {
    return str_ireplace($patterns, "*", $string);
  }
?>