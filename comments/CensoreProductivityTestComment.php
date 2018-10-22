<?php
  /**
   * @class CensoreProductivityTestComment - дочерний класс комментария,
   * к которому применена цензура. Подсчитывает время выполнения
   * определенного количества выполнений функции-цензора. 
   */
  class CensoreProductivityTestComment extends CensoredComment {
    private $executionTime;

    public function __construct(...$args) {
      parent::__construct(...$args);
    }

    public function executeCensoreFunc($iterationsQuantity = 1) {
      $startTime = microtime(true);
      for ($i = 0; $i < $iterationsQuantity; $i++) {
        parent::executeCensoreFunc();
      }
      $this->executionTime = sprintf('%0.10f', microtime(true) - $startTime);
    }

    public function testProductivity($iterationsQuantity) {
      $this->executeCensoreFunc($iterationsQuantity);
    }

    public function getExecutionTime() {
      return $this->executionTime;
    }    
  }
?>