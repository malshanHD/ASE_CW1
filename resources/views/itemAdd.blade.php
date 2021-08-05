<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: linear-gradient(90deg, rgba(233,255,4,1) 0%, rgba(1,21,81,1) 0%, rgba(1,21,81,1) 30%, rgba(1,21,81,1) 61%, rgba(1,21,81,1) 100%);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center text-uppercase font-weight-bold" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="#">Sales Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><u>New Item </u></a>
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

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase">Item Add</h1>
        </div>
    </div>
    <div class="row mt-3 font-weight-bold">
        <div class="col-6">
            <div class="form-group">
                <label for="itemCode">Item Code</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemCode"  placeholder="Item Code" name="code">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="itemName">Item Name</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemName"  placeholder="Item Name" name="name">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mt-2">
                <label for="itemDes">Item Description</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemDes"  placeholder="Item Description" name="Item Description">
            </div>
        </div>
        <div class="form-group col-md-6">
                <label for="category">Main Category</label> <span class="text-danger">*</span>
                <select id="category" class="form-control border border-primary">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
        </div>
        <div class="form-group col-md-6">
                <label for="Subcategory">Sub Category</label> <span class="text-danger">*</span>
                <select id="Subcategory" class="form-control border border-primary">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
        </div>
        <div class="col-4">
            <div class="form-group mt-2">
                <label for="itemWarranty">Warranty</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemWarranty"  placeholder="Item Warranty" name="Warranty">
            </div>
         </div>
         <div class="col-4">
            <div class="form-group mt-2">
                <label for="itemQuantity">Quantity</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemQuantity"  placeholder="Item Quantity" name="Quantity">
            </div>
         </div>
         <div class="col-4">
            <div class="form-group mt-2">
                <label for="itemPrice">Item Price</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemPrice"  placeholder="Item Price" name="Price" required>
            </div>
         </div>
         <div class="col-4">
            <div class="form-group mt-2">
                <label for="itemDiscount">Discount</label> <span class="text-danger">*</span>
                <input type="text" class="form-control border border-primary" id="itemDiscount"  placeholder="Item Discount" name="Discount">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group mt-2">
                <label for="itemPic">Pictures</label> <span class="text-danger">*</span>
                <input type="file" class="form-control border border-primary"  id="itemPic" name="pictures">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <input type="submit" class="btn btn-primary btn-block" value="Add">
        </div>
        <div class="col-3">
            <input type="submit" class="btn btn-success btn-block" value="Update">
        </div>
        <div class="col-3">
            <input type="submit" class="btn btn-danger btn-block" value="Delete">
        </div>
        <div class="col-3">
            <input type="submit" class="btn btn-warning btn-block" value="Clear">
        </div>
    </div>
</div>

@include('include.footer')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>