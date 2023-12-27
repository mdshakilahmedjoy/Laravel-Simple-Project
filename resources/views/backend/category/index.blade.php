@extends('backend.layout.master')

@section('title', 'All')

@section('content')
    <div class="row">
        <div class="col-md-6" style="padding:20px;">

            <a class="btn btn-primary btn-sm" href="{{ url('/') }}"> Home Page </a>
            <a class="btn btn-info btn-sm" href="{{ route('categories.create') }}">Create Category</a><br><br>

            <!-- Session Flash Message (Option-1) -->
            {{-- @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}

            <!-- Session Flash Message (Option-2) -->
            {{-- @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif --}}

            <!-- Session Flash Message (Option-3) -->
            @if (Session::has('success'))
                <div class="alert alert-success" id="alert">
                    {{ Session::get('success') }}
                </div>
            @endif


            <h3>All Category!</h3>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            {{-- <a class="btn btn-info btn-sm" href="{{ url('categories.edit/'.$category->id) }}"> Edit </a> --}}
                            <a class="btn btn-info btn-sm" href="{{ route('categories.edit',$category->id) }}"> Edit </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('categories.show',$category->id) }}"> View </a>
                            {{-- <a class="btn btn-success btn-sm" href="{{ route('categories.destroy',$category->id) }}"> Delete </a> --}}
                            <form class="d-inline-block" action="{{ route('categories.destroy',$category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-success btn-sm" onclick="return confirm('Are you sure to delete data?')">Delete</button>
                            </form>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
