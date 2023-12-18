@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>
    <section class="container">
        <h1>Comics</h1>
        <div class="row">
            @foreach ($items as $item)

            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{ $item['thumb']}}" alt="{{ $item ['title']}}">
                </div>
            </div>
            @endforeach
        </div>

    </section>

</main>

@endsection
