<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    
    <form action="{{ url('/update-post/'.$edit->id)}}" method="post">
        @csrf
        @method('put')
        
        Title : <input type="text" name="title" value="{{ $edit->title }}"><br><br>
        Details: <textarea name="details" cols="30" rows="10"> {{ $edit->details }}</textarea><br><br>
        <button>Update</button>
    </form>
</body>
</html>