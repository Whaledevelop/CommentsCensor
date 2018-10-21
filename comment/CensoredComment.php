<?php
  require_once ROOT."/comment/Comment.php";

  class CensoredComment extends Comment {
    private $censoreWordsList, $censoreFuncName;

    public function __construct(string $comment, array $banned, string $solutionFuncName) {
      parent::__construct($comment);

      $this->censoreWordsList = array_map("strtolower", $banned);
      $this->censoreFuncName = $solutionFuncName;     
    }

    public function executeCensoreFunc() {
      $this->comment = call_user_func(
        $this->censoreFuncName, $this->comment, $this->censoreWordsList
      );
    }
    
    public static function create(...$args) {
      if (!empty($_REQUEST['isToMeasureSpeed'])) {

        require_once ROOT."/comment/CensoreTimeMeasuringComment.php";
        $commentObj = new CensoreTimeMeasuringComment(...$args);

      } else {
        $commentObj = new self(...$args);
      }

      $commentObj->executeCensoreFunc();
      return $commentObj;
    }
  }
?>