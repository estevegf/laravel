@extends('layout')

@section('title', 'Education')

@section('content')

    @include('common.banner', ['imageUrl' => $educationBanner])

    <div class="container">
        <h1>Hello Education Laravel</h1>
        <p>Laravel have {{$stars}} stars on github</p>
    </div>
@endsection
