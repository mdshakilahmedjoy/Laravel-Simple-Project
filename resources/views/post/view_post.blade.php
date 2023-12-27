<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Single Post</title>
</head>
<body>
    <h2 style="text-decoration: middle"> Details Post_Id : {{ $view->id }} </h2>

    <div style="padding-left:150px">
        <h3> Id : {{ $view->id }} </h3>
        <h3> Title : {{ $view->title }} </h3>
        <h3> Details: {{ $view->details }} </h3>
    </div>
</body>
</html>