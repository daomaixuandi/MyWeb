<?php
    $id = $_GET['id'];
    require_once("admin/DatabaseConnect.php");
    
    $sql = "SELECT * FROM product WHERE product_id='$id'";
    $result = $conn -> query($sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product detail</title>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <td width="20%">
                <b>Product name:</b>
            </td>
            <td>
                <?php
                    echo $row['product_name'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>Product image:</b>
            </td>
            <td>
                <img src="admin/<?php echo $row['product_image']; ?>" height="200px">
            </td>
        </tr>
        <tr>
            <td>
                <b>Product price:</b>
            </td>
            <td>
                <?php echo $row['product_price']; ?> VND
            </td>
        </tr>
        <tr>
            <td>
                <b>Product desciption:</b>
            </td>
            <td>
                <?php echo $row['product_description']; ?>
            </td>
        </tr>
    </table>
</body>
</html>