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
  padding-right:40px;
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
    <a href="index.php" ><img class="img-responsive2"
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
        <a class="dropdown-item" href="Clothes.php">Clothes</a>

        <a class="dropdown-item" href="Accessories.php">Accessories</a>


        <a class="dropdown-item" href="Decor.php">Decor</a>
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
<br>
<h1>Clothes Section</h1>
<br>
<br>
<div class="container">
  <div class="row" style="padding-left:100px;">

<figure>
  <img src="img/Women2.jpg" style=" padding-left:10px; padding-right:10px;" width=300px; height=300px;>
  <figcaption><center><h3>Women</h3></center><a href="#"><center><a href="women.php" role="button" class="btn btn-primary">Buy Now</a></center></a></figcaption>
</figure>


<figure>
  <img src="img/men.jpg" style=" padding-left:10px; padding-right:10px;" width=300px; height=300px;>
  <figcaption><center><h3>Men</h3></center><a href="#"><center><a href="men.php" role="button" class="btn btn-primary">Buy Now</a></center></a></figcaption>
</figure>


<figure>
  <img src="img/kids.jpg" style=" padding-left:10px; padding-right:10px;" width=300px;  height=305px;>
  <figcaption><center><h3>Kids</h3></center><center><a href="kids.php" role="button" class="btn btn-primary ">Buy Now</a></center></figcaption>
</figure>
</div>
</div>
</div>
</body>
</html>
