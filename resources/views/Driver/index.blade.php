@extends('layouts.app', ['activePage' => 'driver-management', 'titlePage' => __('Gestion Conductores')])

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
                            <h4 class="card-title">Conductores</h4>
                        </div>
                        <div class="col-12 text-right">
                            <a href="{{ route('drivers.create') }}" class="btn btn-sm btn-rose">Registrar</a>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table " id="datatables">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th></th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">status</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($drivers as $driver)
                                        <tr>
                                            <td class="text-center">{{ $driver->id }}</td>
                                            <td class="text-center">
                                                <div
                                                    class="avatar avatar-sm rounded-circle img-circle embed-responsive-21by9"
                                                    style="width:50px; height:50px;overflow: hidden;">
                                                    <img src="img/perfilConductor/{{ $driver->img }}" alt=""
                                                         style="max-width: 100px; " class="embed-responsive-21by9 ">
                                                </div>
                                            </td>
                                            <td>{{ $driver->firstName }}</td>
                                            <td> {{ $driver->lastName }} </td>
                                            <td class="text-center"> {{ $driver->phone }} </td>
                                            <td class="text-center"> {{ $driver->state }} </td>
                                            <td class="td-actions text-center">
                                                <form action="{{ route('drivers.destroy', $driver) }}" method="post">

                                                    <a rel="tooltip" class="btn btn-info btn-round"
                                                       href="{{ route('drivers.show', $driver->id) }}"
                                                       data-original-title="" title="">
                                                        <i class="material-icons">person</i>
                                                    </a>
                                                    <a rel="tooltip" class="btn btn-success btn-round"
                                                       href="{{ route('drivers.edit',$driver->id) }}">
                                                        <i class="material-icons">edit</i>
                                                    </a>

                                                    {{--eliminar--}}
                                                    @csrf
                                                    @method('delete')

                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round"
                                                            data-original-title="" title=""
                                                            onclick="confirm('{{ __("Esta seguro que desea eliminar este transporte?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </form>


                                                {{--eliminar--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--                            <div class="text-center">--}}
                                {{--                                {!! $drivers->render() !!}--}}
                                {{--                            </div>--}}
                            </div>
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
