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
                                <div class="row mt-3" id="productos">

                                {{--                                    <!--     Producto     -->--}}
                                {{--                                    <label class="col-sm-1 col-form-label">&nbsp;</label>--}}
                                {{--                                    <div class="col-sm-2">--}}
                                {{--                                        <div--}}
                                {{--                                            class="form-group bmd-form-group{{ $errors->has('productId') ? ' has-danger' : '' }} dropdown bootstrap-select ">--}}
                                {{--                                            <label for="input-productId" class="bmd-label-floating">{{ __('') }}</label>--}}
                                {{--                                            {!! Form::select('productId',$name,null,['class'=>"selectpicker SProduct show-tick ", $errors->has('status') ? ' is-invalid' : '' ,--}}
                                {{--                                            'title'=>'Seleccione un producto', 'required'=>'true', 'data-size'=>"5", 'id'=>'input-productId',--}}
                                {{--                                            'aria-required'=>'true','data-style'=>'select-with-transition'] ) !!}--}}
                                {{--                                            @if ($errors->has('productId'))--}}
                                {{--                                                <span id="productId-error" class="error text-danger"--}}
                                {{--                                                      id="input-productId"--}}
                                {{--                                                      for="input-productId">{{ $errors->first('productId') }}</span>--}}
                                {{--                                            @endif--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!--     Producto     -->--}}

                                {{--                                    <!--     Presentacion del Producto     -->--}}
                                {{--                                    <label class="col-sm-1 col-form-label "> </label>--}}
                                {{--                                    <div class="col-sm-2">--}}
                                {{--                                        <div--}}
                                {{--                                            class="form-group bmd-form-group{{ $errors->has('presentationProduct') ? ' has-danger' : '' }} dropdown bootstrap-select ">--}}
                                {{--                                            <label for="input-presentationProduct"--}}
                                {{--                                                   class="bmd-label-floating">{{ __('') }}</label>--}}
                                {{--                                            {!! Form::select('presentationProduct',[],null,['class'=>"selectpicker show-tick ", $errors->has('status') ? ' is-invalid' : '' ,--}}
                                {{--                                            'title'=>'Seleccione la presentacion del producto', 'required'=>'true', 'id'=>'presentationProduct',--}}
                                {{--                                             'data-size'=>"5", 'aria-required'=>'true','data-style'=>'select-with-transition']) !!}--}}
                                {{--                                            @if ($errors->has('presentationProduct'))--}}
                                {{--                                                <span id="presentationProduct-error" class="error text-danger"--}}
                                {{--                                                      id="input-presentationProduct"--}}
                                {{--                                                      for="input-presentationProduct">{{ $errors->first('presentationProduct') }}</span>--}}
                                {{--                                            @endif--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!--     Presentacion del Producto     -->--}}

                                {{--                                    <!--    Cantidad    -->--}}
                                {{--                                    <label class="col-sm-1 col-form-label "> </label>--}}
                                {{--                                    <div class="col-sm-2 mt-1 ">--}}
                                {{--                                        <div--}}
                                {{--                                            class="form-group bmd-form-group{{ $errors->has('quantity') ? ' has-danger' : '' }} dropdown bootstrap-select">--}}
                                {{--                                            <label for="input-code"--}}
                                {{--                                                   class="bmd-label-floating ">{{ __('Cantidad') }}</label>--}}
                                {{--                                            <input type="text" name="quantity" id="input-quantity"--}}
                                {{--                                                   class="form-control  {{ $errors->has('quantity') ? ' is-invalid' : '' }}"--}}
                                {{--                                                   value="{{ old('quantity') }}"--}}
                                {{--                                                   required="true" aria-required="true">--}}
                                {{--                                            @if ($errors->has('quantity'))--}}
                                {{--                                                <span id="quantity-error" class="error text-danger"--}}
                                {{--                                                      id="input-quantity"--}}
                                {{--                                                      for="input-quantity">{{ $errors->first('quantity') }}</span>--}}
                                {{--                                            @endif--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <!--    Cantidad    -->

                                </div>
                                <!--    Producto & Cantidad & Presentacion    -->

                                <!--    Boton para agregar un producto     -->
                                <div class="col-md-9 text-right m-2">
                                    <a href="#" id="addProduct" class="btn btn-just-icon btn-round btn-info ">
                                        {{--                                        <i class="material-icons">add_circle</i>--}}
                                        <i class="material-icons">add_circle_outline</i>
                                    </a>
                                </div>
                                <!--    Boton para agregar un producto     -->


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
                                    <label class="col-sm-1 col-form-label "></label>
                                    <div class="col-md-5">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('dateOut') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-dateOut"
                                                   class="bmd-label-floating">{{ __('Fecha') }}</label>
                                            <input type="text" name="dateOut" id="input-dateOut"
                                                   class="form-control {{ $errors->has('dateOut') ? ' is-invalid' : '' }}"
                                                   value="{{ old('dateOut', $day) }}"
                                                   required="true" aria-required="true" />
                                            @if ($errors->has('dateOut'))
                                                <span id="dateOut-error" class="error text-danger"
                                                      id="input-dateOut"
                                                      for="input-dateOut">{{ $errors->first('dateOut') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--     Fecha de salidad     -->
                                </div>
                                <!--     Fecha de salida & Total     -->


                                <!--     Observacion & Descripcion     -->
                                <div class="row mt-2">
                                    <!--    observation   -->
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('observation') ? ' has-danger' : '' }} dropdown bootstrap-select">
                                            <label for="input-observation"
                                                   class="bmd-label-floating">{{ __('Observacion') }}</label>
                                            <textarea cols="2" rows="2" name="observation" id="input-observation"
                                                   class="form-control{{ $errors->has('observation') ? ' is-invalid' : '' }}"
                                                   value="{{ old('observation') }}"
                                                      required="true"></textarea>
                                            @if ($errors->has('observation'))
                                                <span id="total-error" class="error text-danger"
                                                      id="input-observation"
                                                      for="input-observation">{{ $errors->first('observation') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--    Observacion    -->

                                    <!--     Descripcion     -->
                                    <label class="col-sm-1 col-form-label padding-horiz"></label>
                                    <div class="col-md-5">
                                        <div
                                            class="form-group bmd-form-group{{ $errors->has('description') ? ' has-danger' : '' }} dropdown bootstrap-select ">
                                            <label for="input-description"
                                                   class="bmd-label-floating">{{ __('Fecha') }}</label>
                                            <textarea type="text" name="description" id="input-description"
                                                   class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                   value="{{ old('ddescription') }}"
                                                      required="true" aria-required="true"></textarea>
                                            @if ($errors->has('description'))
                                                <span id="description-error" class="error text-danger"
                                                      id="input-description"
                                                      for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--     observation     -->
                                </div>
                                <!--     Fecha de salida & Total     -->


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


{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('.SProduct').select2();--}}
{{--        });--}}
{{--    </script>--}}



    {{--    para agregar mas producto--}}
    <script>
        let i = 1;

        $('#addProduct').click(function (e) {

            e.preventDefault();
            $('#productos').append(`
                <div class="col-md-12 row"  id='add${i}'>
                    <label class="col-sm-1 col-form-label"></label>
                    <div class="col-sm-2 mr-2">
                        <div class="form-group bmd-form-group{{ $errors->has("productId") ? " has-danger" : "" }}">
                            <label for="productId" class="bmd-label-floating">{{ __("") }}</label>
                            {!! Form::select("productId[]",$name,null,["class"=>"form-control SProduct",
                            "title"=>"Seleccione un producto productId", "placeholder"=>"selecione Producto","required"=>true, "data-size"=>"5", "id"=>"productId" ] ) !!}
            </div>
        </div>



    </div>
`);


            $('#productId').change(function () {
                let id = this.value;
                $.get(`{{ url('/products') }}/${id}`, (res) => {
                    $('#add'+i).append(`


                    <label class="col-sm-1 col-form-label"></label>
                    <div class="col-sm-2 mr-2">
                        <div class="form-group bmd-form-group{{ $errors->has("productId") ? " has-danger" : "" }}">
                            <label for="presentationProduct" class="bmd-label-floating">{{ __("") }}</label>
                            <input type="text" name="presentationProduct[]" id="presentation[${i}]"
                                class="form-control presentationProduct${i} {{ $errors->has("presentationProduct") ? " is-invalid" : "" }}"
                                value="${res.presentation}" required=true" aria-required="true">

                    </div>
                </div>


              <label class="col-sm-1 col-form-label "></label>
              <div class="col-sm-2 mt-1 ">
                <div class="form-group bmd-form-group{{ $errors->has('quantity') ? ' has-danger' : '' }} ">
                    <label for="quantity" class="bmd-label-floating ">{{ __('Cantidad') }}</label>
                    <input type="text" name="quantity[]" id="quantity[${i}]" class="form-control quantity${i}
                      {{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') }}" required="true" ">

                    </div>
                  </div>
                    <div class="col-md-2">
                    <button class='btn btn-just-icon btn-link btn-google ' onclick="deleteRow(${i})">
                        <i class="material-icons">remove_circle</i>
                    </button>
                </div>
            `);
                    console.log(res,i);
                    i++;
                });
            })


        });


        function deleteRow(e){
            $('#add'+e).html('');
            // subTotal();
        }

    </script>


@endsection
