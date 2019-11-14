@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Gestion Producto')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('products.update', $product) }}" enctype="multipart/form-data"
                          autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <h4 class="card-title">{{ __('Modificar Producto') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('products.index') }}" class="btn btn-sm btn-rose">Regresar</a>
                                    </div>
                                </div>

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
                                                   value="{{ old('name', $product->name) }}"
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

                                <!--    Cantidad    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('quantity') ? ' has-danger' : '' }} ">
                                            <label for="input-quantity"
                                                   class="bmd-label-floating">{{ __('Cantidad') }}</label>
                                            <input type="text" name="quantity" id="input-quantity"
                                                   class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                                   value="{{ old('quantity', $product->quantity) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('brand'))
                                                <span id="quantity-error" class="error text-danger"
                                                      id="input-quantity"
                                                      for="input-quantity">{{ $errors->first('quantity') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Cantidad    -->

                                <!--    Presentacion    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('presentation') ? ' has-danger' : '' }} ">
                                            <label for="input-presentation"
                                                   class="bmd-label-floating">{{ __('Presentación') }}</label>
                                            <input type="text" name="presentation" id="input-presentation"
                                                   class="form-control{{ $errors->has('presentation') ? ' is-invalid' : '' }}"
                                                   value="{{ old('presentation', $product->presentation) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('type'))
                                                <span id="presentation-error" class="error text-danger"
                                                      id="input-presentation"
                                                      for="input-presentation">{{ $errors->first('presentation') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Presentacion    -->

                                <!--     Unidades     -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('unity') ? ' has-danger' : '' }} ">
                                            <label for="input-unity"
                                                   class="bmd-label-floating">{{ __('Unidades') }}</label>
                                            <input type="text" name="unity" id="input-unity"
                                                   class="form-control{{ $errors->has('unity') ? ' is-invalid' : '' }}"
                                                   value="{{ old('unity', $product->unity) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('unity'))
                                                <span id="unity-error" class="error text-danger"
                                                      id="input-unity"
                                                      for="input-unity">{{ $errors->first('unity') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--     Unidades     -->

                                <!--    Monto    -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('amount') ? ' has-danger' : '' }} ">
                                            <label for="input-amount"
                                                   class="bmd-label-floating">{{ __('Monto') }}</label>
                                            <input type="text" name="amount" id="input-plate"
                                                   class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                                   value="{{ old('amount', $product->amount) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('amount'))
                                                <span id="amount-error" class="error text-danger"
                                                      id="input-amount"
                                                      for="input-amount">{{ $errors->first('amount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--    Monto    -->

                                <!--    Estatus esto no va aqui    -->
                                <div class="row">

                                    <label class="col-sm-2 col-form-label padding-horiz">&nbsp;</label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('status') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-status"
                                                   class="bmd-label-floating">{{ __('') }}</label>
                                            {!! Form::select('status',$statu,$product->status,['class'=>"selectpicker show-tick ", $errors->has('status') ? ' is-invalid' : '' ,
                                            'title'=>'estatus del producto', 'required'=>'true', 'data-size'=>"5", 'aria-required'=>'true','data-style'=>'select-with-transition']  ,['id'=>'input-status']) !!}
                                            @if ($errors->has('status'))
                                                <span id="status-error" class="error text-danger"
                                                      id="input-status"
                                                      for="input-status">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--     Estatus esto no va aqui     -->

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
