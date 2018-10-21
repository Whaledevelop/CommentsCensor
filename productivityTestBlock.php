<?php if (isset($_REQUEST['isToTestProductivity'])) : ?>
<div id = "productivityTestBlock" class = "contentBlock">
  <h5>Расчёт продуктивности</h5>
  <table>
    <thead>
      <tr>
        <th>№ строки</th>
        <th>Длина строки (кол-во символов)</th>
        <th>Время выполнения 1000 повторений (сек.)</th>
      <tr>
      <?php foreach ($commentsObjectsArray as $index => $commentObj) : 
        $commentObj->testProductivity(1000);
      ?>
        <tr>
          <td><?= $index + 1?></td>
          <td><?= $commentObj->getLength() ?></td>
          <td><?= $commentObj->getExecutionTime() ?></td>
        </tr>
      <?php endforeach ?>
    </thead>
  </table>
</div>

<?php endif ?>