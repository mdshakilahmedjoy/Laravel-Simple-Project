<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Order</title>
</head>
<body>
    <h2>Add New Order</h2>

    <a href="<?php echo route('all.order'); ?>"> 
        <button style="background-color:gray; color:white; margin-left:100px" >All Order</button> 
    </a><br><br>
    
    <form action="<?php echo url('/insert-order'); ?>" method="post">
        <?php echo csrf_field(); ?>
        Title : <input type="text" name="title" placeholder="Enter Your Title"><br><br>
        Details: <textarea name="details" cols="30" rows="10" placeholder="Enter Your Details"></textarea><br><br>
        <button>Submit</button>
    </form>
</body>
