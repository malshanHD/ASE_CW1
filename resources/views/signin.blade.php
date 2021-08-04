<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: linear-gradient(90deg, rgba(233,255,4,1) 0%, rgba(1,21,81,1) 0%, rgba(1,21,81,1) 30%, rgba(1,21,81,1) 61%, rgba(1,21,81,1) 100%);">
<a class="navbar-brand" href="#"><img src="SystemImage/logov1.png" style="width: 200px;" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="#">Language</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><u>Item Buy</u></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Wish List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row mt-3 font-weight-bold justify-content-center">
        <div class="col-6 ">
        <h1 class="text-uppercase text-center">Sign In</h1>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-5 mt-3">
        <div class="form-group">
                <label for="User Name">User Name</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="username"  placeholder="User Name" name="username">
        </div>
        <div class="form-group ">
                <label for="Password">Password</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="password"  placeholder="Password" name="password">
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 mt-4">
            <button type="submit" class="btn btn-primary btn-block "> Sign In</button>
        </div>
        <div class="col-3 mt-4">
            <button type="submit" class="btn btn-secondary btn-block">Clear</button>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>