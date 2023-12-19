@extends('layouts.app')

@section('title', 'Comic detail')

@section('content')

<main>
    <section class="container">
        <h1>Comic Details</h1>
        <div class="row gy-4">
            <div class="col-12">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{!! $comic['description'] !!}</p>
                        <p>
                          Price: {{$comic['price']}} | Series: {{$comic['series']}} | Sale Date: {{$comic['sale_date']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
