<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php             
$product_description= filter_input(INPUT_POST,'product_description');
$list_price= filter_input(INPUT_POST,'list_price');
$discount_percent=filter_input(INPUT_POST,'discount_percent');

$discount=$list_price * $discount_percent *.01;
$discount_price=$list_price - $discount;

$list_price_sa= "$".number_format($list_price,2);
$discount_percent_sa=$discount."%";
$discount_sa= "$". number_format($discount,2);
$discount_price_sa="$". number_format($discount_price,2);


?>






    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_sa); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_sa); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($discount_sa); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($discount_price_sa); ?></span><br>
    </main>
</body>
</html>