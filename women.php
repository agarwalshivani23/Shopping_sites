<?php
include 'includes/connect2.php';

?>
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
#products_box {
width:auto; 
text-align:center;
margin-left:30px;
margin-bottom:10px; 
}

  #single_product {float:left; margin-left:35px; padding:30px;}


</style>
<body>
<h2 class="navbar-brand brand-name">
    <a href="index.php"><img class="img-responsive2"src="img/logo2.png"></a>
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
<br>
<h1>Women's Section</h1>
<br>
<br>
<div class="content_wrapper">
    <div class="row" >
      
        <div class="col-xs-4">
            <a   class="thumbnail" >
        <form method="POST" action="#">
                <?php
                $sql1="select * from tbl_product";
                $result1= mysqli_query($conn, $sql1);
               while($row1 = mysqli_fetch_array($result1))
                       {
                        $p_idd = $row1['p_id'];
                        $named = $row1['name'];
                        $imaged = $row1['image'];
                        $priced = $row1['price'];
                ?> 
            <div id="single_product">
                <img src="img/<?php echo $row1['image'];?>"   class="rounded" class="img-responsive" alt="..." width=300px; height=300px;>
              <div class="caption">
                <h3><?php echo $row1['p_id']; ?></h3>
                <h3><?php echo $row1['name']; ?></h3>
                <p><i class="fa fa-inr"></i>. <?php echo $row1['price'] ;?></p>
                <p><strong>Quantity</strong></p>
                <div class="btn-group">
                    
                </div>
                    
                <p><center><a href="cart.php?product_id=<?php echo $row1['p_id']; ?>" class="btn btn-warning ">Add to cart <i class="fa fa-shopping-cart"></i></a></center></p>
              
              <p><center><a href="view_cart.php" role="button" class="btn btn-primary form-control">Buy Now</a></center></p>
            </div>
              </div>
             <?php } ?>
            </form>
            </a>
        </div>
      </div>
    </div>
   
</body>
</html>