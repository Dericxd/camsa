@extends('layouts.app', ['activePage' => 'dOut-management', 'titlePage' => __('Gestion Salidas')])

@section('content')

    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Salidas</h4>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table " id="datatables">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Codigo</th>
                                        <th>Producto</th>
                                        <th>Presentacion</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-center">Fecha de salidad</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($outs as $out)
                                        <tr>
                                            <td class="text-center">{{ $out->id }}</td>
                                            <td>{{ $out->code }}</td>
                                            <td>
                                                @foreach($products as $product)
                                                    @if($out->productId == $product->id)

                                                        {{$product->name}}

                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($products as $product)
                                                    @if($out->productId == $product->id)

                                                        {{$product->presentation}}

                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="text-center">{{ $out->quantity }}</td>
                                            <td class="text-center">{{ $out->dateOut }}</td>
                                            <td class="td-actions text-center">
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
{{--                            <div class="text-center">--}}
{{--                                {!! $outs->render() !!}--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')

    <script>

        $(document).ready(function () {

            $('#datatables').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
                },
                "paging": true,
                "order": [[0, 'desc']],
                "info": true,
                // "autoFill": true,
            })

        });
    </script>

@endsection
