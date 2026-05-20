<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>

   

  
<?php
    $page = $_GET['page_layout'] ?? 'dashboard';

    switch ($page) {
        case 'product':
            include("product.php");
             break;
            break;

        case 'category':
            include("category.php");
            break;

        case 'cart':
            include("cart.php");
            break;

        case 'checkout':
            include("checkout.php");
            break;
        case 'promo':
            include("promo.php");
            break;

         case 'contact':
            include("contact.php");
            break;

         case 'product_detail':
            include("product_detail.php");
            break;
        default:
           include("home.php");
    }
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
