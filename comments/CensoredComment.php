<?php
  require_once ROOT."/comments/Comment.php";
  
  /**
   * @class CensoredComment - класс комментария, к которому применяется цензура
   * при помощи функции из папки /solutions, название которой передается при создании
   * класса. При создании может перенаправлять на дочерний класс 
   * CensoreProductivityTestComment, который подсчитывает время выполнения функции-решения
   */
  class CensoredComment extends Comment {
    private $censoreWordsList, $censoreFuncName;

    public function __construct(string $comment, array $banned, string $solutionFuncName) {
      parent::__construct($comment);

      $this->censoreWordsList = array_map("strtolower", $banned);
      $this->censoreFuncName = $solutionFuncName;     
    }

    public function executeCensoreFunc() {
      require_once ROOT."/solutions/".$this->censoreFuncName.".php";
      $this->comment = call_user_func(
        $this->censoreFuncName, $this->comment, $this->censoreWordsList
      );
    }
    
    public static function create($isToTestProductivity, ...$censoreCommentArgs) {
      if (!empty($isToTestProductivity)) {

        require_once ROOT."/comments/CensoreProductivityTestComment.php";
        $commentObj = new CensoreProductivityTestComment(...$censoreCommentArgs);

      } else {
        $commentObj = new self(...$censoreCommentArgs);
      }

      $commentObj->executeCensoreFunc();
      return $commentObj;
    }
  }
?>