@extends('layouts.app', ['activePage' => 'driver-management', 'titlePage' => __('Gestion Conductores')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('drivers.update', $driver) }}" enctype="multipart/form-data"
                          autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <h4 class="card-title">{{ __('Registrar Conductor') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('drivers.index') }}" class="btn btn-sm btn-rose">Regresar</a>
                                    </div>
                                </div>
                                <!--    Foto    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-circle">
                                                <img
                                                    src="{{ asset('img/perfilConductor/'.$driver->img) }}"
                                                    alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                            <div>
                                                <span class="btn btn-rose btn-file">
                                                    <span class="fileinput-new">Seleccionar Imagen</span>
                                                    <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="img" id="input-picture">
                                                </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--    Foto    -->

                                <!--     Nombres    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('firstName') ? ' has-danger' : '' }} ">
                                            <label for="input-firstName"
                                                   class="bmd-label-floating">{{ __('Nombre(s)') }}</label>
                                            <input type="text" name="firstName" id="input-firstName"
                                                   class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}"
                                                   value="{{ old('firstName', $driver->firstName) }}"
                                                   required="true" aria-required="true" />
                                            @if ($errors->has('firstName'))
                                                <span id="firstName-error" class="error text-danger"
                                                      id="input-firstName"
                                                      for="input-firstName">{{ $errors->first('firstName') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <!--     Nombres    -->

                                <!--    Apellidos   -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('lastName') ? ' has-danger' : '' }} ">
                                            <label for="input-lastName"
                                                   class="bmd-label-floating">{{ __('Apellido(s)') }}</label>
                                            <input type="text" name="lastName" id="input-lastName"
                                                   class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                                   value="{{ old('lastName',$driver->lastName) }}"
                                                   required aria-required>
                                            @if ($errors->has('lastName'))
                                                <span id="lastName-error" class="error text-danger"
                                                      id="input-lastName"
                                                      for="input-lastName">{{ $errors->first('lastName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Apellidos   -->

                                <!--    Cedulas     -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('ci') ? ' has-danger' : '' }} ">
                                            <label for="input-ci"
                                                   class="bmd-label-floating">{{ __('Cedula') }}</label>
                                            <input type="text" name="ci" id="input-ci"
                                                   class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}"
                                                   value="{{ old('ci',$driver->ci) }}"
                                                   required aria-required>
                                            @if ($errors->has('ci'))
                                                <span id="ci-error" class="error text-danger"
                                                      id="input-ci"
                                                      for="input-ci">{{ $errors->first('ci') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Cedulas     -->

                                <!--    Telefono    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('phone') ? ' has-danger' : '' }} ">
                                            <label for="input-phone"
                                                   class="bmd-label-floating">{{ __('Telefono') }}</label>
                                            <input type="text" name="phone" id="input-phone"
                                                   class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                   value="{{ old('phone',$driver->phone) }}"
                                                   required aria-required>
                                            @if ($errors->has('phone'))
                                                <span id="phone-error" class="error text-danger"
                                                      id="input-phone"
                                                      for="input-phone">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Telefono    -->

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Add User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
