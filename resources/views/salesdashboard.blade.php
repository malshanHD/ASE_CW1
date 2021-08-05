<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: linear-gradient(90deg, rgba(233,255,4,1) 0%, rgba(1,21,81,1) 0%, rgba(1,21,81,1) 30%, rgba(1,21,81,1) 61%, rgba(1,21,81,1) 100%);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center text-uppercase font-weight-bold" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><u>Sales Dashboard</u></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">New Item </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Check Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Check Feedbacks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <Div class="row">
        <div class="col-4 mt-3">
        
        <div class="card" style="width: 18rem; background-color:#0fd6a5;">
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                
                <p class="card-text">6 Today</p>
                
            </div>
        </div>

        </div>
        <div class="col-4 mt-3">
        
        <div class="card" style="width: 18rem; background-color: #e2ee0b;">
            <div class="card-body">
                <h5 class="card-title">Revenue</h5>
                
                <p class="card-text">US$108.45</p>
                
            </div>
        </div>

        </div>
        <div class="col-4 mt-3">
        
        <div class="card" style="width: 18rem; background-color:#f272ed;">
            <div class="card-body">
                <h5 class="card-title">Visitors</h5>
                
                <p class="card-text">412 Today</p>
                
            </div>
        </div>

        </div>
        <div class="col-4 mt-3">
        
        <div class="card" style="width: 18rem; background-color:#69ba28;">
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                
                <p class="card-text">650</p>
                
            </div>
        </div>

        </div>
        <div class="col-4 mt-3">
        
        <div class="card" style="width: 18rem; background-color:#eb3c42;">
            <div class="card-body">
                <h5 class="card-title">Return</h5>
                
                <p class="card-text">45</p>
                
            </div>
        </div>

        </div>
        <div class="col-4 mt-3">
        
        <div class="card" style="width: 18rem; background-color:#4e3bdb;">
            <div class="card-body">
                <h5 class="card-title">Rating</h5>
                
                <p class="card-text">80%</p>
                
            </div>
        </div>

        </div>
    </Div>
</div>

@include('include.footer')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>