<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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

<form class="md-form form-sm mt-0 text-center" action="" method="get">
            {{csrf_field()}}
      <div class="container mt-3">
        <div class="row justify-content-center"        >
            <div class="col-md-8">        
                <div class="input-group">        
                    <input type="search" class="form-control rounded" name="Search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>
                </div>        
            </div>         
        </div>        
      </div>      
</form>

<div class="container-fluid mt-4 ">
  <div class="row">
    <div class="col-3">
    <h4 class="text-uppercase">Categories</h4>
      <div class="">
        <ul class="list-group list-group-flush">
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Women's Fashion</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Men's Fashion</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Jewellery Items</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Baby Items</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Furnitures</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Electrics Items</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Books</a></li>
          <li class="list-group-item font-weight-bold"><a class="text-dark" href="#">Electronic Items</a></li>
        </ul>
      </div>
    </div>

    <div class="col-6">
      
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="SliderImage/add.JPG" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="SliderImage/add1.JPG" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="SliderImage/add2.JPG" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>
  </div>
       
</div>

<div class="container">
    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Women's Fashion</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/g1.PNG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Men's Fashion</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/m1.PNG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Jewellery Items</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/j1.PNG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Baby Items</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/bby1.PNG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Furnitures</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/f1.JPG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Electric Items</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/eleI1.JPG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Books</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/b1.JPG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div>

    <div class="row">
          <div class="col-3">
            <h4 class="text-uppercase">Electronic Items</h4>
          </div>
    </div>
    <div class="row">
    <div class="col-3">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/eleI1.JPG" style="width: 100%;" height="auto" alt="">             
              </div>
            </div>
          </div>  
    </div

</div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
</body>
</html>