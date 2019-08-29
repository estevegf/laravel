@extends('layout')

@section('title', 'Education - Laravel')

@section('content')

    @include('common.banner', ['imageUrl' => $educationBanner])

    <div class="container">
        <h1>Education</h1>
        <section class="center">
            @foreach ($education as $edu)
                @include('components.card', ['education' => $edu])
            @endforeach
        </section>
    </div>
@endsection
