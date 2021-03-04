<?php 

include_once "functions.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $errors=[];


    if(empty($name)){
        $errors[]="Name is required";
    }elseif(!is_string($name)){
        $errors[]="Name must be string";
    }elseif(strlen($name)<5 || strlen($name)>255){
        $errors[]="Name must be less than 255 character and more than 5 characters";
    }

    if(!is_string($description)){
        $errors[]="Description must be string";
    }

    if(empty($price)){
        $errors[]="Price is required";
    }elseif($price<0){
        $errors[]="Price minimum is 0";
    }




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>My Data</h1>
    <?php if(empty($errors)){?>
        <h2>Name: <?php echo $name; ?></h2>
        <?php if(!empty($description)){?><h2>Description: <?php echo $description; ?></h2><?php }?>
        <h2>Price: <?php echo $price; ?> and after discount: <?php echo getPriceWithDiscount($price);?></h2>
    <?php }else{ ?>
    <ul>
    <?php foreach($errors as $error){?>
        <li><?php echo $error;?></li>
    <?php }?>
    </ul>
    <?php }?>

</body>
</html>