@extends('backend.layout.master')

@section('title', 'Show Details')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card-header">
                <a class="btn btn-info btn-sm" href="{{ route('categories.index') }}">All Category</a>
            </div>
            <div class="card" style="text-align:center; padding:10%">
                <p>ID: {{ $category->id }}</p>
                <p>Nmae: {{ $category->name }}</p>
                <p>Description: {{ $category->name }}</p>
            </div>
        </div>
    </div>
@endsection