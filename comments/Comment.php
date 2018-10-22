<?php
  class Comment {
    protected $comment;

    public function __construct(string $comment) {
      $this->comment = htmlspecialchars($comment);
      $this->length = strlen($this->comment);
    }

    public function getLength() {
      return $this->length;
    }

    public function render() {
      echo "<p>".$this->comment."</p>";
    }
  }
?>