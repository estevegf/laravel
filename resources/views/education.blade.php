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

@section('scripts')
    <script src="{{ asset('js/lazysizes.js')}}"></script>
@endsection

<style>
    .card {
      display: inline-flex;
      width: 100%;
      min-height: 229px;
      align-items: center;
      margin: 0 0 2em 0;
      background-color: gainsboro;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
      border-radius: 5px;
    }

    .card-left {
      display: flex;
    }

    .information {
      margin: 0.6em;
    }

    .card-image {
      border-radius: 5px 0 0 5px;
    }

    @media (max-width: 500px) {
      .card {
        display: grid;
      }

      .card-image {
        border-radius: 5px 5px 0 0;
      }
    }
</style>
