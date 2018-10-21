<?php
  class CensoreTimeMeasuringComment extends CensoredComment {
    public function __construct(...$args) {
      parent::__construct(...$args);

      $this->isToMeasureSpeed = $_REQUEST['isToMeasureSpeed'];
    }

    public function executeCensoreFunc() {
      $start = microtime(true);
      for ($i=0; $i < 1000; $i++) {
        parent::executeCensoreFunc();
      }
      $this->executionTime = microtime(true) - $start;
    }

    public function getExecutionTime() {
      return $this->executionTime;
    }
  }
?>