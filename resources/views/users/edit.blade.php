@extends('layouts.app')

@section('page-header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-users4 position-left"></i> <span class="text-semibold">{{ __('Usuarios') }}</span> - {{ __('Editar perfil') }}
                    <small class="display-block">{{ __('Edita la información de tu perfil.') }}</small>
                </h4>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/"><i class="icon-home2 position-left"></i> {{ __('Inicio') }}</a></li>
                <li><a>{{ __('Usuarios') }}</a></li>
                <li class="active">{{ __('Editar perfil') }}</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">{{ __('Información de tu cuenta') }}</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <edit-profile :user_id="{{ Auth::user()->id }}"></edit-profile>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function () {

            // Styled form components
            // ------------------------------

            // Checkboxes, radios
        });
    </script>
@endsection
