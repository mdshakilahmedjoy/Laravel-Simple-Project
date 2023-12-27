<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Order</title>
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

    <h2>All Order</h2>
   
    <a href="<?php echo url('/'); ?>"> 
        <button style="background-color:gray; color:white; margin-left:100px" >Dashboard</button> 
    </a>

    <a href="<?php echo route('add.order'); ?>"> 
        <button style="background-color:gray; color:white; margin-left:100px" >Add Order</button> 
    </a><br><br>

    <table border="2px" width="80%" class="center">
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($show as $row) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->title; ?></td>
                <td><?php echo $row->details; ?></td>
                <td> 
                    <a href="<?php echo url('edit-order/'.$row->id) ?>"> <button>Edit</button> </a>
                    <a href="<?php echo url('view-order/'.$row->id) ?>"> <button>View</button> </a>
                    <!-- <a href="<?php #echo url('delete-order/'.$row->id) ?>"> Delete </a>  -->
                    <form action="<?php echo url('delete-order/'.$row->id) ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="delete">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>