<?php
  require_once './comment/CensoredComment.php';
  require_once './comment/Comment.php';

  $comments = [
    'This stuff is motherfucking shit, bitch. You\'re suck!',
    'I love flowers! Thank you very much! Have a nice day!',
    'Hello! I\'ve wrote this script: <script>alert("Hello world!");</script>. 
      How I can execute this stuff, bitch?'
  ];

  $banned = [
    'shit',
    'fuck',
    'bitch',
    'suck'
  ];
?>

<div class="comment-wrapper" id="commentWrapper">

  <?php 
    foreach ($comments as $comment) {

      $comment = isset($_REQUEST['solution']) && !isset($_REQUEST['resetSolution'])
        ? CensoredComment::create($comment, $banned, $_REQUEST['solution'])
        : new Comment($comment);
      echo $comment->render();
    }
  ?>

</div>