<?php
if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    $connection = mysqli_connect("localhost", "root", "Rob.1323", "xpod");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM cart WHERE product_id = $productId";

    if (mysqli_query($connection, $sql)) {
        echo "Item removed successfully";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
} else {
    echo "Invalid request";
}
?>
