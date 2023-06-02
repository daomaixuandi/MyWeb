<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <script src="JavaScript/JSscript.js"></script>  <!-- Set Menu height = Main height (option) -->
</head>
<body>
    <div id="header">
        Header
        <marquee behavior="" direction="left" scrolldelay="200">This is my first website</marquee>
    </div>
    
    <div id="menu">
        <p class="menulist"><a class="menu" href=".">Home</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Introduction">Introduction</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Product">Product</a></p>
        <p class="menulist">Help</p>
        <p class="menulist"><a class="menu" href="index.php?page=Registration">Registration</a></p>
    </div>
    
    <div id="main">
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] === "Introduction")
                    require_once ("Introduction.html");
                else if($_GET['page'] === "Registration")
                    require_once ("Registration.php");
                else if($_GET['page'] === "Product")
                    require_once ("Product.php");
                else if($_GET['page'] === "ProductDetail")
                    require_once ("ProductDetail.php");
            }
        ?>
    </div>
    
    <div id="footer">
        <p>Footer</p>
        &#169; copyright TrietNM 2022
    </div>

</body>
</html>