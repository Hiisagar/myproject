<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include '_navBar.php';?>
    <?php include '_dbconnect.php';?>
    <?php
    $id=$_GET['catid'];
    $sql="SELECT * FROM `categories` WHERE `categories_id`='$id'";
    $result=mysqli_query($conn,$sql);
    while($show=mysqli_fetch_assoc($result)){
        $catname=$show['categories_name'];
        $catdesc=$show['categories_description'];
    };
    ?>
    <div class="jumbotron my-5" style="margin-left:200px;">
        <h1 class="display-4">Welcome to <?php  echo($catname);?></h1>
        <p class="lead"><?php echo($catdesc);?></p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="https://en.wikipedia.org/wiki/<?php echo($catname) ?>_(programming_language)" role="button">Learn more</a>
        </p> 
    </div>
    <div class="container" style="margin-left:185px";>
        <h1>Ask A Question</h1>
        <!-- form start here -->

        <form action="<?php echo($_SERVER['REQUEST_URI'])?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
                <input type="hidden" name="sno" value=<?php 
                if(isset($_SESSION['user_id']))
                {
                    echo($_SESSION['user_id']);
                }
                ?>>
            </div>
          
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
        <?php 
            //variable
           
            $showmessage=false;
            $id=$_REQUEST['catid'];
            if(isset($_REQUEST['title'])&& isset($_REQUEST['desc']))
            {
                $title=$_REQUEST['title'];
                $desc=$_REQUEST['desc'];
                $user_id=$_REQUEST['sno'];
                $sql="INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`) VALUES (NULL, '$title', '$desc', '$id', '$user_id', current_timestamp())";
                $runqry=mysqli_query($conn,$sql);
                if(!empty($title) && !empty($desc)){
                $showmessage=true;
            }};

            //show add message
            if(!$showmessage){
                echo('<div class="jumbotron my-3">
                        <h1 class="display-4">😔</h1>
                        <p class="lead">if you have any problem pls ask them freely.Thank you</p>
                    </div>');
            }

        
        ?>

    <!-- media object -->
     <?php  
     $sr_id=1;
     $id=$_GET['catid'];
     $sql="SELECT * FROM `threads` WHERE `thread_cat_id`='$id'";
     $result=mysqli_query($conn,$sql);
     if($result){
     while($row=mysqli_fetch_assoc($result)){
        $thread_user_id=$row['thread_user_id'];
        $num=$row['thread_id'];
        $question=$row['thread_title'];
        $answer=$row['thread_desc'];
        $timeofcomment=$row['time'];
        // i am adding user name by the help of thread_user_id
                $runquery="SELECT `user_name` FROM `userdata` WHERE `user_id`='$thread_user_id'";
                $runcmd=mysqli_query($conn,$runquery);
                $rows=mysqli_fetch_assoc($runcmd);
                $user_name=$rows['user_name'];

     echo('
        <div class="media my-3" style="margin-left:30px;">
            <img src="https://i.pinimg.com/736x/09/21/fc/0921fc87aa989330b8d403014bf4f340.jpg" class="mr-3 my-3" alt="photo" style="width:35px;height:35px;">
            <b>' .$user_name.' at ' .$timeofcomment.'</b>
            <div class="media-body">
                <h5 class="mt-0"><b>'.$num.'.<a class="text-black" style="text-decoration:none" href="http://localhost/learnphp/Forum/partital/threadquestion.php?threadid='.$num.'&unme='.$user_name.'">'.$question.'</a>.</b></h5>
                <p>'.$answer.'.</p>
            </div>
        </div>');

    }
}
;

        ?>
        </div>
     
   <?php  include '_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>