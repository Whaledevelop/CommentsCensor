<?php
  require_once ROOT."/comment/CensoredComment.php";
  require_once ROOT."/comment/Comment.php";

	function createCommentsObjectsArray() {
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

    $commentsObjectsArray = [];
		foreach ($comments as $comment) {
			$commentsObjectsArray[] = isset($_REQUEST['solution']) 
				? (CensoredComment::create($comment, $banned, $_REQUEST['solution']))
				: new Comment($comment);
			
    }
    return $commentsObjectsArray;
  }
?>