<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to बातचीत form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
  </head>
  <body>
<!-- navbar start here -->
  <?php include '_navBar.php';?>
  <?php include '_dbconnect.php';
  //sql command start here
  $id=$_GET['threadid'];
  $sql="SELECT * FROM `threads` WHERE `thread_id`='$id'";
  $result=mysqli_query($conn,$sql);
  //loop start here
  while($row=mysqli_fetch_assoc($result)){
  $question=$row['thread_title'];
  $answer=$row['thread_desc'];
}
  ?>
  <!-- jumbotron start here -->
  <div class="jumbotron my-5" style="margin-left:200px;margin-right:200px;
  padding:10px;background-color:LightGray;">
        <h4><b><?php echo($question); ?></b></h4>
        <p class="lead"><?php echo($answer); ?></p>
        <hr class="my-4">
        <p><b>Notice:</b>Please do not waste our time and your.Do not share any abusive word.Copyright issue term our condition I hope you are well good enjoy it.</p>
        <hr class="my-4">
        <?php 
        $name=$_GET['unme'];
        echo('
        <p>Posted by:<b>'. $name.'</b></p>')
        ?>
    </div>
  <!-- add comment coding start here -->
<?php   
$id=$_REQUEST['threadid'];
//initialize some variable
if(isset($_REQUEST['comment'])){
$srno=$_REQUEST['sno'];
$comments=$_REQUEST['comment'];
$sql="INSERT INTO `comments` (`comment_id`, `comment_by`, `comment_content`, `thread_id`, `comment_time`) VALUES (NULL, '$srno', '$comments', '$id', current_timestamp());";
$result=mysqli_query($conn,$sql);
};

?>







<?php
//comment code here
        if(isset($_SESSION['userEmail'])){
          echo('

    <!-- comment coding here -->
        
    <div class="container" style="margin-left:185px";>
      <h1>Post any Comment</h1>
      <!-- form start here -->
      
      <form action="'.($_SERVER["REQUEST_URI"]).'"method="post" class="my-3">
      <label for="exampleInputEmail1" class="form-label">Type a comment here...</label>
            <div class="form-floating">
                <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
             <input type="hidden" name="sno" value="'.$_SESSION["user_id"].'">
          
            <button type="submit" class="btn btn-success my-3">Post a comment</button>
      </form>');
        }else{
          echo('<h1 style="margin-left:185px">Your are not login so you can not post any commant</h1>');

        }
      ?>
       <!-- php for form start here -->
      <div class="container">
      <h1 class="my-3">Discussion</h1>
      <?php  
     $id=$_GET['threadid'];
     $showmessage=false;

     $sql="SELECT * FROM `comments` WHERE `thread_id`='$id'";
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result)){

      $cmt_time=$row['comment_time'];
     
       $cmt_user_by=$row['comment_by'];
        $num=$row['comment_id'];
        $comment=$row['comment_content'];
         $showmessage=true;
        if(!empty($comment)){
          // i am adding user name in the comment
          $userquery="SELECT `user_name`FROM `userdata` WHERE `user_id`='$cmt_user_by'";
          $rnquery=mysqli_query($conn,$userquery);
          $show=mysqli_fetch_assoc($rnquery);
          $user_name=$show['user_name'];
     echo('
        <div class="media my-3">
            <img src="https://i.pinimg.com/736x/09/21/fc/0921fc87aa989330b8d403014bf4f340.jpg" class="mr-3 my-3" alt="photo" style="width:35px;height:35px;">'.$user_name.' and ' .$cmt_time.'
            <div class="media-body">
                <h5 class="mt-0"><b>'.$comment.'</h5>
            </div>
        </div>');
      
    }};
    if(!$showmessage){
      echo('<div class="jumbotron my-3">
        <h1 class="display-4">😔</h1>
        <p class="lead">if you have any problem pls ask them freely.Thank you</p>
      </div>');
    }
        ?>
        </div>
  </div>
     








    </div>







<?php  include '_footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>