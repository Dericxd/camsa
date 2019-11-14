@extends('layouts.app', ['activePage' => 'vehicle-management', 'titlePage' => __('Gestion Vehiculos')])

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
                            <h4 class="card-title">Vehiculos</h4>
                        </div>
                        <div class="col-12 text-right">
                            <a href="{{ route('vehicles.create') }}" class="btn btn-sm btn-rose">Registrar</a>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table" id="datatables">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nombre</th>
                                        <th>Modelo</th>
                                        <th>Tipo</th>
                                        <th class="text-center">Placa</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cars as $car)
                                        <tr>
                                            <td class="text-center">{{ $car->id }}</td>
                                            <td>{{ $car->name }}</td>
                                            <td> {{ $car->model }} </td>
                                            <td> {{$car->type}} </td>
                                            <td class="text-center"> {{ $car->plate }} </td>
                                            <td class="text-center"> {{ $car->status }} </td>
                                            <td class="td-actions text-center">
                                                <form action="{{ route('vehicles.destroy', $car) }}" method="post">
                                                    <a href="{{ route('vehicles.show',$car->id) }}" rel="tooltip" class="btn btn-info btn-round"
                                                       data-original-title="" title="">
                                                        <i class="material-icons">person</i>
                                                    </a>
                                                    <a rel="tooltip" class="btn btn-success btn-round"
                                                       href="{{ route('vehicles.edit',$car->id) }}">
                                                        <i class="material-icons">edit</i>
                                                    </a>

{{--                                                    eliminar--}}
                                                    @csrf
                                                    @method('delete')

                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round"
                                                            data-original-title="" title=""
                                                            onclick="confirm('{{ __("Esta seguro que desea eliminar este transporte?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>

{{--                                                    <a href="{{ route('vehicles.destroy',$car->id) }}"--}}
{{--                                                       onclick="return confirm('¿ Desea eliminar el libro  {{ $car->name }}?')"--}}
{{--                                                       class="btn btn-danger active ">--}}
{{--                                                        <span class="glyphicon glyphicon-remove-circle"></span>--}}
{{--                                                    </a>--}}

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{--                            <div class="text-center">--}}
                            {{--                                {!! $cars->render() !!}--}}
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
