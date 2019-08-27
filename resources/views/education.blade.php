@extends('layout')

@section('title', 'Education')

@section('content')

    @include('common.banner', ['imageUrl' => $educationBanner])

    <div class="container">
        <h2>Education</h2>
        <section class="center">
            @foreach ($education as $edu)
                @include('components.card', ['education' => $edu])
            @endforeach
        </section>
    </div>
@endsection
