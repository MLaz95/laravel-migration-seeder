@extends('layouts/app')

@section('content')

<main>

    <h1 class="text-center py-3 bg-danger text-white mb-5">Trains On {{$trains[0]->Data_partenza}}</h1>

    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 row-gap-3">
            @foreach ($trains as $train)
            <div class="col">
                <div class="rounded-4 bg-danger text-white h-100">
                    <div class="d-flex p-2 justify-content-between bg-white text-black rounded-4 border border-danger">
                        <div class="text-capitalize">{{$train->Azienda}}</div>
                        <div>
                            <span>Cars: {{$train->Numero_Carrozze}}</span>
                            Train &numero; {{$train->Codice_Treno}}
                        </div>
                    </div>
                    <div class="d-flex p-4 justify-content-between align-items-center">
                        <div>
                            <h4>Partenza</h4>
                            <h5 class="text-capitalize">{{$train->Stazione_partenza}}</h5>
                            <h5>{{$train->Orario_partenza}}</h5>
                        </div>

                        <div class="fs-3">&rarr;</div>

                        <div class="text-end">
                            <h4>Arrivo</h4>
                            <h5 class="text-capitalize">{{$train->Stazione_arrivo}}</h5>
                            <h5>{{$train->Orario_arrivo}}</h5>
                        </div>

                    </div>
                    

                </div>
            </div>   
            @endforeach
        </div>
    </div>
</main>
    
@endsection