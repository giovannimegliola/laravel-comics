@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>
    <section class="container">
        <button class="btn btn-primary my-3"><h1 style="text-transform: uppercase;">Current series</h1></button>
        <div class="row g-4 ">
            @foreach ($items as $item)

            <div class="col-12 col-md-4 col-lg-2">
                <div class="card">
                    <img src="{{ $item['thumb']}}" alt="{{ $item ['title']}}" >
                    <p >{{ $item ['title']}}</p>
                </div>
            </div>
            @endforeach
        </div>

    </section>

</main>

@endsection
