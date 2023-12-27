<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>
</head>
<body>
    <style>
        button{
            display: block;
            float: left;
        }
        .center {
            margin: auto;
        }
    </style>

    <h2>All Post</h2>

    <a href="<?php echo url('/'); ?>"> 
        <button style="background-color:gray; color:white; margin-left:100px" >Dashboard</button> 
    </a>
   
    <a href="{{ route('add.post')}}"> 
        <button style="background-color:gray; color:white; margin-left:100px" >Add Post</button> 
    </a><br><br>

    <table border="2px" width="80%" class="center">
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($show as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->details }}</td>
                <td> 
                    <a href="{{ url('edit-post/'.$row->id) }}"> <button>Edit</button> </a>
                    <a href="{{ url('view-post/'.$row->id) }}"> <button>View</button> </a>
                    {{-- <a href="{{ url('delete-post/'.$row->id) }}"> Delete </a>  --}}
                    <form action="{{ url('delete-post/'.$row->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>