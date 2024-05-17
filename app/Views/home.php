<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap E-commerce Homepage</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Custom CSS -->
  <style>
    /* Custom Styles */
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #343a40;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #ffffff;
    }
    .navbar-brand:hover, .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }
    .carousel-item img {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }
    .card {
      border: none;
      transition: all 0.3s;
    }
    .card:hover {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    footer {
      background-color: #343a40;
      color: #ffffff;
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://picsum.photos/900/500?random=1" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/900/500?random=2" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://picsum.photos/900/500?random=3" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- Shop by Category -->
<div class="container py-5">
  <div class="container">
    <h2 class="text-center mb-4">Shop by Category</h2>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/200/200?random=5" alt="Category 1">
          <div class="card-body">
            <h5 class="card-title">Category 1</h5>
            <p class="card-text">Explore our Category 1 items.</p>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/200/200?random=6" alt="Category 2">
          <div class="card-body">
            <h5 class="card-title">Category 2</h5>
            <p class="card-text">Explore our Category 2 items.</p>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/200/200?random=7" alt="Category 3">
          <div class="card-body">
            <h5 class="card-title">Category 3</h5>
            <p class="card-text">Discover unique goods in Category 3.</p>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/200/200?random=8" alt="Category 4">
          <div class="card-body">
            <h5 class="card-title">Category 4</h5>
            <p class="card-text">Check out our Category 4 items.</p>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Popular Products -->
<div class="container-fluid bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Popular Products</h2>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/250/250?random=1" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text"><s>$24.99</s> <span class="text-danger">$19.99</span> <span class="badge badge-success">Save $5</span></p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/250/250?random=2" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text"><s>$34.99</s> <span class="text-danger">$29.99</span> <span class="badge badge-success">Save $5</span></p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/250/250?random=3" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text"><s>$44.99</s> <span class="text-danger">$39.99</span> <span class="badge badge-success">Save $5</span></p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/250/250?random=4" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <p class="card-text"><s>$54.99</s> <span class="text-danger">$49.99</span> <span class="badge badge-success">Save $5</span></p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="bg-dark text-light py-4">
  <div class="container text-center">
    <p>&copy; 2024 E-Commerce. All Rights Reserved.</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </div>
</footer>

<!-- Bootstrap JS, jQuery, Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>