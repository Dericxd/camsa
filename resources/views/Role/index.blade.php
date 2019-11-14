@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <table class="table table-hover table-dark">
                    <thead>

                    <tr class="bg-primary">
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nombre</th>
                        <th scope="col" class="text-center">Area</th>
                        <th scope="col" class="text-center">Descripcion</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $rol)

                        <tr>
                            <th class="text-center"> {{$rol->id}} </th>
                            <th class="text-center"> {{ $rol->name}} </th>
                            <th class="text-center"> {{$rol->area}} </th>
                            <th class="text-center"> {{ $rol->description }} </th>
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
                    {!! $roles->render() !!}
                </div>

            </div>
        </div>
    </div>

@endsection

