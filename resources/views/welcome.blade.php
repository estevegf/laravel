@extends('layout')

@section('title', 'Home')

@section('content')

    @include('common.banner', ['imageUrl' => $welcomeBanner])

    <div class="container">
        <h1>Hello Laravel</h1>
    </div>
@endsection
