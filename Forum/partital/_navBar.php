<?php 
  session_start();
echo('
<nav class="navbar navbar-expand-lg navbar-dark bg-dark newnavi">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/learnphp/Forum/project.php">बातचीत</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/learnphp/Forum/project.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/learnphp/Forum/contact.php#">About us</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Contact</a>
        </li>');
        echo('
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/learnphp/Forum/category.php">Category</a>
        </li>;
         
        </li>
      </ul>
        ');

      if(isset($_SESSION['userEmail']))
        {
         echo('
            <form class="d-flex" role="search" action="http://localhost/learnphp/Forum/partital/_sreach.php?&search=" method="get" >
              <input class="form-control me-2" type="search" name="search aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
              <p style="color:white;font-size: 10px;min-width:38px;min-height:19px;margin-top:auto;margin-bottom:auto">
              welcome '.$_SESSION['userEmail'].'</p>
            </form>');
          }
        else{
          echo('
          <form class="d-flex" role="search" action="http://localhost/learnphp/Forum/partital/_sreach.php" method="get">
            <input class="form-control me-2" type="search" name="search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
            <button type="button" class="btn btn-outline-success mx-2 ml-2" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
            <button type="button" class="btn btn-outline-success mx-2 ml-2" data-bs-toggle="modal" data-bs-target="#sighupModal">Sighup</button>
          </form>');
        };
  echo('
    </div>
  </div>
</nav>
<!-- //modal start here
//login modal -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Login to बातचीत </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- login form start here -->
        <form action="http://localhost/learnphp/Forum/partital/_loginhandle.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input type="email"  name="login"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!-- //sighup modal -->
<div class="modal fade" id="sighupModal" tabindex="-1" aria-labelledby="sighupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="sighupModalLabel">Sighup to बातचीत account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- sighup form start here -->
      <form action="http://localhost/learnphp/Forum/partital/_sighuphandle.php" method="post">

          <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="userName" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="sighupEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password"  name="cpassword" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>');
?>














