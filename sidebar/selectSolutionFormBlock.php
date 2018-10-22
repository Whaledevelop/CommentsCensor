<?php
  $solutionsOptions = [
    [
      "value" => "noAlgorithmSolution", 
      "label" => "Без алгоритма"
    ],
    [
      "value" => "knuthMorrisPrattAlgorithmSolution", 
      "label" => "Алгоритм Кнута-Морриса-Пратта"
    ],
    [
      "value" => "noNameAlgorithmSolution",
      "label" => "Мой алгоритм"
    ],
    [
      "value" => "naiveAlgorithmSolution", 
      "label" => "Наивный (простой / линейный) алгоритм"
    ]
  ];
?>

<div id = "selectSolutionBlock" class = "contentBlock">
  <h5>Применение цензуры к комментариям</h5> 
  <form method = "POST">
    <p>Алгоритмы поиска запрещенных слов:</p>
    <p><i>(выстроены по убыванию средней скорости выполнения)</i></p>
    <select name="solution">

      <?php foreach ($solutionsOptions as $option) : ?>

        <option
          value = <?= $option['value'] ?>
          <?php if ($_REQUEST['solution'] === $option['value']) echo "selected"?>
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
        type = "checkbox" name = "isToTestProductivity"
        <?php if (isset($_REQUEST['isToTestProductivity'])) echo "checked"?>
      >
      Протестировать производительность
    </p>
    <input type="submit" value="Выполнить">
    <?php if (isset($_REQUEST['solution'])) : ?>
      <input type="submit" name="resetSolution" value="Отменить">
    <?php endif ?>
  </form>
</div>
