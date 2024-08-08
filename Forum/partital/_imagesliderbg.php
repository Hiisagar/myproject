<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to बातचीत form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .image-container{
        width: 100%;
        height: 15%;
        margin:auto;
      }
      #img{
        height:400px;
      }
      .row{
        display:inline-block;
        margin-right:60px;

      }
      .img{
        height:150px;
      }
      
    </style>
  </head>
  <body>
  <div class="image-container">
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://stackify.com/wp-content/uploads/2023/05/image-4.png" id="img" class="d-block w-100" alt="python">
    </div>
    <div class="carousel-item">
      <img src="https://d1le3ohiuslpz1.cloudfront.net/skillcrush/wp-content/uploads/2021/08/image14.jpg.webp"  id="img" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi88XhdL4bEyh-d6N1gndDZq-qrGLd8uALZQ&s" id="img" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>



    <div class="container my-3">
      <h2 class="text-center">बातचीत for Categories</h2>

       <!-- image slides start -->
          <!-- php loop start -->
          <?php 
       require 'partital/_dbconnect.php';
       $sql="SELECT * FROM `categories` LIMIT 5";
       $result=mysqli_query($conn,$sql);
       while($show=mysqli_fetch_assoc($result))
       {
          $id=$show['categories_id'];
          $cat=$show['categories_name'];
          $des=$show['categories_description'];
        echo'
    <div class="row my-3 mr-3">
      <div class="card newcard col-md-4 my-2" style="width: 18rem;">
        <img src="https://files.prepinsta.com/wp-content/uploads/2020/07/python-removebg-preview.webp" class="card-img-top img" alt="'.$cat.'image">
        <div class="card-body">
         <h5 class="card-title"><a href="http://localhost/learnphp/Forum/partital/_thread.php?catid='.$id.'">'.$cat.'</a></h5>
          <p class="card-text">'.substr($des,0,90).'.....</p>
          <a href="http://localhost/learnphp/Forum/partital/_thread.php?catid='.$id.'" class="btn btn-primary">View Thread</a>
        </div>   
      </div>
      </div>';
    
       }
     
       ?>

       <?php  include '_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>