@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('content')

    <main class="row justify-content-center">

        @foreach ($movies as $item)
            <div class="col-3 m-2 card" style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $item['title'] }} </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-center">{{ $item['original_title'] }}</h6>
                    <div class="row text-center text-capitalize mt-4">
                        <div class="col">
                            <h6 class="text-info-emphasis">Nationality</h6>
                            <p class="card-text">{{ $item['nationality'] }}</p>
                        </div>
                        <div class="col">
                            <h6 class="text-info-emphasis">Date</h6>
                            <p class="card-text">{{ $item['date'] }}</p>
                        </div>
                        <div class="col">
                            <h6 class="text-info-emphasis">Vote</h6>
                            <p class="card-text">{{ $item['vote'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </main>


@endsection
