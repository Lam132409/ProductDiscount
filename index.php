<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            width: 170px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" >
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"><br>
            <label>List Price:</label>
            <input type="number" name="price"><br>
            <label>Discount Percent:</label>
            <input type="number" name="discount_percent">(%)<br>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" onclick="" value="Calculate Discount">
        </div>
    </form>

    <?php
          if($_SERVER["REQUEST_METHOD"] =="POST"){
                $price = $_POST["price"];
                $discount_percent = $_POST["discount_percent"];
                $discount_Amount = ($price*$discount_percent)/100;
                $discountprice = $price - $discount_Amount;
                echo $discount_Amount;
                echo "<br>";
                echo $discountprice;
}
    ?>
</div>
</body>
</html>
