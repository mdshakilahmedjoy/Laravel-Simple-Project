<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit Order</h2>
    
    <form action="<?php echo url('/update-order/'.$edit->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="put">
        
        Title : <input type="text" name="title" value="<?php echo $edit->title ?>"><br><br>
        Details: <textarea name="details" cols="30" rows="10"> <?php echo $edit->details ?> </textarea><br><br>
        <button>Update</button>
    </form>
</body>
</html>