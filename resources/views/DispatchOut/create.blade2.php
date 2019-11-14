@extends('layouts.app', ['activePage' => 'create-dOut', 'titlePage' => __('Registrar Salida')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('dispatchouts.store') }}" enctype="multipart/form-data"
                          autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <h4 class="card-title">{{ __('Registrar Salida') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('dispatchouts.index') }}"
                                           class="btn btn-sm btn-rose">Regresar</a>
                                    </div>
                                </div>


                                <!--     Codigo & Producto    -->
                                <div class="row">
                                    <!--    Codigo    -->
                                    <label class="col-sm-1 col-form-label"> </label>
                                    <div class="col-sm-5">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('code') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-code"
                                                   class="bmd-label-floating">{{ __('Codigo') }}</label>
                                            <input type="text" name="code" id="input-code"
                                                   class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}"
                                                   value="{{ old('code') }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('code'))
                                                <span id="code-error" class="error text-danger"
                                                      id="input-code"
                                                      for="input-code">{{ $errors->first('code') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--    Codigo    -->

                                    <!--    Total    -->
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('responsible') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-responsible"
                                                   class="bmd-label-floating">{{ __('Responsable') }}</label>
                                            <input type="text" name="responsible" id="input-responsible"
                                                   class="form-control{{ $errors->has('responsible') ? ' is-invalid' : '' }}"
                                                   value="{{ old('responsible') }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('responsible'))
                                                <span id="responsible-error" class="error text-danger"
                                                      id="input-responsible"
                                                      for="input-responsible">{{ $errors->first('responsible') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--    Responsable    -->

                                </div>
                                <!--     Codigo & Producto    -->


                                <!--    Producto & Cantidad & Presentacion     -->
                                <div class="row">

                                    <!--     Producto     -->
                                    <label class="col-sm-1 col-form-label">&nbsp;</label>
                                    <div class="col-sm-2">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('productId') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-productId" class="bmd-label-floating">{{ __('') }}</label>
                                            {!! Form::select('productId',$name,null,['class'=>"selectpicker show-tick ", $errors->has('status') ? ' is-invalid' : '' ,
                                            'title'=>'Seleccione un producto', 'required'=>'true', 'data-size'=>"5", 'id'=>'input-productId',
                                            'aria-required'=>'true','data-style'=>'select-with-transition'] ) !!}
                                            @if ($errors->has('productId'))
                                                <span id="productId-error" class="error text-danger"
                                                      id="input-productId"
                                                      for="input-productId">{{ $errors->first('productId') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--     Producto     -->

                                    <!--     Presentacion del Producto     -->
                                    <label class="col-sm-1 col-form-label "> </label>
                                    <div class="col-sm-2">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('presentationProduct') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-presentationProduct"
                                                   class="bmd-label-floating">{{ __('') }}</label>
                                            {!! Form::select('presentationProduct',[],null,['class'=>"selectpicker show-tick ", $errors->has('status') ? ' is-invalid' : '' ,
                                            'title'=>'Seleccione la presentacion del producto', 'required'=>'true', 'id'=>'presentationProduct',
                                             'data-size'=>"5", 'aria-required'=>'true','data-style'=>'select-with-transition']) !!}
                                            @if ($errors->has('presentationProduct'))
                                                <span id="presentationProduct-error" class="error text-danger"
                                                      id="input-presentationProduct"
                                                      for="input-presentationProduct">{{ $errors->first('presentationProduct') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--     Presentacion del Producto     -->

                                    <!--    Cantidad    -->
                                    <label class="col-sm-1 col-form-label "> </label>
                                    <div class="col-sm-2 mt-1 ">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('quantity') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-code"
                                                   class="bmd-label-floating ">{{ __('Cantidad') }}</label>
                                            <input type="text" name="quantity" id="input-quantity"
                                                   class="form-control  {{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                                   value="{{ old('quantity') }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('quantity'))
                                                <span id="quantity-error" class="error text-danger"
                                                      id="input-quantity"
                                                      for="input-quantity">{{ $errors->first('quantity') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--    Cantidad    -->

                                </div>
                                <!--    Producto & Cantidad & Presentacion    -->

                                <!--    Boton para agregar un producto     -->
                                <div class="col-md-10 text-right ">
                                    <a href="#" id="addProduct" class="btn btn-just-icon btn-round btn-info mr-5">
                                        <i class="material-icons">add_circle</i>
                                    </a>
                                </div>
                                <!--    Boton para agregar un producto     -->


                                <!--     Campo agregado de productos     -->
                                <div class="row" id="productos">

                                </div>
                                <!--      Campo agregado de productos    -->


                                <!--     Fecha de salida & Total     -->
                                <div class="row">
                                    <!--    Total   -->
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <!--    Total    -->
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('total') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-total"
                                                   class="bmd-label-floating">{{ __('Total') }}</label>
                                            <input type="text" name="total" id="input-total"
                                                   class="form-control{{ $errors->has('total') ? ' is-invalid' : '' }}"
                                                   value="{{ old('total') }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('total'))
                                                <span id="total-error" class="error text-danger"
                                                      id="input-total"
                                                      for="input-total">{{ $errors->first('total') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--    Total    -->

                                    <!--     Fecha de salidad     -->
                                    <label class="col-sm-1 col-form-label padding-horiz"></label>
                                    <div class="col-md-5">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('presentationProduct') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-code"
                                                   class="bmd-label-floating">{{ __('Codigo') }}</label>
                                            <input type="text" name="dateOut" id="input-code"
                                                   class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}"
                                                   value="{{ old('dateOut', $day) }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('presentationProduct'))
                                                <span id="presentationProduct-error" class="error text-danger"
                                                      id="input-presentationProduct"
                                                      for="input-presentationProduct">{{ $errors->first('presentationProduct') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--     Fecha de salidad     -->
                                </div>
                                <!--     Fecha de salida & Total     -->

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
                                                   value="{{ old('type') }}"
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
                                                   value="{{ old('plate') }}"
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

                                <div class="row">
                                    <!--    Codigo    -->
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('driverId') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-driverId"
                                                   class="bmd-label-floating">{{ __('Codigo') }}</label>
                                            <input type="text" name="code" id="input-code"
                                                   class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}"
                                                   value="{{ old('code') }}"
                                                   required="true" aria-required="true">
                                            @if ($errors->has('driverId'))
                                                <span id="driverId-error" class="error text-danger"
                                                      id="input-driverId"
                                                      for="input-driverId">{{ $errors->first('driverId') }}</span>
                                            @endif
                                        </div>
                                        <!--    Codigo    -->

                                        <!--     Producto     -->
                                        <label class="col-sm-4 col-form-label padding-horiz">&nbsp;</label>
                                        <div
                                            class="form-group col-md-4 bmd-form-group{{ $errors->has('status') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-status"
                                                   class="bmd-label-floating">{{ __('') }}</label>
                                            {!! Form::select('status',$presentation,null,['class'=>"selectpicker show-tick ", $errors->has('status') ? ' is-invalid' : '' ,
                                            'title'=>'estatus del camion', 'required'=>'true', 'data-size'=>"5", 'aria-required'=>'true','data-style'=>'select-with-transition']  ,['id'=>'input-status']) !!}
                                            @if ($errors->has('status'))
                                                <span id="status-error" class="error text-danger"
                                                      id="input-status"
                                                      for="input-status">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--     Producto     -->
                                </div>

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

@section('js')

    <script>

        $(document).ready(function () {
            let id = $('#input-productId').val();
            //var url = "http://127.0.0.1:8000/products/" + id;
            var url = `{{ url('products') }}/${id}`;

            $.get(url, function (res) {
                console.log(res);
                console.log(res.name);
                $('#input-presentationProduct').html('');
            });
        });
    </script>

    <script>
        let i = 1;
        $('#addProduct').click(function (e) {
            e.preventDefault();

            $('#productos').append(
                `
          <div class="row" id='add${i}'>
            <div class="col-md-3">
                {!! Form::label('id_book', 'Articulo', ['class' => "form-group col-form-label $errors->has('phone') ? 'has-danger' : '' "]) !!}
                {!! Form::text('id_book',null, ['placeholder' => 'Seleccione..', 'class' => 'form-control input-cuadrado id_book']) !!}
                </div>
              </div>
              <hr></div>
`
            );
        });
    </script>

@endsection
