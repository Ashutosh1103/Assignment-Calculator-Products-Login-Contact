<?php
$products = [
    ["id" => 1, "pname" => "Shoes", "price" => "$345.00", "quantity" => "4", "image" => "Images/product10.jpg"],
    ["id" => 2, "pname" => "Tablet", "price" => "$400.00", "quantity" => "10", "image" => "Images/product9.jpg"],
    ["id" => 3, "pname" => "Laptop", "price" => "$500.00", "quantity" => "5", "image" => "Images/product8.jpg"],
    ["id" => 4, "pname" => "Phone", "price" => "$200.00", "quantity" => "2", "image" => "Images/product7.jpg"],
    ["id" => 5, "pname" => "Jacket", "price" => "$100.00", "quantity" => "7", "image" => "Images/product6.jpg"],
    ["id" => 6, "pname" => "T-shirt", "price" => "$75.00", "quantity" => "9", "image" => "Images/product5.jpg"],
    ["id" => 7, "pname" => "Cap", "price" => "$50.00", "quantity" => "3", "image" => "Images/product4.jpg"],
    ["id" => 8, "pname" => "Headphone", "price" => "$125.00", "quantity" => "1", "image" => "Images/product3.jpg"],
    ["id" => 9, "pname" => "Bag", "price" => "$45.00", "quantity" => "8", "image" => "Images/product2.jpg"],
    ["id" => 10, "pname" => "Watch", "price" => "$545.00", "quantity" => "4", "image" => "Images/product1.jpg"],

]
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php 
    include("head.php");
    ?>


    <title>Products</title>
</head>

<body class="bg-light">


    <?php
    include("nav.php")
    ?>
    

    <div class="album py-5 bg-light mt-5">
        <div class="container-fluid">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                foreach ($products as $product) {
                    echo "<div class='col my-3'>
                        <div class='card shadow-sm'>
                            <img class='bd-placeholder-img card-img-top' src='".$product["image"]."' width='100%' height='225' />

                            <div class='card-body'>
                                <h5 class='card-title'>".$product["pname"]."</h5>
                                <p class='card-text'>Price: ".$product["price"]."</p>
                                <p class='card-text'>Quantity: ".$product["quantity"]."</p>
                            </div>
                        </div>
                    </div>";
                }
                ?>

            </div>


<?php 
 include("footer.php");
 ?>
</body>

</html>