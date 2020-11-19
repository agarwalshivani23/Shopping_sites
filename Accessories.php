<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
a{ color:#808080;


}
h1{
  font-style: italic;
  text-align: center;
  color: #808080;
}


.thumbnail
{margin-left:auto;
  margin-right:auto;
  display:block;
color: #808080;
  margin:auto;
  padding-right:30px;
  padding-left:40px;
}

.navbar a {
  float: left;
  padding: 3px;
  color: #808080;
  text-decoration: none;
  font-size: 17px;
}



 </style>
<body>
<h2 class="navbar-brand brand-name">
    <a href="index.php"><img class="img-responsive2"
                                 src="img/logo2.png"></a>
  </h2>
<nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">


  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
    </li>


    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Categories
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="clothes.php">Clothes</a>

          <a class="dropdown-item" href="Accessories.php">Accessories</a>


          <a class="dropdown-item" href="decor.php">Decor</a>
          <a class="dropdown-item" href="Stationary.php">Stationary</a>
          <a class="dropdown-item" href="toys.php">Pets&Toys</a>

      </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
    </li>


  </ul>
  <div class="navbar ">
    <a  href="#"><i class="fa fa-fw fa-user"></i> </a>
    </div>
</nav>
<br>
<h1>Accessories</h1>
<br>
<br>
<div class="container" >
    <div class="row" >
        <div class="col-xs-4">
            <a   class="thumbnail" >

            <img src="img/bangles.jpg"  class="rounded" class="img-responsive" alt="..." width=300px; height=200px;>
              <div class="caption">
                <h3>Jute Bangles</h3>
                <p>Rs.300.00</p>
                <p><strong>Quantity</strong></p>

                <input type="text" name="quantity" class="form-control" value="1">
                  <p><center><a href="login.html" role="button" class="btn btn-primary " style="padding-left:50px; padding-right:50px;">Add to cart</a></center></p>
                    <p><center><a href="login.html" role="button" class="btn btn-success " style="padding-left:50px; padding-right:50px;">Buy Now</a></center></p>
              </div>
            </a>
        </div>
        <div   class="col-xs-4">
            <a  class="thumbnail">
            <img src="img/bobby pins.jpg"   alt="..." class="rounded" class="img-responsive" width=300px; height=200px;>
            <div class="caption">
              <h3>Fabric Bobby Pins</h3>
              <p>Rs.200.00</p>
              <p><strong>Quantity</strong></p>

              <input type="text" name="quantity" class="form-control" value="1">
                <p><center><a href="login.html" role="button" class="btn btn-primary " style="padding-left:50px; padding-right:50px;">Add to cart</a></center></p>
                  <p><center><a href="login.html" role="button" class="btn btn-success" style="padding-left:50px; padding-right:50px;">Buy Now</a></center></p>
            </div>
            </a>
        </div>
        <div   class="col-xs-4">
            <a  class="thumbnail">
            <img src="img/earrings2.jpeg"  alt="..." class="rounded" class="img-responsive" width=300px;  height=200px; >
            <div class="caption">
              <h3><p>Earrings</p></h3>
              <p>Rs.260.00</p>
              <p><strong>Quantity</strong></p>

              <input type="text" name="quantity" class="form-control" value="1">
                <p><center><a href="login.html" role="button" class="btn btn-primary " style="padding-left:50px; padding-right:50px;">Add to cart</a></center></p>
                  <p><center><a href="login.html" role="button" class="btn btn-success " style="padding-left:50px; padding-right:50px;">Buy Now</a></center></p>
            </div>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-4">
            <a    class=" thumbnail" >

            <img src="img/jewel set.jpg"  class="rounded" class="img-responsive" alt="..." width=300px; height=200px;>
              <div class="caption">
                <h3><p>Necklace set</p></h3>
                <p>Rs.900.00</p>
                <p><strong>Quantity</strong></p>

                <input type="text" name="quantity" class="form-control" value="1">
                  <p><center><a href="login.html" role="button" class="btn btn-primary " style="padding-left:50px; padding-right:50px;">Add to cart</a></center></p>
                    <p><center><a href="login.html" role="button" class="btn btn-success " style="padding-left:50px; padding-right:50px;">Buy Now</a></center></p>
              </div>
            </a>
        </div>
        <div   class="col-xs-4">
            <a   class="thumbnail">
            <img src="img/clips.jpg"   alt="..." class="rounded" class="img-responsive" width=300px; height=200px;>
            <div class="caption">
              <h3><p>Bow Clips</p></h3>
              <p>Rs.300.00</p>
              <p><strong>Quantity</strong></p>

              <input type="text" name="quantity" class="form-control" value="1">
              <p><center><a href="login.html" role="button" class="btn btn-primary " style="padding-left:50px; padding-right:50px;">Add to cart</a></center></p>
                <p><center><a href="login.html" role="button" class="btn btn-success " style="padding-left:50px; padding-right:50px;">Buy Now</a></center></p>
            </div>
            </a>
        </div>
        <div   class="col-xs-4">
            <a  class="thumbnail">
            <img src="img/headband.jpg"  alt="..." class="rounded" class="img-responsive" width=300px;  height=200px; >
            <div class="caption">
              <h3><p>headband</p></h3>
              <p>Rs.360.00</p>
              <p><strong>Quantity</strong></p>

              <input type="text" name="quantity" class="form-control" value="1">
                <p><center><a href="login.html" role="button" class="btn btn-primary " style="padding-left:50px; padding-right:50px;">Add to cart</a></center></p>
                  <p><center><a href="login.html" role="button" class="btn btn-success " style="padding-left:50px; padding-right:50px;">Buy Now</a></center></p>
            </div>
            </a>
        </div>

    </div>
</div>

</body>
</html>
