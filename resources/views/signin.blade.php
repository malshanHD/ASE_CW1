<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
      hr {
        border-top: 2px solid orange;
      }
      i.social {
        padding-left: 1em;
      } 
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: linear-gradient(90deg, rgba(46,46,84,1) 0%, rgba(46,46,84,1) 0%, rgba(46,46,84,1) 30%, rgba(46,46,84,1) 61%, rgba(46,46,84,1) 100%);">
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

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-4">
      <h3>Welcome to Sams & Sams! </h3>
    </div>
    <div class="col-4 mt-2">
      <p class="text-right"><a href="#"><b>Join</b> </a> with Sams & Sams</p>
    </div>
  </div>
  <div class="row mt-3 justify-content-center">
      <div class="col-8" style="background: rgb(222,222,222);">
            <div class="form-group mt-5 ml-2 mr-2">
                <label for="usern">Email Address</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-warning" id="usern"  placeholder="Type your email address" name="username">
            </div>
            <div class="form-group ml-2 mr-2">
                <label for="pass">Password</label> <span class="text-danger">*</span>
                <input type="password" class="form-control border border-warning" id="pass"  placeholder="Type your password" name="password">
            </div>
            <a class="text-info ml-2 mr-2" href="#"><b>Forget password</b></a>
            <input type="submit" class="mb-5 mt-4 btn btn-warning btn-block  btn-outline-primary " value="LOGIN">
      </div>
    </div>
</div>

@include('include.footer')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>