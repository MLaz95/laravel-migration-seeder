@extends('layouts/app')

@section('content')

<main>

    <h1 class="text-center py-3 bg-danger text-white mb-5">Trains On {{$trains[0]->departure_date}}</h1>

    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 row-gap-3">
            @foreach ($trains as $train)
            <div class="col">
                <div class="rounded-4 bg-danger text-white h-100">
                    <div class="d-flex p-2 justify-content-between bg-white text-black rounded-4 border border-danger">
                        <div class="text-capitalize">{{$train->company}}</div>
                        <div>
                            <span>Cars: {{$train->number_cars}}</span>
                            Train &numero; {{$train->train_code}}
                        </div>
                    </div>
                    <div class="d-flex p-4 justify-content-between align-items-center">
                        <div>
                            <h4>Partenza</h4>
                            <h5 class="text-capitalize">{{$train->departure_station}}</h5>
                            <h5>{{$train->departure_time}}</h5>
                        </div>

                        <div class="fs-3">&rarr;</div>

                        <div class="text-end">
                            <h4>Arrivo</h4>
                            <h5 class="text-capitalize">{{$train->arrival_station}}</h5>
                            <h5>{{$train->arrival_time}}</h5>
                        </div>

                    </div>
                    

                </div>
            </div>   
            @endforeach
        </div>
    </div>
</main>
    
@endsection