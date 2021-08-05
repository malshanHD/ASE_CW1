<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
 <!-- nav start-->
 @include('include.BuyerNavBar')
<!-- nav end-->

<!-- Sign-up form start-->
<div class="container"> 
    <div class="col-md-3"></div>
    <div class="col-md-12" id="form">
      <form>
           <h1>Welcome to Sams & Sams!</h1>
               <br><br>
                <div class="row">
                   <div class="col-md-12"></div>
                      <div class="col-md-6">
                      <label>Frist Name:</label>
                          <input type="text" placeholder="Frist Name" class="form-control border border-primary"  required="">
                        </div>
                      <div class="col-md-6">
                     <label>Last Name:</label>
                           <input type="text" placeholder="Last Name" class="form-control border-primary" required="">
                        </div>
                    <div class="col-md-4">
                       <label>Email:</label>
                           <input type="text" placeholder="Email" class="form-control border-primary" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                   <div class="col-md-12"></div>
                       <div class="col-md-3">
                      <label>Date of Birth:</label>
                          <input type="date" placeholder="" class="form-control border-primary" required="">
                        </div>
                        <div class="col-md-3">
                     <label>Gender:</label>
                     <div class="Gender">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Gender
                  </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Male</a>
                    <a class="dropdown-item" href="#">Female</a>
                       </div>
                     </div>
       
                        </div>
                        <div class="col-md-3">
                     <label>Country Code:</label>
                     <div class="Country Code">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Country Code
                  </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">+94</a>
                    <a class="dropdown-item" href="#">+92</a>
                       </div>
                     </div>
                        </div>  
                        <div class="col-md-3">
                     <label>Phone Namber :</label>
                           <input type="text" placeholder="Phone Namber " class="form-control border-primary" required="">
                    </div>  
                </div>  
                <br>
                <div class="row">
                   <div class="col-md-12"></div>
                   <div class="col-md-3">
                     <label>Country:</label>
                     <div class="Country">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Country 
                  </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sri Lanka</a>
                    <a class="dropdown-item" href="#">USA</a>
                    <a class="dropdown-item" href="#">UK</a>
                       </div>
                     </div>
                         </div>
                        <div class="col-md-3">
                     <label>Street Address 1:</label>
                           <input type="text" placeholder="Street Address 1" class="form-control border-primary" required="">
                        </div>
                    <div class="col-md-3">
                       <label>Street Address 2:</label>
                           <input type="text" placeholder="Street Address 2" class="form-control border-primary" required="">
                       </div>  
                    <div class="col-md-3">
                      <label>Province :</label>
                          <input type="text" placeholder="Province " class="form-control border-primary" required="">
                        </div>
                   </div>  
                <br>
                <div class="row">
                   <div class="col-md-12"></div> 
                      <div class="col-md-4">
                     <label>City:</label>
                           <input type="text" placeholder="City" class="form-control border-primary" required="">
                         </div>
                       <div class="col-md-4">
                     <label>Zip Code:</label>
                           <input type="text" placeholder="Zip Code" class="form-control border-primary" required="">
                         </div>  
                       <div class="col-md-4">
                     <label>User Name:</label>
                          <input type="text" placeholder="User Name" class="form-control border-primary" required="">
                        </div>   
                    </div>   
                <br>
                <div class="row">
                   <div class="col-md-12"></div>
                     <div class="col-md-6">
                     <label>Create Password:</label>
                           <input type="Password" placeholder="Create Password" class="form-control border-primary" required="">
                        </div>
                        <div class="col-md-6">
                     <label>Confirm Password:</label>
                           <input type="Password" placeholder="Confirm Password" class="form-control border-primary" required="">
                    </div>  
                </div> 
            </div> 
             <br>
            <div class="container">
               <div class="row justify-content-center ">
                 <button type="button" class="btn btn-warning">Create Account</button>
            </div> 
      </form>
       </div>
    <div class="col-md-3"></div>
</div>
  <!-- Sign-up form end-->

 <!--footer start-->
 @include('include.footer')
  <!--footer end-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>