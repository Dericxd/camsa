@extends('layouts.app', ['activePage' => 'dIn-management', 'titlePage' => __('Gestion Entradas')])

@section('content')

    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Entradas</h4>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Codigo</th>
                                        <th>Producto</th>
                                        <th>Presentacion</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-right">Fecha de entrada</th>
                                        <th class="text-right">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ins as $in)
                                        <tr>
                                            <td class="text-center">{{ $in->id }}</td>
                                            <td>{{ $in->code }}</td>
                                            <td>
                                                @foreach($products as $product)
                                                    @if($in->product_id == $product->id)

                                                        {{$product->name}}

                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($products as $product)
                                                    @if($in->product_id == $product->id)

                                                        {{$product->presentation}}

                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="text-center">{{ $in->quantity }}</td>
                                            <td class="text-right">{{ $in->date_in }}</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-round"
                                                        data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                        data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round"
                                                        data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                                <div class="text-center">
                                    {!! $ins->render() !!}
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
