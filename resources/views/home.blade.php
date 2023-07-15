@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h1>Comics</h1>

        <div class="d-flex row">
            @foreach ($fumetti as $fumetto)
                <div class="card my-3">
                    <h2>
                        {{ $fumetto['title'] }}
                    </h2>
                    <p>
                        {{ $fumetto['description'] }}
                    </p>
                    <div class="column d-flex justify-content-between">
                        <span>
                            {{ $fumetto['series'] }}
                        </span>
                        <span>
                            {{ $fumetto['type'] }}
                        </span>
                        <span>
                            {{ $fumetto['sale_date'] }}
                        </span>
                        <span>
                            {{ $fumetto['price'] }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
