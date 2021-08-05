<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
@include('include.BuyerNavBar')  
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase">My Orders</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5 ">
            <div class="form-group mt-5 ml-2 md-3 ">
                <label for="ordernum">Order number</label> <span class="text-danger"></span>
                <input type="text" class="form-control border border-warning" id="ordernum"  placeholder="Order number" name="ordernumber"> 
            </div>
            </div>
            <div class="col-5 ">
            <div class="form-group mt-5 ml-2 md-3 ">
                <label for="item">Item</label> <span class="text-danger"></span>
                <input type="text" class="form-control border border-warning" id="item"  placeholder="Item" name="item">
            </div>
            </div>
            <div class="col-2 mt-4">
            <div class="form-group mt-5 ml-2 md-3 ">
            <input type="submit" class="mb-5 mt-4 btn btn-warning btn-block  btn-outline-primary " value="search">
            </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Product Action</th>
      <th scope="col">Order Status</th>
      <th scope="col">Order Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Order ID:145865254</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<!--page footer-->
@include('include.footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>