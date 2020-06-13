@extends('layouts.app',['title'=>'Categorías'])
@section('breadcrumbs', Breadcrumbs::render('categorias'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Categorías
                    <a  href="{{ route('nuevoCategoria') }}" class="float-right" data-toggle="tooltip" data-placement="top" title="Ingresar nuevo categoría">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        {{$dataTable->table()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('linksCabeza')
{{--  datatable  --}}
<link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables/datatables.min.css') }}"/>
<script type="text/javascript" src="{{ asset('js/DataTables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

@endpush

@prepend('linksPie')
    <script>
    $('#almacen').addClass('active');
    $('#categorias').addClass('active');

    </script>
    {!! $dataTable->scripts() !!}
@endprepend


@endsection
