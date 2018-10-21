<?php
  require_once __DIR__."./Comment.php";

  class CensoredComment extends Comment {
    private $censoreWordsList, $censoreFuncName;

    public function __construct(string $comment, array $banned, string $solutionFuncName) {
      parent::__construct($comment);

      $this->censoreWordsList = $banned;
      $this->censoreFuncName = $solutionFuncName;     
    }

    public function executeCensoreFunc() {
      $this->comment = call_user_func(
        $this->censoreFuncName, $this->comment, $this->censoreWordsList
      );
    }
    
    public static function create(...$args) {
      if (!empty($_REQUEST['isToMeasureSpeed'])) {

        require_once '/comment/CensoreTimeMeasuringComment.php';
        $commentObj = new CensoreTimeMeasuringComment(...$args);

      } else {
        $commentObj = new self(...$args);
      }

      $commentObj->executeCensoreFunc();
      return $commentObj;
    }
  }
?>