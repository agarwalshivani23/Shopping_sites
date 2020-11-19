<?php 
include 'includes/connect2.php';
    @$product_id = $_GET['product_id'];
    if($product_id == "")
    {
        echo "Somthing Went Wrong........";
    }
 else {
    $query = mysqli_query($conn, "SELECT * FROM tbl_product WHERE p_id = '$product_id'");
    $row = mysqli_fetch_array($query);
        
        $named = $row['name'];
        $imaged = $row['image'];
        $priced = $row['price'];

        $x1 = "INSERT INTO cart (id, p_id, name, image, price) VALUES (NULL, '$product_id', '$named', '$imaged', '$priced')";
        if(mysqli_query($conn, $x1))
        {
		header('location:women.php');
        }
        else
            {
                 echo "Somthing went wrong";
            }
    }
    
            
?>




