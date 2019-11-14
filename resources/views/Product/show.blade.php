@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Gestion Producto')])

@section('content')

    {{ dd($product) }}

@endsection
