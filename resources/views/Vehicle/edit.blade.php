@extends('layouts.app', ['activePage' => 'vehicle-management', 'titlePage' => __('Gestion Vehiculos')])

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('vehicles.update',$car) }}" enctype="multipart/form-data"
                          autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <h4 class="card-title">{{ __('Registrar Vehículo') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('vehicles.index') }}" class="btn btn-sm btn-rose">Regresar</a>
                                    </div>
                                </div>

                                <!--    Foto    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <label class="col-sm-2 col-form-label">  </label>
                                        <div class="fileinput fileinput-new text-center " required data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-circle">
                                                <img
                                                    src="{{ asset('img/infoVehiculo/'.$car->name.'.jpg') }}"
                                                    alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                            <div>
                                                <span class="btn btn-rose btn-file">
                                                    <span class="fileinput-new">Seleccionar Imagen</span>
                                                    <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="img" id="input-picture" >
                                                </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--    Foto    -->

                                <!--     Nombre    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }} ">
                                            <label for="input-name"
                                                   class="bmd-label-floating">{{ __('Nombre') }}</label>
                                            <input type="text" name="name" id="input-name"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   value="{{ old('name', $car->name) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger"
                                                      id="input-name"
                                                      for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--     Nombre    -->

                                <!--    Marca    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('brand') ? ' has-danger' : '' }} ">
                                            <label for="input-brand"
                                                   class="bmd-label-floating">{{ __('Marca') }}</label>
                                            <input type="text" name="brand" id="input-brand"
                                                   class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}"
                                                   value="{{ old('brand', $car->brand) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('brand'))
                                                <span id="brand-error" class="error text-danger"
                                                      id="input-brand"
                                                      for="input-brand">{{ $errors->first('brand') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Marca    -->

                                <!--     Modelo     -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('model') ? ' has-danger' : '' }} ">
                                            <label for="input-model"
                                                   class="bmd-label-floating">{{ __('Modelo') }}</label>
                                            <input type="text" name="model" id="input-model"
                                                   class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}"
                                                   value="{{ old('model', $car->model) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('model'))
                                                <span id="model-error" class="error text-danger"
                                                      id="input-model"
                                                      for="input-model">{{ $errors->first('model') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--     Modelo     -->

                                <!--    Tipo    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('type') ? ' has-danger' : '' }} ">
                                            <label for="input-type"
                                                   class="bmd-label-floating">{{ __('Tipo de transporte') }}</label>
                                            <input type="text" name="type" id="input-type"
                                                   class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
                                                   value="{{ old('type', $car->type) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('type'))
                                                <span id="type-error" class="error text-danger"
                                                      id="input-type"
                                                      for="input-type">{{ $errors->first('type') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Tipo    -->

                                <!--    Placa    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('plate') ? ' has-danger' : '' }} ">
                                            <label for="input-plate"
                                                   class="bmd-label-floating">{{ __('plate') }}</label>
                                            <input type="text" name="plate" id="input-plate"
                                                   class="form-control{{ $errors->has('plate') ? ' is-invalid' : '' }}"
                                                   value="{{ old('plate', $car->plate) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('plate'))
                                                <span id="plate-error" class="error text-danger"
                                                      id="input-plate"
                                                      for="input-plate">{{ $errors->first('plate') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Placa    -->

                                <!--    Conductor    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('driverId') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-driverId"
                                                   class="bmd-label-floating">{{ __('') }}</label>
                                            {!! Form::select('driverId',$driver,$car->driverId,['class'=>"selectpicker show-tick ", $errors->has('driverId') ? ' is-invalid' : '' ,
                                            'title'=>'Seleccione un conductor', 'required'=>'true', 'data-size'=>"5", 'aria-required'=>'true','data-style'=>'select-with-transition']  ,['id'=>'input-driverId']) !!}
                                            @if ($errors->has('driverId'))
                                                <span id="driverId-error" class="error text-danger"
                                                      id="input-driverId"
                                                      for="input-driverId">{{ $errors->first('driverId') }}</span>
                                            @endif
                                        </div>
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <!--    Conductor    -->

                                        <!--     Estatus     -->
                                        {{--                                <div class="row">--}}
                                        <label class="col-sm-3 col-form-label padding-horiz">&nbsp;</label>
                                        {{--                                    <div class="col-sm-7">--}}
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('status') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-status"
                                                   class="bmd-label-floating">{{ __('') }}</label>
                                            {!! Form::select('status',$statu,$car->status,['class'=>"selectpicker show-tick ", $errors->has('status') ? ' is-invalid' : '' ,
                                            'title'=>'estatus del camion', 'required'=>'true', 'data-size'=>"5", 'aria-required'=>'true','data-style'=>'select-with-transition']  ,['id'=>'input-status']) !!}
                                            @if ($errors->has('status'))
                                                <span id="status-error" class="error text-danger"
                                                      id="input-status"
                                                      for="input-status">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--     Estatus     -->

                            </div>
                            <br/><br/>

                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
