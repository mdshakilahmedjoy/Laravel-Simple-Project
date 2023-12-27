@extends('backend.layout.master')

@section('title', 'Edit')

@section('content')
    <div class="row">

        <!-- Show Error Message (Option-1) -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="col-md-6">
            <a class="btn btn-info btn-sm" href="{{ route('categories.index') }}">All Category</a>
            <h3>Edit Category!</h3>
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Category Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection
