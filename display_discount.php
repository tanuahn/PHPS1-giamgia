<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        #content{
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input{
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input{
            float: left;
            margin-bottom: .5em;
        }
        br{
            clear: left;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $sanpham = $_POST["description"];
    $gia = $_POST["price"];
    $giam = $_POST["discount_percent"];
    $sogiam = ($_POST["price"] * $_POST["discount_percent"]) / 100;
    $saugiam = $_POST["price"] - $sogiam;
//    echo "<h2>San Pham: <span style='color: blue'>" . $sanpham ."</span></h2>";
//    echo "<h2>Duoc giam: <span style='color:red'>" . $sogiam . "</span></h2>";
//    echo "<h2>Gia sau khi giam: <span style='color:aqua'>" . $saugiam . "</span></h2>";
}
?>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo "$sanpham"?></span><br/>
    <label>Price: </label>
    <span><?php echo "$gia"?></span><br/>
    <label>Discount Percent: </label>
    <span><?php echo "$sogiam"?></span><br/>
    <label>Discount Amount: </label>
    <span><?php echo "$giam"?></span><br/>
    <label>Discount Price: </label>
    <span><?php echo "$saugiam"?></span><br/>
</div>
</body>
</html>