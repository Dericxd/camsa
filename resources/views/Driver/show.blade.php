@extends('layouts.app', ['activePage' => 'driver-management', 'titlePage' => __('Gestion Conductores')])

@section('content')
    {{ dd($driver) }}
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-xl-6 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile-stats bg-gradient-default shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/argon/img/theme/team-4-800x800.jpg"
                                         class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4 rounded-right ">
                        <div class="d-flex justify-content-between">
                            {{--                            <button type="button" class="btn btn-sm bg-gradient-gray-dark text-white mr-4"--}}
                            {{--                                    data-toggle="modal" data-target="#exampleModal">--}}
                            {{--                                Conductor--}}
                            {{--                            </button>--}}
                            <i class="text-gray-dark mr-4 ml-4 fa fa-truck" style="font-size:25px"></i>
                            @if($driver)
                                <a data-toggle="modal" data-target="#exampleModal"
                                   class="btn btn-sm bg-gradient-gray-dark float-right text-white">
                                    Conductor
                                </a>
                            @else
                            @endif
                        </div>
                    </div>

                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <!--
                                            <div>
                                                <span class="heading">22</span>
                                                <span class="description">Friends</span>
                                            </div>
                                            <div>
                                                <span class="heading">10</span>
                                                <span class="description">Photos</span>
                                            </div>
                                            <div>
                                                <span class="heading">89</span>
                                                <span class="description">Comments</span>
                                            </div>
                                    -->
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-white">
                                {{ $car->brand }}
                            </h3>
                            <div class="h5 font-weight-800 text-white">
                                {{ $car->model }}
                            </div>
                            <div class="h5 mt-4 text-white">
                                <i class="ni business_briefcase-24 mr-2"></i>
                                Tipo - {{ $car->type }}
                            </div>
                            <div class="h5 mt-4 text-white">
                                <i class="ni business_briefcase-24 mr-2"></i>
                                Placa - {{ $car->plate }}
                            </div>
                            <div class="text-white mt-3 mb-5">
                                <i class="ni education_hat mr-2"></i>
                                <label class="badge badge-pill badge-success">
                                    {{ $car->status }}
                                </label>
                            </div>
                            <hr class="my-4">
                            <a href="{{route('vehicles.index')}}" class="btn btn-sm btn-white">{{ __('Regresar') }}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footers.auth')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-danger" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Condutor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!--    Datos del conductor     -->
                {{--                @foreach($driver as $d)--}}
                {{--                    @if($carId == $d->vehicle_id)--}}
                <div class="modal-body">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="card card-profile bg shadow ">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 order-lg-2">
                                        <div class="card-profile-image">
                                            <a href="#">
                                                <img
                                                    src="http://127.0.0.1:8000/argon/img/theme/team-4-800x800.jpg"
                                                    class="rounded-circle">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0 pt-md-4 mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <div
                                                class="card-profile-stats d-flex justify-content-center mt-md-5">
                                                <div>
                                                    <span class="heading">22</span>
                                                    <span class="description">Friends</span>
                                                </div>
                                                <div>
                                                    <span class="heading">10</span>
                                                    <span class="description">Photos</span>
                                                </div>
                                                <div>
                                                    <span class="heading">89</span>
                                                    <span class="description">Comments</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3>
                                            {{ $driver->first_name }}<span class="font-weight-light">, 27</span>
                                        </h3>
                                        <div class="h5 font-weight-300">
                                            <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                        </div>
                                        <div class="h5 mt-4">
                                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager -
                                            Creative Tim Officer
                                        </div>
                                        <div>
                                            <i class="ni education_hat mr-2"></i>University of Computer Science
                                        </div>
                                        <hr class="my-4">
                                        <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy
                                            — writes, performs and records all of his own music.</p>
                                        <a href="#">Show more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            {{--                    @endif--}}
            {{--                    @if(!$d->vehicle_id== null)--}}

            {{--                            <div class="modal-body">--}}

            {{--                            <div class="container-fluid">--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="card card-profile bg shadow ">--}}
            {{--                                        <div class="row justify-content-center">--}}
            {{--                                            <div class="col-lg-3 order-lg-2">--}}
            {{--                                                <div class="card-profile-image">--}}
            {{--                                                    <a href="#">--}}
            {{--                                                        <img--}}
            {{--                                                            src="http://127.0.0.1:8000/argon/img/theme/team-4-800x800.jpg"--}}
            {{--                                                            class="rounded-circle">--}}
            {{--                                                    </a>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}

            {{--                                        <div class="card-body pt-0 pt-md-4 mt-5">--}}
            {{--                                            <div class="row">--}}
            {{--                                                <div class="col">--}}
            {{--                                                    <div--}}
            {{--                                                        class="card-profile-stats d-flex justify-content-center mt-md-5">--}}

            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="text-center">--}}
            {{--                                                <h1> No tiene conductor asignado</h1>--}}
            {{--                                                <hr class="my-4">--}}
            {{--                                                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy--}}
            {{--                                                    — writes, performs and records all of his own music.</p>--}}
            {{--                                                <a href="{{ route('drivers.edit',$d->id) }}">Asignar Conductor</a>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}

            {{--                        </div>--}}
            {{--                    @endif--}}
            {{--                @endforeach--}}
            <!--    Datos del conductor     -->

            </div>
        </div>
    </div>
@endsection
