<?php
include 'includes/connect2.php';
session_start();
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
   <link href="css/style.css" rel="stylesheet">
</head>
<style>
.carousel-inner img {
     width: 100%;
    max-height: 900px;
     margin:auto;


 }
 .carousel-content {
  position: absolute;
  bottom: 10%;
  left: 35%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
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
    </li></ul>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"style="margin-left:800px;">User</button>
    <div class="modal" id="myModal" data-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">       
                E_mail  :<input type="text" name="e_mail"><br><br>
                Password:<input type="password" name="password"><br><br>
                <input type="submit" value="Login">
            </form>
        </div>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $e_mail= filter_input(INPUT_POST, 'e_mail');
        $password= filter_input(INPUT_POST, 'password');
        $e_mail= stripcslashes($e_mail);
        $password= stripcslashes($password);
   $result= mysqli_query($conn,"select * from user where e_mail='$e_mail'and password='$password'")
           or die("Failed to query database".mysqli_error($conn));
   $row= mysqli_fetch_array($result);
   if($row['e_mail']==$e_mail && $row['password']==$password){
       if(isset($row['username']))
        header("location: index.php");}}
        ?>
        <!-- Modal footer -->
      
            <center> <h4>Sign up for free?</h4></center>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mysubModal">Sign Up</button>
              <div class="modal fade" id="mysubModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         
         <h4 class="modal-title" >Sign up</h4>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         
       </div>
       <div class="modal-body">
         <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
             Name : <input type="text" name="name"><br><br>
             E_mail: <input type="text" name="e_mail"><br><br>
             Password: <input type="password" name="password"><br><br><br><br>
             <a href="thank.php"><input type="submit" value="Submit"></a>
         </form>
       </div>
         <?php
         if($_SERVER["REQUEST_METHOD"]=="POST"){
         $name= filter_input(INPUT_POST,'name');
         if(!empty ($name)){
       if(!empty ($e_mail)){
    if(!empty ($password)){
       $sql = "INSERT INTO user (name,e_mail,password) values ('$name','$e_mail','$password')";
       $result= mysqli_query($conn, $sql);
       if($result){
           header("location:index.php");
         }}}}}
       ?>

     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
      </div>
    </div>
             </div>             
</nav>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/pen holders.jpg" alt="..." width="400" height="300">
      <div class="carousel-content">

       <p >Handmade pen holder that adds an artsy-craftsy look.</p>

     </div>
    </div>
    <div class="carousel-item">
        <img src="img/wall hanging.jpg" alt="...." width="400" height="300">
      <div class="carousel-content">

       <p >DIY wall hanging that adds a beautiful ambiance to your home. </p>

     </div>
    </div>
    <div class="carousel-item">
        <img src="img/bottles deco.jpg" alt="" width="400" height="300">
      <div class="carousel-content">

       <p >DIY bottles and thread decorative piece that fancify your home. </p>

     </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<br>
<br>
<h1><p align="center"><strong>About Us</strong></p></h1>
<h3><p align="center"></p></h3>
<hr  align="center">
<br>
<br>
<br>
<h5><p align="center"><strong>Think waste-free living is depriving, time consuming, costly,</strong></p>
<p align="center"><strong>  or simply reserved for hermits living in the boondocks? Think again!</strong></p>
<p align="center">  Zero Waste is a philosophy that encourages the redesign of resource life cycles </p>
<p align="center">so that all products are reused. The goal is for no trash to be sent </p>
  <p align="center"> to landfills, incinerators, or the ocean. The process recommended is one similar </p>
  <p align="center"> to the way that resources are reused in nature.</p>
</p></h5>
<br>
<br>
<br>
<br>
<center>
  <div  class="row">
  <div class="column">

      <img src="img/diary.jpg" width=30%; height=80%;>
      <img src="img/keychain.jpg" width=30%; height=80%;>
      <img src="img/dream catcher.jpg" width=30%; height=80%;>
  </div>
</div>
</center>
<h5>

<p align="center"> At <strong>R3</strong>, we tried to come up with a solution  </p>
<p align="center"> so that we can all benefit from a very noble deed.</p>
  <p align="center">Together we can save our planet and live sustainably. </p>
  <p align="center">So, come join us in our journey and save mother nature.</p>
</p></h5>
<br>
<br>

<div class="jumbotron">
  <div class="container">
    <center>
                      <p>Copyright &copy; <strong>R3</strong>. All Rights Reserved  |  Contact Us: +91 90000 00000</p>
                  </center>
  </div>
</div>

</body>
</html>