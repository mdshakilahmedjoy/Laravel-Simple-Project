<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Single Order</title>
</head>
<body>
    <h2 style="text-decoration: middle"> Details Order_Id : <?php echo $view->id ?> </h2>

    <div style="padding-left:150px">
        <h3> Id : <?php echo $view->id ?> </h3>
        <h3> Title : <?php echo $view->title ?> </h3>
        <h3> Details: <?php echo $view->details ?> </h3>
    </div>
</body>
</html>