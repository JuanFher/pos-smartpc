@extends('layouts.app')

@section('title', 'Smartpc - home')

@section('styles')
    
@endsection

@section('breadcrumbs')
    <div class="page-header">
        <div class="page-title">
            <h3>Page Title</h3>
        </div>

        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kits</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Breadcrumb</span></li>
            </ol>
        </nav>

    </div>
@endsection

@section('content')

    <h1>Hola desde el demo</h1>    
    
@endsection

@section('scripts')
    {{-- expr --}}
@endsection
