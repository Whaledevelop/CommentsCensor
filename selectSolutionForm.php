<?php
  $solutionsOptions = [
    [
      "value" => "noAlgorithmSolution", 
      "label" => "Без алгоритма"
    ],
    [
      "value" => "naiveAlgorithmSolution", 
      "label" => "Наивный (простой / линейный) алгоритм"
    ],
    [
      "value" => "knuthMorrisPrattAlgorithmSolution", 
      "label" => "Алгоритм Кнута-Морриса-Пратта"
    ]
  ];
?>

<div id = "selectAlgorithmWindow" class = "contentBlock">
  <h5>Применение цензуры к комментариям</h5> 
  <form method = "POST">
    <p>Алгоритмы поиска запрещенных слов:</p>
    <select name="solution">

      <?php foreach ($solutionsOptions as $option) : ?>

        <option
          value = <?= $option['value'] ?>
          <?php 
            if ($_REQUEST['solution'] === $option['value']) echo "selected" 
          ?>
        >
          <?= $option['label'] ?>
        </option>

      <?php endforeach ?>

    </select>
    <p>
      <input 
        type = "checkbox" name = "isCodeShown"
        <?php if (isset($_REQUEST['isCodeShown'])) echo "checked"?>
      >
      Показать код решения
    </p>
    <p>
      <input 
        type = "checkbox" name = "isToMeasureSpeed"
        <?php if (isset($_REQUEST['isToMeasureSpeed'])) echo "checked"?>
      >
      Замерить скорость выполнения
    </p>
    <input type="submit" value="Выполнить">
    <?php if (isset($_REQUEST['solution']) && !isset($_REQUEST['resetSolution'])) : ?>
      <input type="submit" name="resetSolution" value="Отменить цензуру">
    <?php endif ?>
  </form>
</div>
