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
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
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
<div>
    <form method="POST" action="#">
        <table id="ss">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>image</th>
                <th>price</th>
                <th>Remove</th>
            </tr>
            <?php
            $s = "SELECT * from cart";
            $re = mysqli_query($conn,$s);
            $total=0;
            while ($ro = mysqli_fetch_array($re)){ ?>
                <tr>
                    <?php $total+= $ro['price'];?>
                   <td> <?php echo $ro['id'];?> </td>
                   <td> <?php echo $ro['name'];?></td>
                   <td> <img src="img/<?php echo $ro['image'];?>"   class="rounded" class="img-responsive" alt="..." width=200px; height=200px;></td>
                   <td> <?php echo $ro['price'];?></td>    
                   
                   <td align="center"><a href="#" a="<?php echo $ro['id'];?>" class="btn btn-primary" href="#"role="button" target="_self">Remove</a></td>
                </tr>
            <?php } ?>
                
                <tr> 
                    <td colspan="4" align="right"><b>Sub Total:</b></td>
		    <td><?php echo "$" . $total;?></td>
		</tr>
        </table>
    </form>
</div>
</body>