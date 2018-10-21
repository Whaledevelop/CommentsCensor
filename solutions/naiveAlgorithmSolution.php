<?php
  /**
   * При наивном (прямой / линейный) поиске производится проверка каждого символа,
   * является ли он первым символом подстроки-паттерна. Если нет, то происходит сдвиг
   * на один символ. Отличается простотой и относительно низкой скоростью поиска 
   * при небольшом паттерне, однако заметно замедляется в случае, если паттерн большой.
   */
  function naiveAlgorithmSolution(string $string, array $patterns) {
    $n = strlen($string);
    foreach($patterns as $pattern) {
      $m = strlen($pattern);
      for ($i = 0; $i <= $n - $m; $i++) {
        $wordFromPosI = substr($string, $i, $m);
        if (strtolower($wordFromPosI) === $pattern) {
          $string = str_ireplace($wordFromPosI, "*", $string);
        }
      }
    }
    return $string;
  }
?>