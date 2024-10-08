<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To बातचीत Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h1,h2{
          text-align: center;
        }
        .employess{
          display: grid;
          grid-template-columns: repeat(4,300px);
          grid-template-rows:repeat(2,400px) ;
          gap:50px;
        }
        .emp{
          
        }
        .img{
          height: 250px;
          width: 300px;
        }
        .founder-logo{
          width: 305px;
          height: 395px;
          border-radius: 153px;
        }
        #h3{
        
          width:305px;
          text-align: center;
        }
        section{
          display: flex;
          justify-content: space-evenly;
        }

    </style>
</head>
<body>
<?php include 'partital/_navBar.php'?>
<main>
  <div class="logo my-3">
    <h1 id="wlc">Welcome To बातचीत Forum!!!</h1>
  </div>
  <div>
    <h2 id="h2">Company employess</h2>
  </div>
  <div class="employess my-4">
    <div class="emp">
      <img class="img" src="https://cdn.pixabay.com/photo/2024/02/21/14/53/ai-generated-8587845_640.png">
      <h5>Tom Riddle</h5>
      <li>Age:25</li>
      <li>Role:Data Entry</li>
       <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>

    </div>
    <div class="emp">
    <img class="img" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
    <h5>Tony Stark</h5>
      <li>Age:28</li>
      <li>Role:Python</li>
      <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>

    </div>
    <div class="emp">
      <img  class="img" src="https://media.istockphoto.com/id/1446934118/photo/happy-business-man-listening-to-a-discussion-in-an-office.jpg?s=612x612&w=0&k=20&c=jiGivtsXnV0rZex5PEawRYVyNNzhkntyZDNeLXg7H0A=">
      <h5>Harry Potter</h5>
      <li>Age:23</li>
      <li>Role:Java</li>
        <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>
    </div>
    <div class="emp">
      <img  class="img" src="https://media.istockphoto.com/id/1503295910/photo/portrait-smile-and-designer-man-with-tablet-in-office-creative-workplace-or-coworking-in.webp?b=1&s=170667a&w=0&k=20&c=em8gSjgey4yZzrIfmYDXKvJ0ilZwYkqJphpXSfo2kcE=">
      <h5>Hughie</h5>
      <li>Age:30</li>
      <li>Role:Web Designing</li>
        <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>
    </div>
    <div class="emp">
      <img class="img" src="https://media.istockphoto.com/id/1587604256/photo/portrait-lawyer-and-black-woman-with-tablet-smile-and-happy-in-office-workplace-african.webp?b=1&s=170667a&w=0&k=20&c=XocBdVosckQdKjxF2aKNbSWhK9GkX0JrykqAOU5KnbY=">
      <h5>Angel Priya</h5>
      <li>Age:23</li>
      <li>Role:Marketing</li>
        <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>
    </div>
    <div class="emp">
      <img class="img" src="https://media.istockphoto.com/id/1471886613/photo/mature-businesswoman-smiles-encouragingly-at-unrecognizable-female-job-applicant.webp?b=1&s=170667a&w=0&k=20&c=SGWGe7lJA5CrbRKrDIKPj2Bw4uBYxfZDqd9T_L-L9KA=">
      <h5>Lucy</h5>
      <li>Age:21</li>
      <li>Role:React js</li>
        <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>
    </div>
    <div class="emp">
      <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi7hrYbuPAn5mZSdr5e4jWSCL6IwUMLkYzXg&s">
      <h5>David Stark</h5>
      <li>Age:25</li>
      <li>Role:Linux System Adminstration</li>
       <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>
    </div>
    <div class="emp">
      <img class="img" src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=600">
      <h5>Kammo</h5>
      <li>Age:28</li>
      <li>Role:Receptionist</li>
        <button class="btn btn-success my-2">Like</button> <button class="btn btn-primary my-2">Follow</button>
    </div>
  </div>
</main>
<section>
  <div src="img-logo">
    <img class="founder-logo" src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=600">
    <h3 id="h3">CO-FOUNDER</h3>
  </div>
  <div src="img-logo">
    <img class="founder-logo" src="https://images.pexels.com/photos/1181695/pexels-photo-1181695.jpeg?auto=compress&cs=tinysrgb&w=600">
    <h3 id="h3">HEAD-FOUNDER</h3>
  </div>
  <div src="img-logo">
    <img class="founder-logo" src="https://images.pexels.com/photos/756484/pexels-photo-756484.jpeg?auto=compress&cs=tinysrgb&w=600">
    <h3 id="h3">COMPANY PARTNER</h3>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>