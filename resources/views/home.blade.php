<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <style>
    hr {
      border-top: 2px solid orange;
    }
    
  </style>

</head>
<body>

@include('include.BuyerNavBar')

<form class="md-form form-sm mt-0 text-center" action="" method="get">
            {{csrf_field()}}
      <div class="container mt-3">
        <div class="row justify-content-center"        >
            <div class="col-md-8">        
                <div class="input-group">        
                    <input type="search" class="form-control rounded input-lg" name="Search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>
                </div>        
            </div>         
        </div>        
      </div>      
</form>

<div class="container-fluid mt-4 ">
  <div class="row">
    <div class="col-12 col-md-3 align-self-end">
    <h4 class="text-uppercase"><i class="fa fa-bars" aria-hidden="true"></i> Categories</h4>
      <div class="" >
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

    <div class="col-12 col-md-9 align-self-end">
      
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

<div class="container mt-5" style="background: rgb(241,241,241);">
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-female" aria-hidden="true"></i> Women's Fashion</h5>
            <hr>
          </div>
    </div>
    <div class="row">
    <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/g1.PNG" style="width: 100%;" height="auto" alt="">  
                   <p><b>Item name</b></p> 
                    <span>
                      <p><s>$15</s> &nbsp &nbsp $10</p> 
                    </span>        
              </div>
            </div>
          </div>  
    </div>
</div>

<div class="container mt-3" style="background: rgb(241,241,241);">
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
              <h5 class="font-weight-bold"><i class="fa fa-male" aria-hidden="true"></i> Men's Fashion</h5>
              <hr>
          </div>
    </div>

    <div class="row">
          <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/m1.PNG" style="width: 100%;" height="auto" alt="">    
                   <p><b>Item name</b></p>
                   <span>
                      <p><s>$20</s> &nbsp &nbsp $18</p>
                   </span>         
              </div>
            </div>
          </div>  
    </div>
</div>

<div class="container mt-3" style="background: rgb(241,241,241);">
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-diamond" aria-hidden="true"></i> Jewellery Items</h5>
            <hr>
          </div>
    </div>
    <div class="row">
    <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/j1.PNG" style="width: 100%;" height="auto" alt="">  
                   <p><b>Item name</b></p> 
                   <span>
                     <p><s>$40</s> &nbsp &nbsp $38</p>
                   </span>          
              </div>
            </div>
          </div>  
    </div>
 </div>

 <div class="container mt-3" style="background: rgb(241,241,241);"> 
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-child" aria-hidden="true"></i> Baby Items</h5>
            <hr>
          </div>
    </div>
    <div class="row">
    <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/bby1.PNG" style="width: 100%;" height="auto" alt="">   
                   <p><b>Item name</b></p>
                   <span>
                     <p><s>$30</s> &nbsp &nbsp 27</p>
                   </span>          
              </div>
            </div>
          </div>  
    </div>
</div>

<div class="container mt-3" style="background: rgb(241,241,241);">
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-bed" aria-hidden="true"></i> Furnitures</h5>
            <hr>
          </div>
    </div>
    <div class="row">
    <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/f1.JPG" style="width: 100%;" height="auto" alt="">  
                   <p><b>Item name</b></p>
                   <span>
                     <p><s>$51</s> &nbsp &nbsp $45</p>
                   </span>           
              </div>
            </div>
          </div>  
    </div>
</div>
<div class="container mt-3" style="background: rgb(241,241,241);">
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-cog" aria-hidden="true"></i> Electric Items</h5>
            <hr>
          </div>
    </div>
    <div class="row">
    <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/eleI1.JPG" style="width: 100%;" height="auto" alt="">   
                   <p><b>Item name</b></p>
                   <span>
                     <p><s>$27</s> &nbsp &nbsp $22</p>
                   </span>          
              </div>
            </div>
          </div>  
    </div>
</div>
<div class="container mt-3" style="background: rgb(241,241,241);">
    <div class="row">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-book" aria-hidden="true"></i> Books</h5>
            <hr>
          </div>
    </div>
    <div class="row">
    <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                   <img src="AddItemsImages/b1.JPG" style="width: 100%;" height="auto" alt=""> 
                   <p><b>Item name</b></p>
                   <span>
                     <p><s>$35</s> &nbsp &nbsp $30</p>
                   </span>            
              </div>
            </div>
          </div>  
    </div>
</div>
<div class="container mt-3" style="background: rgb(241,241,241);">
    <div class="row ">
          <div class="col-12 col-md-3 mt-2">
            <h5 class="font-weight-bold"><i class="fa fa-mobile" aria-hidden="true"></i> Electronic Items</h5>
            <hr>
          </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-3 mb-2">
            <div class="card" style="width: 100%;">
               <div class="card-body">
                    <img src="AddItemsImages/eleI1.JPG" style="width: 100%;" height="auto" alt=""> 
                    <p><b>Item name</b></p>
                   <span>
                     <p><s>$66</s> &nbsp &nbsp $55</p>
                   </span>            
                </div>
              </div>
            </div>  
      </div>
</div>
    
@include('include.footer')





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
</body>
</html>