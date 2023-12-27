@extends('layout.master')
@section('header')
    <div class="text-center my-5">
        <h1 class="fw-bolder">About Page!</h1>
        <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
    </div>
@endsection


@section('content')
    <h2>This is About Area</h2>

    <x-header>
        <h4>This is Slot</h4>

        <x-slot:title>
            <h5 style="color: red;">This is name slot</h5>
        </x-slot:title>
    </x-header>
@endsection