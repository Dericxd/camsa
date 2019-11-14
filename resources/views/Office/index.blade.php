@extends('layouts.app')

@section('content')


        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <table class="table table-hover table-dark">
                    <thead>

                    <tr class="bg-primary">
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Numero</th>
                        <th scope="col" class="text-center">Empresa</th>
                        <th scope="col" class="text-center">Numero de contacto</th>
                        <th scope="col" class="text-center">Numero de sello</th>
                        <th scope="col" class="text-center">Conductor</th>
                        <th scope="col" class="text-center">Vehiculo</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offices as $office)

                        <tr>
                            <th class="text-center"> {{$office->id}} </th>
                            <th class="text-center"> {{ $office->number}} </th>
                            <th class="text-center"> {{$office->business_name}} </th>
                            <th class="text-center"> {{ $office->seal_number }} </th>
                            <th class="text-center"> {{ $office->contact_phone }} </th>
                            <th class="text-center">

                                @foreach($drivers as $driver)
                                    @if($office->driver_id == $driver->id)

                                        {{$driver->first_name, $driver->last_name}}

                                    @endif
                                @endforeach

                            </th>
                            <th class="text-center">

                                @foreach($vehicles as $vehicle)
                                    @if($office->car_plate == $vehicle->id)

                                        {{$vehicle->model}}

                                    @endif
                                @endforeach

                            </th>
                            <th class="text-center">
                                <a href="#" class="btn btn-outline-warning " >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger">
                                    <span class="fa fa-bars"></span>
                                </a>
                                <a href="#" class="btn btn-outline-info">
                                    <i class="fa fa-thumbs-up"></i>
                                </a>
                            </th>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {!! $offices->render() !!}
                </div>

            </div>
        </div>
    </div>

@endsection

