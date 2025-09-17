<?php
session_start();
require_once 'connection.php';


// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $pid = $_GET['pid'];
                $query = "SELECT * FROM add_menu WHERE Menu_id=" . $pid;
                $result = mysqli_query($con, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['Menu_id'] => [
                            'Description' => $product['Description'],
                            'Image' => $product['Image'],
                            'Menu_id' => $product['Menu_id'],
                            'quantity' => $_POST['quantity'],
                            'Price' => $product['Price'],
                              'Title' => $product['Title'],

                         
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['Menu_id'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['Menu_id'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                }
                            }
                        } else {
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            }
            break;
        case 'remove':
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['Menu_id'] == $key) {
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);
            break;
    }
}

?>
<?php include'common/header.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
 
<div class="container py-3">
    <div class="d-flex justify-content-between mb-2">
        <h3>Cart</h3>
        <a class="btn btn-danger" href="cup.php?action=empty">All Item Remove</a>

    </div>

     
    <div class="row">
        <?php
            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="table">
            <tbody>
            <tr>
                <th class="text-left">Image</th>
                <th class="text-left">Name</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Price</th>
                <th class="text-right">Total Price</th>
                <th class="text-center">Remove</th>
            </tr>
            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['Price'];
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="../admin/upload/<?= $item['Image'] ?>" alt="<?= $item['Description'] ?>" class="img-fluid" width="100">
                            <?= $item['Title'] ?>
                        </td>
                        <td class="text-left"><?= $item['Description'] ?></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">₹<?= number_format($item['Price'], 2) ?></td>
                        <td class="text-right">₹<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="cup.php?action=remove&Menu_id=<?= $item['Menu_id']; ?>" class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["Price"]*$item["quantity"]);
                }
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <?php  $_SESSION['fororder']=$total_price;
?>
                    <td></td>
                </tr>

            <?php }

                ?>
            </tbody>
        </table>
    </div>


    <!-- first done this -->
    <div class="row">
        <div class="col-md-12">
            <h1>Products List</h1>
            <div class="d-flex">
                <div class="card-deck">
                    <?php
                    $query = "select * from add_menu where Category='Cup ice-cream'";
                    $product = mysqli_query($con, $query);
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) { ?>
                            <form action="cup.php?action=add&pid=<?= $row['Menu_id']; ?>" method="post">
                                <div class="card" style="width:14rem">
                                  <img class="card-img-top"
                                         src="../admin/upload/<?= $row['Image']; ?>"
                                         alt="<?= $row['Description']; ?>"
                                         width="200px" height="200px">
                                    <div class="card-header d-flex justify-content-between"180>
                                        <span><?= $row['Description']; ?></span>
                                        <span>₹<?= number_format($row['Price'], 2); ?></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <input type="text" name="quantity" value="1" size="2">
                                        <input type="submit" value="Add to Cart" class="btn btn-success btn-sm">
                                    </div>
                                </div>
                            </form>
                        <?php }
                    } else {
                        echo "no products available";
                    }
                    ?>
                    
                    

<div class="container py-3">
    <div class="d-flex center-content-between mb-2">
       
        <a class="btn btn-danger" href="order1.php">Place Order </a>
        <!-- <a class="btn btn-danger" href="order1.php?Menu_id=<?php echo $row->Menu_id;?>">Place Order </a> -->

    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

