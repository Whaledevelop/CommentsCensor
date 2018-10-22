<div class="comment-wrapper" id="commentWrapper">

  <?php 
    foreach ($commentsObjectsArray as $commentObj) {
      echo $commentObj->render();
    }
  ?>

</div>