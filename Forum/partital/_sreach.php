<?php require '_dbconnect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to बातचीत form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require '_dbconnect.php'; 
      include '_navBar.php';?>
<div class="container my-3">
  <?php 
  $srch=$_GET['search'];
  ?>
    <h1>Your are sreach list is "<?php echo $srch;?>"</h1>
    <div class="result my-3">
        <?php
        $noresult=true;
        $srch=$_GET['search'];
        $sql="SELECT * FROM `threads` WHERE MATCH (`thread_title`,`thread_desc`) against ('$srch')";
        $rnqry=mysqli_query($conn,$sql);
        while($num=mysqli_fetch_assoc($rnqry)){
        $title=$num['thread_title'];
        $desc=$num['thread_desc'];
        $noresult=false;
        echo('
        <h3><a href="" class="text-dark" style="text-decoration:none">'.$title.'</a></h3>
        <p>'.$desc.'</p>');
      }
        //if search section are not match give me this message
        if($noresult){
            echo("Your search -'.$srch.'- did not match any documents.
            <p>Suggestions:<p>
            <ul>
                    <li>Make sure that all words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    <li>Try fewer keywords.</li>
            </ul>
            <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaArLOc0Pk34mIe9aXGm3QlsiC2psYrdh7GA&s' alt='error image'>
                ");
        }
        ?>
    </div>
</div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>