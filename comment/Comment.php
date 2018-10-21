<?php
  class Comment {
    protected $comment;

    public function __construct(string $comment) {
      $this->comment = htmlspecialchars($comment);
    }

    public function render() {
      echo "<p>".$this->comment."</p>";
    }
  }
?>