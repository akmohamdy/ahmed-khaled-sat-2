<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    
<form action="handle-add-product.php" method="post">
    <input type="text" name="name" placeholder="name"><br><br>
    <textarea name="description" >Description...</textarea><br><br>
    <input type="number" name="price" placeholder="Price"><br><br>
    <input type="submit" value="submit" name="submit"><br>
</form>

</body>
</html>