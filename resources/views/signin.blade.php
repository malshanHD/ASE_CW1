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
@include('include.BuyerNavBar')

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